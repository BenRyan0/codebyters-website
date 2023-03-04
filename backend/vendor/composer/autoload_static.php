<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff8721ae396f677a561cd6f7d1bbf9b6
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitff8721ae396f677a561cd6f7d1bbf9b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff8721ae396f677a561cd6f7d1bbf9b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitff8721ae396f677a561cd6f7d1bbf9b6::$classMap;

        }, null, ClassLoader::class);
    }
}
