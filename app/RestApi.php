<?php
declare(strict_types=1);
namespace App;
use Slim\Factory\AppFactory;
use Composer\Autoload\ClassLoader;
use DI\ContainerBuilder;
use App\Controllers\UploadController;

class RestApi {
    public static function Create(ClassLoader $loader) {
        $builder = new ContainerBuilder();
        $container = $builder->build();
        AppFactory::setContainer($container);

        //Create the app
        $app = AppFactory::create();

        //Setup routes
        $app->group('', function() use ($app) {

            //Videos
            $app->put('/upload', UploadController::class . ':upload');
        });

        return $app;
    }
}