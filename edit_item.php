<?php
require "inven.php";
require "auth.php";
$item = new Inven();
$data = $item->find($_GET['id']);
$row = $data->fetch_assoc();

include "header.php";
?>

<body>
<?php include "nav.php"; ?>

<br /><br />

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="update_item.php?id=<?php echo $row['id_barang'] ?>">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Barang</label>
			    <input type="text" name="nama_barang" class="form-control" id="nama_barang" required="required" value="<?php echo $row['nama_barang'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Jenis Barang</label>
			    <input type="text" name="jenis_barang" class="form-control" id="jenis_barang" required="required" value="<?php echo $row['jenis_barang'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Vendor</label>
			    <input type="text" name="vendor" class="form-control" id="vendor" required="required" value="<?php echo $row['vendor'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Merek</label>
			    <input type="text" name="merek" class="form-control" id="merek" required="required" value="<?php echo $row['merek'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Tanggal Pembelian</label>
			    <input type="date" name="tanggal_pembelian" class="form-control" id="tanggal_pembelian" required="required" value="<?php echo $row['tanggal_pembelian'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Lokasi</label>
			    <input type="text" name="lokasi" class="form-control" id="lokasi" required="required" value="<?php echo $row['lokasi'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Jumlah</label>
			    <input type="text" name="jumlah" class="form-control" id="jumlah" required="required" value="<?php echo $row['jumlah'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Harga</label>
			    <input type="text" name="harga" class="form-control" id="harga" required="required" value="<?php echo $row['harga'] ?>">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			  <a href="index.php" class="btn btn-danger">Cancel</a>
			</form>
		</div>
	</div>
</div>
</body>
</html>
<br>
 <center><div class="card-footer text-dark">
    Copyright By Kasuya
</div></center>