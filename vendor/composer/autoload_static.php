<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadebf6d470e08cfd87e87755ec234001
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nazmulcurd\\Simplecurd\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nazmulcurd\\Simplecurd\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitadebf6d470e08cfd87e87755ec234001::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadebf6d470e08cfd87e87755ec234001::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitadebf6d470e08cfd87e87755ec234001::$classMap;

        }, null, ClassLoader::class);
    }
}
