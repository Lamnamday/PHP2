<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ab1b7c3c3a4a39791c6dbd8e15a5dfe
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lam\\Bai3\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lam\\Bai3\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ab1b7c3c3a4a39791c6dbd8e15a5dfe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ab1b7c3c3a4a39791c6dbd8e15a5dfe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4ab1b7c3c3a4a39791c6dbd8e15a5dfe::$classMap;

        }, null, ClassLoader::class);
    }
}