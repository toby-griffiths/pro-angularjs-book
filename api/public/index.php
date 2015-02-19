<?php

namespace TobyGriffiths\Training\AngularJS;

use CubicMushroom\Annotations\Routing\Parser\DocumentationAnnotationParser;
use CubicMushroom\Slim\Middleware\RoutingAnnotationsMiddleware;
use CubicMushroom\Slim\ServiceManager\ServiceManager;
use Doctrine\Common\Annotations\AnnotationReader;
use Slim\Slim;

$autoloader = require_once('../vendor/autoload.php');

$config = [
    'services' => [
        'testController' => [
            'class' => '\TobyGriffiths\Training\AngularJS\Controller\TestController',
            'tags'  => [
                ['routes'],
            ],
        ]
    ]
];

$app = new Slim($config);

new ServiceManager($app);

$annotationParser = new DocumentationAnnotationParser(new AnnotationReader(), [$autoloader, 'loadClass']);
$app->add(new RoutingAnnotationsMiddleware($annotationParser, ServiceManager::DEFAULT_SERVICE_NAME));

$app->run();