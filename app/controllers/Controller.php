<?php 

namespace Controller; 

class Controller 
{
	protected $container; 
	protected $view; 
	protected $request; 
	protected $response; 
	protected $args; 

	public function __construct(
		$request, 
		$response, 
		$args,
		$container)	
	{
		$this->container 	= $container; 
		$this->view 		= $container['view']; 
		$this->request 		= $request;
		$this->response 	= $response; 
		$this->args 		= $args; 
		
	}
}