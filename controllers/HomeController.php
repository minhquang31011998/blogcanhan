<?php 
require_once('models/Category.php');
require_once('models/Post.php');

class HomeController{
	var $model_obj;

	function __construct(){
		$this->model_obj = new Post();
		$this->model_cate = new Category();

	}

	function index(){
		$posts=$this->model_obj->getAll();
		require_once('views/home/index.php');
	}
	function list(){

		$categories = $this->model_cate->getParent();

		$childs = $this->model_cate->getChild();
		
		
		$status=1;
		$postss=$this->model_obj->desc();
		$posts=$this->model_obj->sttlist($status);
		require_once('views/home/homepage.php');
	}
	function detail(){
		$categories = $this->model_cate->getParent();

		$childs = $this->model_cate->getChild();
		
		$posts=$this->model_obj->getAll();
		

		$uid = $_GET['id'];
		$row = $this->model_obj->find($uid);
		require_once('views/home/single-post.php');
	}
	

	function error(){
		echo "<br> >>> ACT 404";
	}
}

?>
