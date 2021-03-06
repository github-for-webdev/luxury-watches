<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5275bb2704dd86d218501995d9a04fcc
{
    public static $prefixLengthsPsr4 = array(
        'i' =>
        array(
            'ishop\\' => 6,
        ),
        'a' =>
        array(
            'app\\' => 4,
        ),
        'R' =>
        array(
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array(
        'ishop\\' =>
        array(
            0 => __DIR__ . '/..' . '/ishop/core',
        ),
        'app\\' =>
        array(
            0 => __DIR__ . '/../..' . '/app',
        ),
        'RedBeanPHP\\' =>
        array(
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static $classMap = array(
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5275bb2704dd86d218501995d9a04fcc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5275bb2704dd86d218501995d9a04fcc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5275bb2704dd86d218501995d9a04fcc::$classMap;
        }, null, ClassLoader::class);
    }
}
