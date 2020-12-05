<?php 
require_once('models/Category.php');

class CategoryController{
	var $model_obj;

	function __construct(){
		$this->model_obj = new Category();
	}

	function list(){

		$categories = $this->model_obj->getParent();

		$childs = $this->model_obj->getChild();
		require_once('views/admin/category_list.php');
	}
	function listedit(){

		$categories = $this->model_obj->getParent();

		$childs = $this->model_obj->getAll();
		require_once('views/admin/category_listedit.php');
	}

	function detail(){

		$uid = addslashes($_GET['id']);
		$category = $this->model_obj->find($uid);
		require_once('views/admin/detail.php');
	}

	function add(){
		$categories=$this->model_obj->getParent();
		require_once('views/admin/category_add_form.php');
	}

	function store(){
		$data = $_POST;
		$data['name']=$this->test_input($_POST['name']);
		$cate = $this->model_obj->checkIsset($data['name']);
		if($cate == NULL){
		$status = $this->model_obj->create($data);
		if($status == TRUE){
			setcookie('msg','Thêm mới thành công',time() + 5);
		}else{
			setcookie('msg','Thêm mới thất bại',time() + 5);
		}
		header("Location: index.php?mod=category&act=listedit	");
	}else{
		setcookie('check','Tiêu đề đã có người sử dụng',time() + 5);
        header("Location: index.php?mod=category&act=add");
	}
	}

	function edit(){
		$uid = addslashes($_GET['id']);
		$category = $this->model_obj->find($uid);
		$categories=$this->model_obj->getParent();

		require_once('views/admin/category_edit.php');
	}

	function update(){

		$data = $_POST;
		$data['name']=$this->test_input($_POST['name']);
		$status = $this->model_obj->update($data);
		if($status == TRUE){
			setcookie('msg','Update thành công',time() + 5);
		}else{
			setcookie('msg','Update thất bại',time() + 5);
		}
		header("Location: index.php?mod=category&act=listedit");
	}

	function delete(){
		$data=$_GET;
		$data['deleted_at']='"'.date('y-m-d h:i:s').'"';
		$status=$this->model_obj->delete($data);
		if($status == TRUE){
			setcookie('msg','Xóa thành công',time() + 5);
		}else{
			setcookie('msg','Xóa thất bại',time() + 5);
		}
		header("Location: index.php?mod=category&act=listedit");
	}
	function deletelist(){
		$categories = $this->model_obj->getParents();

		$childs = $this->model_obj->getAlls();
		require_once('views/admin/category_delete.php');

	}
	function restore(){
		$data=$_GET;
		$data['deleted_at']='NULL';
		$status=$this->model_obj->delete($data);
		if($status == TRUE){
			setcookie('msg','Khôi phục thành công',time() + 5);
		}else{
			setcookie('msg','Khôi phục thất bại',time() + 5);
		}
		header("location: index.php?mod=category&act=deletelist");

	}
	function delete4ever(){
    	$uid=addslashes($_GET['id']);


    	$status=$this->model_obj->delete4ever($uid);
        if($status == TRUE){
            setcookie('msg','Xóa thành công',time() + 5);
        }else{
            setcookie('msg','Xóa thất bại',time() + 5);
        }
    	header("location: index.php?mod=category&act=deletelist");

    }
	function error(){
		echo "<br> >>> ACT 404";
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$date = preg_replace('/\s+/', ' ', $data);
		return $data;
	}
}

?>
