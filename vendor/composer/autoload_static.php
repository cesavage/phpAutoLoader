<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1186de3850fcbb47eecec8bb3138ee98
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CardinalCommunicate\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CardinalCommunicate\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/CardinalCommunicate',
        ),
    );

    public static $classMap = array (
        'CardinalCommunicate\\Classes\\User' => __DIR__ . '/../..' . '/app/CardinalCommunicate/Classes/User.php',
        'CardinalCommunicate\\Filters\\AuthFilter' => __DIR__ . '/../..' . '/app/CardinalCommunicate/Filters/AuthFilter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1186de3850fcbb47eecec8bb3138ee98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1186de3850fcbb47eecec8bb3138ee98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1186de3850fcbb47eecec8bb3138ee98::$classMap;

        }, null, ClassLoader::class);
    }
}
