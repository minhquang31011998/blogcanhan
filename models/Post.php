
<?php 
require_once('models/Connection.php');
class Post{
	var $connection_obj;
	function __construct(){
		$this->connection_obj= new Connection();
	}
	function getAll(){
		
		
		// Câu lệnh truy vấn
		$query = "SELECT * FROM posts WHERE delete_at is NULL";

		// Thực thi câu lệnh
		$result = $this->connection_obj->conn->query($query);
		// Tạo 1 mảng để chứa dữ liệu
		$posts = array();

		while($row = $result->fetch_assoc()) { 
			$posts[] = $row;
		}
		return $posts;
	}
	function getDeletelist(){
		
		
		// Câu lệnh truy vấn
		$query = "SELECT * FROM posts WHERE delete_at is not NULL";

		// Thực thi câu lệnh
		$result = $this->connection_obj->conn->query($query);
		// Tạo 1 mảng để chứa dữ liệu
		$posts = array();

		while($row = $result->fetch_assoc()) { 
			$posts[] = $row;
		}
		return $posts;
	}
	function sttlist($status){
		
		
		// Câu lệnh truy vấn
		$query = "SELECT * FROM posts WHERE delete_at is NULL and status=".$status;

		// Thực thi câu lệnh
		$result = $this->connection_obj->conn->query($query);
		// Tạo 1 mảng để chứa dữ liệu
		$posts = array();

		while($row = $result->fetch_assoc()) { 
			$posts[] = $row;
		}
		return $posts;
	}
	function find($id){

		$query = "SELECT * FROM posts WHERE id=".$id;

		$result = $this->connection_obj->conn->query($query);

		$post = $result->fetch_assoc();

		return $post;
	}
	function create($data){
		$query = "INSERT INTO posts (title, description, thumbnail, content, slug, category_id,status,created_at) VALUES ('".$data['title']."','".$data['description']."','".$data['thumbnail']."','".$data['content']."','".$data['slug']."','".$data['category_id']."',0,'".$data['created_at']."')";
		
		
		$status = $this->connection_obj->conn->query($query);
		return $status;
	}
	function update($data){
		$query ="UPDATE posts  SET name='".$data['name']."',description='".$data['description']."',update_at='".$data['update_at']."' WHERE id =".$data['id'];
		
		$status = $this->connection_obj->conn->query($query);
		return $status;

	}
	function delete($data){
		$query = "UPDATE posts  SET delete_at=".$data['delete_at']." WHERE id =".$data['id'];

		$result = $this->connection_obj->conn->query($query);

		return $result;

	}
	function hide($data){
		$query = "UPDATE posts  SET status='".$data['status']."' WHERE id =".$data['id'];


		$result = $this->connection_obj->conn->query($query);

		return $result;
	}
	function show($data){
		$query = "UPDATE posts  SET status='".$data['status']."' WHERE id =".$data['id'];


		$result = $this->connection_obj->conn->query($query);

		return $result;
	}
	function check($data){
		$query = "UPDATE posts  SET status='".$data['status']."' WHERE id =".$data['id'];


		$result = $this->connection_obj->conn->query($query);

		return $result;
	}
	function delete4ever($id){
		$query = "DELETE FROM posts WHERE id=".$id;

		$result = $this->connection_obj->conn->query($query);

		return $result;

		
		
	}
	function desc(){
		$query = "SELECT * 
		FROM posts WHERE delete_at is NULL and status=1
		ORDER BY created_at DESC";
		$result = $this->connection_obj->conn->query($query);
		// Tạo 1 mảng để chứa dữ liệu
		$posts = array();

		while($row = $result->fetch_assoc()) { 
			$posts[] = $row;
		}
		return $posts;

	}

}
?>