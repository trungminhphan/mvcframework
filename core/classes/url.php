<?php
class url{
	static function part($number){
		$uri = explode("?", $_SERVER['REQUEST_URI']);
		$parts = explode("/", $uri[0]);
		return (isset($parts['$number'])) ? $parts[$number] : false;
	}

	static function post($key){
		return (isset($_POST[$key])) ? $_POST[$key] : false;
	}

	static function get($key){
		return (isset($_GET[$key])) ? $_GET[$key] : false;
	}

	static function request($key){
		if(url::get($key)){
			return url::get($key);
		} else if(url::post($key)){
			return url::post($key);
		} else {
			return false;
		}
	}

	static function build($url, $params = array()){
		if(strpos($url, "//") === false){
			$prefix = "//" . $GLOBALS['config']['domain'];
		} else {
			$prefix = "";
		}
		$append = '';
		foreach ($params as $key => $param) {
			$append .= ($append == '') ? '?' : '&';
			$append .= urlencode($key).'='.urldecode($param);
		}
		return $prefix.$append;
	}

	static function simple($ul){
		if(strpos($url, "//") === false){
			$prefix = "//" . $GLOBALS['config']['domain'];
		} else {
			$prefix = "";
		}
	}

	static function redir($to, $exit = true){
		if(headers_sent()){
			echo "<script>window.location='{$to}';</script>";
		} else {
			header("location: {$to}");
		}

		if($exit){
			die();
		}
	}
}
?>