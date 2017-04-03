<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit325c1b9d87f22409af8475b226422f8d
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit325c1b9d87f22409af8475b226422f8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit325c1b9d87f22409af8475b226422f8d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
