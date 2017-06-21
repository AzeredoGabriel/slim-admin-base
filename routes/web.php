<?php 

/**
 * Routes: 
 * Todas as rotas da aplicação ficam nesse arquivo.
 * 
 */

$app->get('/', 	
	function ($req, $res, $args) use ($container) { return (new Controller\HomeController($req, $res, $args, $container))->index(); });

$app->get('/{name}', 	
	function ($req, $res, $args) use ($container) { return (new Controller\HomeController($req, $res, $args, $container))->index(); });