<?php 

use Middleware\AuthMiddleware; 

/**
 * Routes: 
 * Todas as rotas da aplicação ficam nesse arquivo.
 * 
 */

//grupo de rotas autenticadas
$app->group('', function () use ($container) {
 
    $this->get('/', 	routeCall('Controller\HomeController', 'index', $container));

})->add(new AuthMiddleware());

