<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb55ce4044ded8835051a1d8555d4c35
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb55ce4044ded8835051a1d8555d4c35::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb55ce4044ded8835051a1d8555d4c35::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
