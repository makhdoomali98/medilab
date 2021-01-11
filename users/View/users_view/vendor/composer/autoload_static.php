<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd294e3cfbc10ea0b6297d5db7a678dd
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd294e3cfbc10ea0b6297d5db7a678dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd294e3cfbc10ea0b6297d5db7a678dd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdd294e3cfbc10ea0b6297d5db7a678dd::$classMap;

        }, null, ClassLoader::class);
    }
}
