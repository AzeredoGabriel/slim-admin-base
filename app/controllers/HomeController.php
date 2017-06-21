<?php 

namespace Controller; 

class HomeController extends Controller
{
	public function index()
	{
		$name = !empty($this->args['name']) ? $this->args['name'] : '';  
		
		return $this->view->render($this->response, 'home/index.html.twig', 
			['name' => $name]); 
	}
}