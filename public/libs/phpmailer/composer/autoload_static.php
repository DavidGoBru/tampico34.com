<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5c4442dea15c607ea5f7c7092fc60bc
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5c4442dea15c607ea5f7c7092fc60bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5c4442dea15c607ea5f7c7092fc60bc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
