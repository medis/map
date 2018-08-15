<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita53fd4712377a375d92844a4fa2da14c
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'medis\\' => 6,
        ),
        'P' => 
        array (
            'Predis\\' => 7,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'medis\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita53fd4712377a375d92844a4fa2da14c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita53fd4712377a375d92844a4fa2da14c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}