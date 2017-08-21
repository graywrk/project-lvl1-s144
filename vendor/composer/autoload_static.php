<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8cf454c891b8490f6833f75246582374
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        'a3f3ca1baa0a0cbf5c84ba4b0917ba32' => __DIR__ . '/../..' . '/src/Cli.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BrainGames\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BrainGames\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8cf454c891b8490f6833f75246582374::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8cf454c891b8490f6833f75246582374::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8cf454c891b8490f6833f75246582374::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}