<?php
class admin extends controller{
	function index(){
		if(common::isLoggedIn()){
			url::redir("/admin/home");
		} else {
			if(url::post("username") && url::post("password")){
				$admins = new admins();
				if($user = $admins->auth(url::post('username'), url::post('password'))){
					session::set('id', strval($user['_id']));
					session::set('username', $user['username']);
					session::set('fname', $user['fname']);
					session::set('lname', $user['lname']);
					load::view("admin/home");
				} else {
					$data = array('error' => 'Usernam and Passeord incorrect');
					load::view("admin/login", $data);
				}
			} else {
				load::view("admin/login");
			}
		}
	}

	function home(){
		if(!common::isLoggedIn()){
			url::redir("/");
		} else {
			load::view("admin/home");
		}
	}
	function doLogout(){
		session::endSession();
		url::redir("/");
	}
}
?>
