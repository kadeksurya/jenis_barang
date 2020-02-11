<?php
require "Jenis_barang.php";

$item = new Jenis_barang();
$rows = $item->all();

include "header.php";
?>
<body>
<?php include "nav.php"; ?>

<br /><br />

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<a href="insert_jenis.php" class="btn btn-dark">Tambah Data</a>
			<br /><br />
			<table class="table" id="myTable">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">NO</th>
			      <th scope="col">Nama Jenis Barang</th>
			      <th scope="col">Action </th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	while ($row = $rows->fetch_assoc()) {
			  	?>
				    <tr>
				      <th scope="row"><?php echo $row['id_jenis_barang'] ?></th>
				      <td><?php echo $row['jenis_barang'] ?></td>
				      <td>
				      	<a href="edit_jenis.php?id=<?php echo $row['id_jenis_barang'] ?>" class="btn btn-info">Edit</a>
				      	<a href="delete_jenis.php?id=<?php echo $row['id_jenis_barang'] ?>" class="btn btn-danger">Delete</a>
				      </td>
				    </tr>
			    <?php
				}
			    ?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready( function () {
	    $('#myTable').DataTable();
	} );
</script>
 <center><div class="card-footer text-dark">
    Copyright By Kasuya
 </div></center>
