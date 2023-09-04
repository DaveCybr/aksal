<?php

class UserModel {
	
	private $table = 'tbl_user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllUser()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getUserById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id_user');
		$this->db->bind('id_user',$id);
		return $this->db->single();
	}

	public function tambah($data)
	{
		$query = "INSERT INTO tbl_user (id_user,username,password,level) VALUES(:id_user,:username,:password,:level)";
		$this->db->query($query);
		$this->db->bind('id_user',$data['id_user']);
		$this->db->bind('username',$data['username']);
		$this->db->bind('password',($data['password']));
		$this->db->bind('level',($data['level']));
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cekUsername($username){
		$this->db->query("SELECT * FROM tbl_user WHERE username = :username");
		$this->db->bind('username', $username);
		return $this->db->single();
	}

	public function updateDataUser($data)
	{
			$query = "UPDATE tbl_user SET username=:username , password=:password , level=:level  WHERE id_user=:id_user";
			$this->db->query($query);
			$this->db->bind('id_user',$data['id_user']);
			$this->db->bind('username',$data['username']);
			$this->db->bind('password',($data['password']));
			$this->db->bind('level',($data['level']));
			$this->db->execute();

		return $this->db->rowCount();
		
	}


	public function deleteUser($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_user=:id_user');
		$this->db->bind('id_user',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	// public function cariUser()
	// {
	// 	$key = $_POST['key'];
	// 	$this->db->query("SELECT * FROM " . $this->table . " WHERE nama LIKE :key");
	// 	$this->db->bind('key',"%$key%");
	// 	return $this->db->resultSet();
	// }
}
