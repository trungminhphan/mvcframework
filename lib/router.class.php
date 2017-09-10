<?php
class Router{
	protected $uri;
	protected $controller;
	protected $action;
	protected $params;
	protected $route;
	protected $method_prefix;
	protected $language;

	public function __construct($uri){
		$this->uri = urldecode(trim($uri, '/'));

		//ge default
		$routes = Config::get('routes');
		$this->route = Config::get('default_route');
		$this->method_prefix = isset($routes[$this->route]) ? $routes[$this->route] : '';
		$this->language = Config::get('default_language');
		$this->controller = Config::get('default_controller');
		$this->action = Config::get('default_action');
		$uri_parts = explode('?', $this->uri);
		$path = $uri_parts[0];
		$path_parts = explode('/', $path);
		//echo '<pre>'; print_r($path_parts);
		if(count($path_parts)){
			//get route or language at first element
			if(in_array(strtolower(current($path_parts)), array_keys($routes))){
				$this->route = strtolower(current($path_parts));
				$this->method_prefix = isset($routes[$this->route]) ? $routes[$this->route] : '';
				array_shift($path_parts);
			} else if(in_array(strtolower(current($path_parts)), Config::get('languages'))){
				$this->language = strtolower(current($path_parts));
				array_shift($path_parts);
			}

			//Get controller - next element of array
			if(current($path_parts)){
				$this->controller = strtolower(current($path_parts));
				array_shift($path_parts);
			}

			//Get action
			if(current($path_parts)){
				$this->action = strtolower(current($path_parts));
				array_shift($path_parts);
			}

			//Get params - all the rest
			$this->params = $path_parts;

		}
	}

	public function getUri(){
		return $this->uri;
	}

	public function getController(){
		return $this->controller;
	}

	public function getAction(){
		return $this->action;
	}

	public function getParams(){
		return $this->params;
	}

	public function getRoute(){
		return $this->route;
	}

	public function getMethodPrefix(){
		return $this->method_prefix;
	}

	public function getLanguage(){
		return $this->language;
	}
}
?>