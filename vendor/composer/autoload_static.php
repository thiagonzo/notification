<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcbba3e5a36b3816649ca329ca7f3527a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'N' => 
        array (
            'Notification\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Notification\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcbba3e5a36b3816649ca329ca7f3527a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcbba3e5a36b3816649ca329ca7f3527a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcbba3e5a36b3816649ca329ca7f3527a::$classMap;

        }, null, ClassLoader::class);
    }
}