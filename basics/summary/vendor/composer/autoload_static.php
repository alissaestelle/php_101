<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ce5beb55ed80a3872226f8ecd48a66c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Summary\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Summary\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ce5beb55ed80a3872226f8ecd48a66c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ce5beb55ed80a3872226f8ecd48a66c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ce5beb55ed80a3872226f8ecd48a66c::$classMap;

        }, null, ClassLoader::class);
    }
}
