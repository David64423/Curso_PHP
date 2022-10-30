<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42156edc5ed70cbdff6fdbbdec7cf90b
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'David64423\\Poo\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'David64423\\Poo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit42156edc5ed70cbdff6fdbbdec7cf90b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42156edc5ed70cbdff6fdbbdec7cf90b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit42156edc5ed70cbdff6fdbbdec7cf90b::$classMap;

        }, null, ClassLoader::class);
    }
}