<?php 
session_start();
	$mod = isset($_GET['mod'])?$_GET['mod']:'home'; // module
	$act = isset($_GET['act'])?$_GET['act']:'index'; // action
	$_SESSION['isLogin']=isset($_SESSION['isLogin'])?$_SESSION['isLogin']:'false';

	switch ($mod) {
		// Trang danhf cho nguowif dung
		case 'home':
		require_once('controllers/HomeController.php');
		$controller_obj = new HomeController();
		switch ($act) {
			case 'index':

			$controller_obj->list();
			break;
			case 'detail':
			$controller_obj->detail();
			break;			
		}
		break;

		case 'auth':
		require_once('controllers/AuthController.php');
		$controller_obj = new AuthController();
		switch ($act) {
			case 'login':
			$controller_obj->login();
			break;
			case 'login_process':
			$controller_obj->login_process();
			break;
			case '404':
			$controller_obj->error();
			break;
			default:
			echo "<br> >>> ACT 404";
			break;
		}
		break;
	}

		// Trang danh cho quan tri


	if(isset($_SESSION['isLogin'])){

		switch ($mod) {
			case 'category':
			require_once('controllers/CategoryController.php');
			$controller_obj = new CategoryController();
			switch ($act) {
				case 'list':
				$controller_obj->list();
				break;
				case 'listedit':
				$controller_obj->listedit();
				break;
				case 'detail':
				$controller_obj->detail();
				break;
				case 'add':
				$controller_obj->add();
				break;
				case 'store':
				$controller_obj->store();
				break;
				case 'edit':
				$controller_obj->edit();
				break;
				case 'update':
				$controller_obj->update();
				break;
				case 'delete':
				$controller_obj->delete();
				break;
				case 'deletelist':
				$controller_obj->deletelist();
				break;
				case 'restore':
				$controller_obj->restore();
				break;
				default:
				$controller_obj->error();
				break;
			}
			break;
			case 'post':
			require_once('controllers/PostController.php');
			$controller_obj = new PostController();
			switch ($act) {
				case 'list':
				$controller_obj->list();
				break;
				case 'detail':
				$controller_obj->detail();
				break;
				case 'add':
				$controller_obj->add();
				break;
				case 'store':
				$controller_obj->store();
				break;
				case 'edit':
				$controller_obj->edit();
				break;
				case 'update':
				$controller_obj->update();
				break;
				case 'delete':
				$controller_obj->delete();
				break;
				case 'hide':
				$controller_obj->hide();
				break;
				case 'hidelist':
				$controller_obj->hidelist();
				break;
				case 'show':
				$controller_obj->show();
				break;

				case 'checklist':
				$controller_obj->checklist();
				break;
				
				
				case 'delete':
				$controller_obj->delete();
				break;
				case 'delete4ever':
				$controller_obj->delete4ever();
				break;
				case 'deletelist':
				$controller_obj->deletelist();
				break;
				case 'restore':
				$controller_obj->restore();
				break;
				default:
				$controller_obj->error();
				break;

			}
			break;

			case 'admin':
			require_once('controllers/AdminController.php');
			$controller_obj = new AdminController();
			switch ($act) {
				case 'index':

				$controller_obj->index();
				break;
				case 'logout':
				$controller_obj->logout();
				break;


				default:
				echo "<br> >>> ACT 404";
				break;
			}
			break;

			case 'user':
			require_once('controllers/UserController.php');
			$controller_obj = new UserController();
			switch ($act) {
				case 'login':
				$controller_obj->login();
				break;
				case 'login_process':
				$controller_obj->login_process();
				break;


				default:
				echo "<br> >>> ACT 404";
				break;
			}
			break;

			default:
			echo "<br> Mod 404";
			break;
		}
	}

	else{
		header('Location: index.php?mod=auth&act=login');
	}

	
	?>
