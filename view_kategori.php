<?php
include("koneksi.php");

	$query_view=mysqli_query($koneksi, "select * from kategori");
?>
<a href="input_kategori.php" class="btn btn-danger">Tambah Kategori</a>
<table class="table-bordered" border="1">
		<tr>
			<td>ID Kategori</td>
			<td>Nama</td>
			<td colspan="4">Action</td>
		</tr>


<?php 
$no=1;
while ($hasil=mysqli_fetch_array($query_view)) {?>
 	
 	
		<tr>
 			<td><?php echo $hasil['id_kategori'];?></td>
 			<td><?php echo $hasil['nama'];?></td>
 			<td><a href="edit_kategori.php?id_kategori=<?php echo $hasil['id_kategori'];?>">Edit</a></td>
 			<td><a href="hapus_kategori.php?id_kategori=<?php echo $hasil['id_kategori'];?>">Hapus</a></td> 			
 		</tr>
	 
 <?php } ?>
 </table>