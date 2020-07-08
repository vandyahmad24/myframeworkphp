<?php


/**
 * 
 */
class App
{
	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{
		$url = $this->parseURL();

		//untuk controller
		if($url == null){
			$url = [$this->controller];
		}

		if(file_exists('../aplikasi/controllers/'.$url[0].'.php')){
			$this->controller = $url[0];
			unset($url[0]);
		}


		require_once '../aplikasi/controllers/'.$this->controller.'.php';
		$this->controller = new $this->controller;

		//untuk method
		if(isset($url[1])){
			if(method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		//kelola params
		if(!empty($url)){
			$this->params = array_values($url);
		}

		//jalankan controller dan method serta kirimkan params jika ada
		call_user_func_array([$this->controller, $this->method], $this->params);
		
	}	

	public function parseURL()
	{
		if(isset($_GET['url'])){
			$url = rtrim( $_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;

		}
	}

}