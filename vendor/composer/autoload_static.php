<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7f5d3c6025ae6e143d207caf49e9f3c
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cocong\\Test\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cocong\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7f5d3c6025ae6e143d207caf49e9f3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7f5d3c6025ae6e143d207caf49e9f3c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
