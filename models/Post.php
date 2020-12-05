
<?php 
require_once('models/Connection.php');
class Post{
	var $connection_obj;
	function __construct(){
		$this->connection_obj= new Connection();
	}
	function getAll(){
		
		
		// Câu lệnh truy vấn
		$query = "SELECT * FROM posts WHERE deleted_at is NULL";

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
		$query = "SELECT * FROM posts WHERE deleted_at is not NULL";

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
		$query = "SELECT * FROM posts WHERE deleted_at is NULL and status=".$status;

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
	// values(?,?,?,?,?) . 
	function create($data){
		$query ="INSERT INTO posts (title, description, thumbnail, content, slug, category_id,status,created_at) VALUES (?,?,?,?,?,?,?,?)";
		$stmt = $this->connection_obj->conn->prepare($query);
		$stmt->bind_param('sssssiis',$data['title'],$data['description'],$data['thumbnail'],$data['content'],$data['slug'],$data['category_id'],$data['status'],$data['created_at']);

		$stmt->execute();
		return $stmt;
	}
	function update($data){
		if($data['thumbnail']==null){
			$query ="UPDATE posts  SET title=?,description=?,content=?,slug=?,updated_at=?,category_id=? WHERE id =?";
			$stmt = $this->connection_obj->conn->prepare($query);
			$stmt->bind_param('sssssii',$data['title'],$data['description'],$data['content'],$data['slug'],$data['updated_at'],$data['category_id'],$data['id']);
		}else{
			$query ="UPDATE posts  SET title=?,description=?,content=?,slug=?,updated_at=?,category_id=?,thumbnail=? WHERE id =?";
			$stmt = $this->connection_obj->conn->prepare($query);
			$stmt->bind_param('sssssisi',$data['title'],$data['description'],$data['content'],$data['slug'],$data['updated_at'],$data['category_id'],$data['thumbnail'],$data['id']);
		}
		$stmt->execute();
		return $stmt;

	}
	function delete($data){
		$query = "UPDATE posts  SET deleted_at=".$data['deleted_at']." WHERE id =".$data['id'];

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
		FROM posts WHERE deleted_at is NULL and status=1
		ORDER BY created_at DESC";
		$result = $this->connection_obj->conn->query($query);
		// Tạo 1 mảng để chứa dữ liệu
		$posts = array();

		while($row = $result->fetch_assoc()) { 
			$posts[] = $row;
		}
		return $posts;

	}
	function getPostwithCategory($slug){
		$query="SELECT p.id, p.title, p.description, p.thumbnail, p.view_count, p.status, p.content, p.user_id, p.slug, p.created_at FROM posts p JOIN categories c on p.category_id = c.id and c.slug='".$slug."'";
		$result = $this->connection_obj->conn->query($query);

		$posts = array();
		while($row = $result->fetch_assoc()) { 
			$posts[] = $row;
		}
		return $posts;
	}
	function checkIsset($title){
		$query = "SELECT * FROM posts WHERE title=?";
		$stmt = $this->connection_obj->conn->prepare($query);
		$stmt->bind_param('s',$title);
		$result=$stmt->execute();
		$post=$stmt->fetch();
		return $post;
	}

}
?>