<?php 

namespace Controller; 

class AuthController extends Controller
{
	public function login()
	{
		return $this->view->render($this->response, 'login/login.html.twig'); 
	}
}