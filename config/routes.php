<?php
use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::defaultRouteClass('DashedRoute');

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Posts', 'action' => 'index']);
    $routes->connect('/:title-:id', ['controller' => 'Posts', 'action' => 'view'], ['pass' => ['title', 'id']]);

    $routes->fallbacks('DashedRoute');
});

Plugin::routes();
