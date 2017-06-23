<?php 

use Middleware\AuthMiddleware; 

/**
 * Routes: 
 * Todas as rotas da aplicação ficam nesse arquivo.
 * 
 */

//grupo de rotas autenticadas
$app->group('', function () use ($container) {
 
    $this->get('/', 		
    	function ($req, $res, $args) use ($container) { return (new Controller\HomeController($req, $res, $args, $container))->index();});
	
    //TODO: Essa linha de baixo não funciona...
	//$this->get('/{name}', 	routeCall('Controller\HomeController', 'index', $container));

})->add(new AuthMiddleware());

