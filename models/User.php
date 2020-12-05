
<?php 
require_once('models/Connection.php');
class User{
	var $connection_obj;
	function __construct(){
		$this->connection_obj= new Connection();
	}
	function getAll(){
		
		
		// Câu lệnh truy vấn
		$query = "SELECT * FROM users WHERE deleted_at is NULL";

		// Thực thi câu lệnh
		$result = $this->connection_obj->conn->query($query);
		// Tạo 1 mảng để chứa dữ liệu
		$user = array();

		while($row = $result->fetch_assoc()) { 
			$user[] = $row;
		}
		return $user;
	}
	function find($id){

		$query = "SELECT * FROM users WHERE id=".$id;

		$result = $this->connection_obj->conn->query($query);

		$user = $result->fetch_assoc();

		return $user;
	}
	function update($data){
		$query ="UPDATE users SET name='".$data['name']."',email='".$data['email']."',updated_at='".$data['updated_at']."' WHERE id =".$data['id'];

    
		$status = $this->connection_obj->conn->query($query);
		return $status;
	}
	function delete($data){
		$query = "UPDATE users  SET deleted_at='".$data['deleted_at']."' WHERE id =".$data['id'];


		$result = $this->connection_obj->conn->query($query);

		return $result;

	}
	function login($email,$password){
			$query = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."' ";

			//echo "$query";

			$result = $this->connection_obj->conn->query($query);

			$user = $result->fetch_assoc();

			//var_dump($user);

			return $user;
		}


}
?>