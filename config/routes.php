<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) use ($routes) {
        $builder->connect('/home', ['controller' => 'Pages', 'action' => 'display', 'home']);
        $routes->connect('/menu', ['controller' => 'Pages', 'action' => 'display', 'menu']);
        $routes->connect('/detail', ['controller' => 'Pages', 'action' => 'display', 'detail']);
        $builder->connect('/pages/', 'Pages::display');
        $builder->fallbacks();
    });
    
     
//If you need a different set of middleware or none at all,
//open new scope and define routes there.*
$routes->scope('/api', function (RouteBuilder $builder): void {
     // No $builder->applyMiddleware() here.

     // Parse specified extensions from URLs
     // $builder->setExtensions(['json', 'xml']);

     // Connect API actions here.
 });


};
