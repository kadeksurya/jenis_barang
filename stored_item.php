<?php

require "inven.php";

$item = new Inven();
$payload = [
	'nama_barang' => $_POST['nama_barang'],
	'jenis_barang' => $_POST['jenis_barang'],
	'vendor' => $_POST['vendor'],
	'merek' => $_POST['merek'],
	'tanggal_pembelian' => $_POST['tanggal_pembelian'],
	'lokasi' => $_POST['lokasi'],
	'jumlah' => $_POST['jumlah'],
	'harga' => $_POST['harga']
];

$create = $item->create($payload);

// if($create === TRUE)
header("location: index.php");

