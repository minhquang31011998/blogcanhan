
<?php 
require_once('models/Connection.php');
class Category{
	var $connection_obj;
	function __construct(){
		$this->connection_obj= new Connection();
	}
	function getAll(){
		
		
		// Câu lệnh truy vấn
		$query = "SELECT * FROM categories WHERE delete_at is NULL" ;

		// Thực thi câu lệnh
		$result = $this->connection_obj->conn->query($query);
		// Tạo 1 mảng để chứa dữ liệu
		$categories = array();

		while($row = $result->fetch_assoc()) { 
			$categories[] = $row;
		}
		return $categories;
	}
	function find($id){

		$query = "SELECT * FROM categories WHERE id=".$id;

		$result = $this->connection_obj->conn->query($query);

		$category = $result->fetch_assoc();

		return $category;
	}
	function create($data){
		if($data['parent_id'] == 0){
// Viết câu lệnh để thêm dữ liệu
			$query = "INSERT INTO categories (name, description) VALUES ('".$data['name']."','".$data['description']."')";
		}else{
			
			$query = "INSERT INTO categories (name, description, parent_id) VALUES ('".$data['name']."','".$data['description']."','".$data['parent_id']."')";
		}
		$status = $this->connection_obj->conn->query($query);
		return $status;
	}
	function update($data){
		
		if($data['parent_id'] == 0){


			$query ="UPDATE categories SET name='".$data['name']."',slug='".$data['slug']."' WHERE id =".$data['id'];
		}

		else{
			$query ="UPDATE categories SET name='".$data['name']."',parent_id='".$data['parent_id']."',slug='".$data['slug']."' WHERE id =".$data['id'];
		}


    // Thực thi câu lệnh

		$status = $this->connection_obj->conn->query($query);
		return $status;

	}
	function delete($data){
		$query = "UPDATE categories  SET delete_at=".$data['delete_at']." WHERE id =".$data['id'];


		$result = $this->connection_obj->conn->query($query);

		return $result;

	}
	function getChild(){
		$query = "SELECT * FROM categories WHERE parent_id is not NULL and  delete_at is NULL";

// Thực thi câu lệnh
		$result =  $this->connection_obj->conn->query($query);
// Tạo 1 mảng để chứa dữ liệu
		$child = array();

		while($row = $result->fetch_assoc()) { 
			$child[] = $row;
		}
		return $child;
	}
	function getParent(){
		$query = "SELECT * FROM categories WHERE parent_id is NULL and  delete_at is NULL";

// Thực thi câu lệnh
		$result = $this->connection_obj->conn->query($query);
// Tạo 1 mảng để chứa dữ liệu
		$categories = array();

		while($row = $result->fetch_assoc()) { 
			$categories[] = $row;
		}
		return $categories;
	}
	function getParents(){
		$query = "SELECT * FROM categories WHERE parent_id is NULL and  delete_at is NULL";

// Thực thi câu lệnh
		$result = $this->connection_obj->conn->query($query);
// Tạo 1 mảng để chứa dữ liệu
		$categories = array();

		while($row = $result->fetch_assoc()) { 
			$categories[] = $row;
		}
		return $categories;
	}
	function getAlls(){
		
		
		// Câu lệnh truy vấn
		$query = "SELECT * FROM categories WHERE delete_at is not NULL" ;

		// Thực thi câu lệnh
		$result = $this->connection_obj->conn->query($query);
		// Tạo 1 mảng để chứa dữ liệu
		$categories = array();

		while($row = $result->fetch_assoc()) { 
			$categories[] = $row;
		}
		return $categories;

	}


}
?>