<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2a1495f79681740522b8d3644ccc4c4
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

    public static $classMap = array (
        'SimpleMail' => __DIR__ . '/..' . '/eoghanobrien/php-simple-mail/class.simple_mail.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2a1495f79681740522b8d3644ccc4c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2a1495f79681740522b8d3644ccc4c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite2a1495f79681740522b8d3644ccc4c4::$classMap;

        }, null, ClassLoader::class);
    }
}
