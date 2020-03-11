<?php 
require_once('models/Post.php');
require_once('models/Category.php');

class PostController{
	var $model_obj;
	var $model_cate;

	function __construct(){
		$this->model_obj = new Post();
		$this->model_cate = new Category();
	}
	function list(){
		
		$status=1;
		$posts=$this->model_obj->sttlist($status);
		require_once('views/admin/blog_list.php');
	}
	function add(){

		$categories=$this->model_cate->getChild(); 
		require_once('views/admin/blog_add_form.php');
	}
	function detail(){
		$uid=$_GET['id'];

		
		$post=$this->model_obj->find($uid);
		require_once('views/admin/blog_detail.php');

	}
	function store(){
		
		$data = $_POST;
        $data['created_at']=date('y-m-d h:i:s');


			$target_dir = "public/admin/dist/img/";  // thư mục chứa file upload

			$data['thumbnail'] = $target_dir . basename($_FILES["thumbnail"]["name"]);
			
			 if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $data['thumbnail'])) { // nếu upload file không có lỗi 
			 	echo "The file ". basename( $_FILES["thumbnail"]["name"]). " has been uploaded.";
        } else { // Upload file có lỗi 
        	echo "Sorry, there was an error uploading your file.";
        }
        

        $status = $this->model_obj->create($data);
        if($status == TRUE){
        	setcookie('msg','Thêm mới thành công',time() + 5);
        }else{
        	setcookie('msg','Thêm mới thất bại',time() + 5);
        }
        header("Location: index.php?mod=post&act=list");
    }
    function edit(){
    	$uid=$_GET['id'];
    	$categories=$this->model_cate->getChild(); 

    	$post=$this->model_obj->find($uid);
    	require('views/admin/blog_edit.php');
    }
    function update(){
        $data['id']=$_GET['id'];
    	$data=$_POST;
    	$data['update_at']=date('y-m-d h:i:s');



    	$status=$this->model_obj->update($data);
    	echo $status;

    	if($status==TRUE){
    		setcookie('msg','update thanh cong',time()+5);
    	}else{
    		setcookie('msg','update that bai',time()+5);
    	}
    	header("location: index.php?mod=post&act=list");
    }
    function error(){
    	echo "<br> ACT 404";
    }
    function delete(){
    	$data=$_GET;
    	$data['delete_at']='"'.date('y-m-d h:i:s').'"';
    	$status=$this->model_obj->delete($data);
    	if($status == TRUE){
    		setcookie('msg','Xóa thành công',time() + 5);
    	}else{
    		setcookie('msg','Xóa thất bại',time() + 5);
    	}

    	header("location: index.php?mod=post&act=list");

    }
    function hide(){
    	$data=$_GET;
    	$data['status']=2;
    	$status=$this->model_obj->hide($data);

    	header("location: index.php?mod=post&act=list");


    }
    function hidelist(){
    	$status=2;
    	$posts=$this->model_obj->sttlist($status);
    	require_once('views/admin/blog_hide.php');
    }
    function checklist(){
    	$status=0;
    	$posts=$this->model_obj->sttlist($status);
    	require_once('views/admin/blog_check.php');
    }
    function show(){
    	$data=$_GET;
    	$data['status']=1;
    	$status=$this->model_obj->show($data);

    	header("location: index.php?mod=post&act=checklist");


    }
    function check(){
    	$data=$_GET;
    	$data['status']=1;
    	$status=$this->model_obj->hide($data);

    	header("location: index.php?mod=post&act=checklist");


    }
    function restore(){
    	$data=$_GET;
    	$data['delete_at']='NULL';
    	$status=$this->model_obj->delete($data);

    	header("location: index.php?mod=post&act=deletelist");


    }
    function delete4ever(){
    	$uid=$_GET['id'];


    	$post=$this->model_obj->delete4ever($uid);

    	header("location: index.php?mod=post&act=deletelist");

    }
    function deletelist(){
    	$posts = $this->model_obj->getDeletelist();

    	require_once('views/admin/blog_delete.php');
    }
}
?>
