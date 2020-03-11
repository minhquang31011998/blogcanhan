
<?php 
require_once('models/Connection.php');
class User{
	var $connection_obj;
	function __construct(){
		$this->connection_obj= new Connection();
	}
	function list(){
		
		
		$categories=$this->model_obj->getAll();
		require_once('views/category/list.php');
	}
	function add(){
		require_once('views/category/add.php');
	}
	function detail(){
		$uid=$_GET['id'];
		
		$category=$this->model_obj->find($uid);
		require('views/category/detail.php');

	}
	function store(){
		
		$data=$_POST;
		
		
		
		$status=$this->model_obj->create($data);
		echo $status;
		if($status==TRUE){
			setcookie('msg','them moi thanh cong',time()+5);
		}else{
			setcookie('msg','them moi that bai',time()+5);
		}
		header("location: index.php?mod=category&act=list");


	}
	function edit(){
		$uid=$_GET['id'];
		
		$category=$this->model_obj->find($uid);
		require('views/category/edit.php');
	}
	function update(){
		$data=$_POST;
		$data['update_at']=date('y-m-d h:i:s');
		
		
		
		$status=$this->model_obj->update($data);
		echo $status;

		if($status==TRUE){
			setcookie('msg','update thanh cong',time()+5);
		}else{
			setcookie('msg','update that bai',time()+5);
		}
		header("location: index.php?mod=category&act=list");
	}
	function error(){
		echo "<br> ACT 404";
	}
	function delete(){
		$data=$_GET;
		$data['delete_at']=date('y-m-d h:i:s');
		$status=$this->model_obj->delete($data);
		if($status == TRUE){
			setcookie('msg','Xóa thành công',time() + 5);
		}else{
			setcookie('msg','Xóa thất bại',time() + 5);
		}

		header("location: index.php?mod=category&act=list");

	}
}
?>