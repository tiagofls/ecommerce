<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88983d8de97d0545e7d33542f3dd3fd0
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

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/TiagoS12/php-classes/src',
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88983d8de97d0545e7d33542f3dd3fd0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88983d8de97d0545e7d33542f3dd3fd0::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit88983d8de97d0545e7d33542f3dd3fd0::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit88983d8de97d0545e7d33542f3dd3fd0::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit88983d8de97d0545e7d33542f3dd3fd0::$classMap;

        }, null, ClassLoader::class);
    }
}
