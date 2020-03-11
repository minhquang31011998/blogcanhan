<?php 

require_once('models/User.php');

class AuthController{
	var $model_obj;

	function __construct(){
		$this->model_obj = new User();
	}

	function login(){
		require_once('views/admin/login.php');
	}

	function login_process(){
		$email =$_POST['email'];
		$password = ($_POST['password']);

		$user = $this->model_obj->login($email,$password);
		if($user == NULL){
			
			header("Location: index.php?mod=user&act=login");
			
			
		}else{
			session_start();
			
			$_SESSION['isLogin'] = true;
			unset($user['password']);
			$_SESSION['user'] = $user;
			header("Location: index.php?mod=admin&act=index");
		}

	}

	function error(){
		require_once('views/admin/404.php');
	}
}

?>
