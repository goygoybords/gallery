<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita48ed7bf30563aec721823f84bfeb6e4
{
    public static $classMap = array (
        'App\\Controllers\\GalleryController' => __DIR__ . '/../..' . '/app/controllers/GalleryController.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Model\\Project' => __DIR__ . '/../..' . '/app/models/Project.php',
        'ComposerAutoloaderInita48ed7bf30563aec721823f84bfeb6e4' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInita48ed7bf30563aec721823f84bfeb6e4' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita48ed7bf30563aec721823f84bfeb6e4::$classMap;

        }, null, ClassLoader::class);
    }
}