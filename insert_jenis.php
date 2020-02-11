<?php
include "header.php";
?>

<body>
<?php include "nav.php"; ?>

<br /><br />

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="stored_jenis.php">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Jenis Barang</label>
			    <input type="text" name="jenis_barang" class="form-control" id="jenis_barang" required="required">
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