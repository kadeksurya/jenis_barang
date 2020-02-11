<?php

require "Connection.php";

/**
 * 
 */
class Users extends Connection
{
	public $conn;
	protected $table = 'tb_login';
	
	function __construct()
	{
		$this->conn = parent::start();
	}

	function all($field = '*')
	{
		$sql = "SELECT $field FROM ".$this->table;
		$result = $this->conn->query($sql);
		return $result;
		// return $sql;
	}

	function find($id_user)
	{
		$sql = "SELECT * FROM ". $this->table. " WHERE id_user = $id_user";
		$result = $this->conn->query($sql);
		return $result;
		// return $sql;
	}

	function create($payloads)
	{
		$password = password_hash($payloads['password'], PASSWORD_DEFAULT);

		$sql = "INSERT INTO ". $this->table. " (username, password, email, name) VALUES (
			'".$payloads['username']."',
			'".$password."',
			'".$payloads['email']."',
			'".$payloads['name']."'
		)";	

		return $this->conn->query($sql);
	}
	function login($payloads)
	{
		$sql = "SELECT * FROM tb_login WHERE username='".$payloads['username']."' OR email='".$payloads
		['email']."'";

		return $this->conn->query($sql);
		// return $sql;
	}
}

// $user = new Users();
// $payload = [
// 	'username' => 'kasuya',
// 	'email' => 'kasuya@gmail.com'
// ];
// $query = $user->login($payload);
// var_dump($query);