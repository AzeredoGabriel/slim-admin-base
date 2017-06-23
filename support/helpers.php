<?php 

function dd($var) 
{
	echo "<pre>";
	var_dump($var); 
	echo "</pre>";
}

//TODO: Isso não funciona por algum motivo.
function routeCall($controllerName, $methodName, $container)
{
	return (function ($req, $res, $args) use ($container) { return (new $controllerName($req, $res, $args, $container))->$methodName();});
} 

