<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c92e48d41c405d5abf2c745f7a68830
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'ChallengeNova\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ChallengeNova\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c92e48d41c405d5abf2c745f7a68830::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c92e48d41c405d5abf2c745f7a68830::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c92e48d41c405d5abf2c745f7a68830::$classMap;

        }, null, ClassLoader::class);
    }
}
