<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

/**
* Rotas com o prefixo admin
*
*/
Router::plugin('Admin', ['path' => '/admin'], function (RouteBuilder $routes) {

    $routes->connect('/dashboard', ['plugin' => 'Admin', 'controller' => 'Users', 'action' => 'index']);
    $routes->connect('/login', ['plugin' => 'Admin', 'controller' => 'Users', 'action' => 'login']);
    $routes->connect('/sair', ['plugin' => 'Admin', 'controller' => 'Users', 'action' => 'logout']);

    $routes->fallbacks('DashedRoute');
});
