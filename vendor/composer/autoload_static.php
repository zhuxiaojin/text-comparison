<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb493e2a53ebfe041dc04b8f09cf69d6e
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Text\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Text',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb493e2a53ebfe041dc04b8f09cf69d6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb493e2a53ebfe041dc04b8f09cf69d6e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
