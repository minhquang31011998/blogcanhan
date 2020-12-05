<?php 
	require_once('models/Category.php');
	require_once('models/Post.php');
	
	class AdminController{
		var $model_obj;

		function __construct(){
			$this->model_obj = new Category();
		}

		function index(){
			require_once('views/admin/blank.php');
		}

		function logout(){
			session_destroy();
			setcookie("email",$_COOKIE['email'],time()-50,"/");
			setcookie("password",$_COOKIE['password'],time()-50,"/");
			header("Location: index.php");
		}


		function error(){
			echo "<br> >>> ACT 404";
		}
	}

 ?>
