<?php

require "Jenis_barang.php";

$item = new Jenis_barang();
$payload = [
	'jenis_barang' => $_POST['jenis_barang']
];

$create = $item->create($payload);

// if($create === TRUE)
header("location: jns_barang.php");

