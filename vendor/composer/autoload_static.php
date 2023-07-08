<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd785d45566289037fce5c86d60d409f
{
    public static $files = array (
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $classMap = array (
        'App\\Controllers\\ApiCountryController' => __DIR__ . '/../..' . '/app/controllers/ApiCountryController.php',
        'App\\Controllers\\CountryController' => __DIR__ . '/../..' . '/app/controllers/CountryController.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\TripController' => __DIR__ . '/../..' . '/app/controllers/TripController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Entities\\Country' => __DIR__ . '/../..' . '/app/models/Country.php',
        'App\\Entities\\Trip' => __DIR__ . '/../..' . '/app/models/Trip.php',
        'App\\core\\Response' => __DIR__ . '/../..' . '/core/Response.php',
        'ComposerAutoloaderInitdd785d45566289037fce5c86d60d409f' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitdd785d45566289037fce5c86d60d409f' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitdd785d45566289037fce5c86d60d409f::$classMap;

        }, null, ClassLoader::class);
    }
}
