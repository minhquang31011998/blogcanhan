
<?php 
require_once('models/Connection.php');
class Category{
	var $connection_obj;
	function __construct(){
		$this->connection_obj= new Connection();
	}
	function getAll(){
		
		
		// Câu lệnh truy vấn
		$query = "SELECT * FROM categories WHERE deleted_at is NULL" ;

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
			$query = "INSERT INTO categories (name, description, slug) VALUES (?,?,?)";
			$stmt = $this->connection_obj->conn->prepare($query);
			$stmt->bind_param('sss',$data['name'],$data['description'],$data['slug']);
		}else{
			
			$query = "INSERT INTO categories (name, description, slug, parent_id) VALUES (?,?,?,?)";
			$stmt = $this->connection_obj->conn->prepare($query);
			$stmt->bind_param('sssi',$data['name'],$data['description'],$data['slug'],$data['parent_id']);
		}
		$stmt->execute();
		return $stmt;
	}
	function update($data){
		
		if($data['parent_id'] == 0){


			$query ="UPDATE categories SET name=?,slug=? WHERE id =?";
			$stmt = $this->connection_obj->conn->prepare($query);
			$stmt->bind_param('ssi',$data['name'],$data['slug'],$data['id']);
		}else{
			$query ="UPDATE categories SET name=?,parent_id=?,slug=? WHERE id =?";
			$stmt = $this->connection_obj->conn->prepare($query);
			$stmt->bind_param('sisi',$data['name'],$data['parent_id'],$data['slug'],$data['id']);
		}


    // Thực thi câu lệnh
		$stmt->execute();
		return $stmt;

	}
	function delete($data){
		$query = "UPDATE categories  SET deleted_at=".$data['deleted_at']." WHERE id =".$data['id'];


		$result = $this->connection_obj->conn->query($query);

		return $result;

	}
	function getChild(){
		$query = "SELECT * FROM categories WHERE parent_id is not NULL and  deleted_at is NULL";

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
		$query = "SELECT * FROM categories WHERE parent_id is NULL and  deleted_at is NULL";

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
		$query = "SELECT * FROM categories WHERE parent_id is NULL and  deleted_at is NULL";

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
		$query = "SELECT * FROM categories WHERE deleted_at is not NULL" ;

		// Thực thi câu lệnh
		$result = $this->connection_obj->conn->query($query);
		// Tạo 1 mảng để chứa dữ liệu
		$categories = array();

		while($row = $result->fetch_assoc()) { 
			$categories[] = $row;
		}
		return $categories;

	}
	function delete4ever($id){
		$query = "DELETE FROM categories WHERE id=".$id;

		$result = $this->connection_obj->conn->query($query);

		return $result;

	}
	function checkIsset($name){
		$query = "SELECT * FROM categories WHERE name=?";
		$stmt = $this->connection_obj->conn->prepare($query);
		$stmt->bind_param('s',$name);
		$result=$stmt->execute();
		$cate=$stmt->fetch();
		//var_dump($user);

		return $cate;
	}


}
?>