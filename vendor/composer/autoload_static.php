<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit366d7a1dd24dc09561f177230a1f0bd0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'ProparCompany\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ProparCompany\\' => 
        array (
            0 => __DIR__ . '/../..' . '/MODELE',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit366d7a1dd24dc09561f177230a1f0bd0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit366d7a1dd24dc09561f177230a1f0bd0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
