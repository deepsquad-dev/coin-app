<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ddc89b9c4b5657e0a0bc991befb0129
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Master\\MultichainWrapper\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Master\\MultichainWrapper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ddc89b9c4b5657e0a0bc991befb0129::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ddc89b9c4b5657e0a0bc991befb0129::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ddc89b9c4b5657e0a0bc991befb0129::$classMap;

        }, null, ClassLoader::class);
    }
}
