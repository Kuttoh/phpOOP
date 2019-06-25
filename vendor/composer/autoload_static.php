<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4b1488f7a8c5f9541b9a5a91bb083a0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4b1488f7a8c5f9541b9a5a91bb083a0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4b1488f7a8c5f9541b9a5a91bb083a0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd4b1488f7a8c5f9541b9a5a91bb083a0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
