<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class Trending extends Api
{
    public function getTrending(): array
    {
        return $this->get('/search/trending');
    }
}
