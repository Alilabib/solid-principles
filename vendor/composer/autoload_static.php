<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ff624a11e091437e6cbdea101a9934e
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'interfaces\\' => 11,
        ),
        'c' => 
        array (
            'classes\\' => 8,
        ),
        'P' => 
        array (
            'Players\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/interfaces',
        ),
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Players\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Players',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ff624a11e091437e6cbdea101a9934e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ff624a11e091437e6cbdea101a9934e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ff624a11e091437e6cbdea101a9934e::$classMap;

        }, null, ClassLoader::class);
    }
}
