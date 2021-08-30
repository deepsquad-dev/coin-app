<?php

namespace App\Models;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DeepsquadDev\CoinbaseWrapper\Exceptions\WebhookException;

class CoinbaseWebhook extends Model
{

    public $guarded = [];

    protected $casts = [
        'payload' => 'array',
        'exception' => 'array',
    ];

    public function process()
    {
        $this->clearException();

        if ($this->type === '') {
            throw WebhookException::missingType($this);
        }

        event("coinbase::{$this->type}", $this);

        $job = $this->determineJob($this->type);

        if ($job === '') {
            return;
        }

        if (!class_exists($job)) {
            throw WebhookException::jobClassDoesnOtExist($this);
        }

        dispatch(new $job($this));
    } 

    public function saveException(Exception $exception)
    {
        $this->exception = [
            'code' => $exception->getCode(),
            'message' => $exception->getMessage(),
            'trace' => $exception->etTraceAsString(),
        ];

        $this->save();

        return $this;
    }

    protected function determineJob(string $eventType): string
    {
        $jobKey = str_replace('.', '_', $eventType);
        
        return config("coinbase.webhookJobs.{$jobKey}", '');
    }
    
    protected function clearException()
    {
        $this->exception = null;

        $this->save();

        return $this;
    }
}
