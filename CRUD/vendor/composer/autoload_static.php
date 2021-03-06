<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88d0b8c38efdc9226b1f2f317393da5f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit88d0b8c38efdc9226b1f2f317393da5f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88d0b8c38efdc9226b1f2f317393da5f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88d0b8c38efdc9226b1f2f317393da5f::$classMap;

        }, null, ClassLoader::class);
    }
}
