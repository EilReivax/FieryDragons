<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) use ($routes) {
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

        $builder->connect('/pages/', 'Pages::display');
        $builder->fallbacks();
    });

    $routes->connect('/content-blocks/auth/logout', ['controller' => 'Auth', 'action' => 'logout']);

//If you need a different set of middleware or none at all,
//open new scope and define routes there.*
$routes->scope('/api', function (RouteBuilder $builder): void {
     // No $builder->applyMiddleware() here.

     // Parse specified extensions from URLs
     // $builder->setExtensions(['json', 'xml']);

     // Connect API actions here.
 });


};
