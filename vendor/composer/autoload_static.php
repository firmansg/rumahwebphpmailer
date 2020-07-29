<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e1c9d9df0f2d6bbc4ab8d4726df4686
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e1c9d9df0f2d6bbc4ab8d4726df4686::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e1c9d9df0f2d6bbc4ab8d4726df4686::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}