<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'Admin',
    ['path' => '/admin'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);
