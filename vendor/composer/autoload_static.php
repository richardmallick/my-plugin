<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbbf90aaa6b7161ddc6ba2e2da729b051
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'myPlugin\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'myPlugin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbbf90aaa6b7161ddc6ba2e2da729b051::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbbf90aaa6b7161ddc6ba2e2da729b051::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
