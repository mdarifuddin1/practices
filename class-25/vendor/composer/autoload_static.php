<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8feafea928696fba34965c250b440405
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8feafea928696fba34965c250b440405::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8feafea928696fba34965c250b440405::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8feafea928696fba34965c250b440405::$classMap;

        }, null, ClassLoader::class);
    }
}
