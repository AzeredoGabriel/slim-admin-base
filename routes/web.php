<?php 

use Middleware\ExampleMiddleware; 

/**
 * Routes: 
 * Todas as rotas da aplicação ficam nesse arquivo.
 * 
 */

$app->get('/', 	
	function ($req, $res, $args) use ($container) { return (new Controller\HomeController($req, $res, $args, $container))->index(); });
	//->add(new ExampleMiddleware()); //-> for add middleware

$app->get('/{name}', 	
	function ($req, $res, $args) use ($container) { return (new Controller\HomeController($req, $res, $args, $container))->index(); });