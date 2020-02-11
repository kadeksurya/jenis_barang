<?php

require "Connection.php";

/**
 * 
 */
class Jenis_barang extends Connection
{
	public $conn;
	protected $table = 'tb_jenis_barang';
	
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

	function find($id_jenis_barang)
	{
		$sql = "SELECT * FROM ". $this->table. " WHERE id_jenis_barang = $id_jenis_barang";
		$result = $this->conn->query($sql);
		return $result;
		// return $sql;
	}

	function create($payloads)
	{
		$sql = "INSERT INTO ". $this->table. " (jenis_barang) VALUES (
			'".$payloads['jenis_barang']."'
		)";	

		return $this->conn->query($sql);
	}

	function update($id_jenis_barang, $payloads)
	{
		$sql = "UPDATE ". $this->table ." SET ".
			"jenis_barang = ". $payloads['jenis_barang']
		." WHERE id_jenis_barang = $id_jenis_barang";

		return $this->conn->query($sql);
	}

	function delete($id_jenis_barang)
	{
		$sql = "DELETE FROM ". $this->table ." WHERE id_jenis_barang = $id_jenis_barang";
		return $this->conn->query($sql);
	}
}

// $item = new Items();
// $payload = [
// 	'name' => 'Sprite',
// 	'category' => 'Drink',
// 	'price' => 5000
// ];
// $data = $item->update(3);
// var_dump($data);