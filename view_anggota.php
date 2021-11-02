<?php
include("koneksi.php");

	$query_view=mysqli_query($koneksi, "select * from anggota");
?>
<table class="table-bordered" border="">
		<tr>
			<td>ID Anggota</td>
			<td>Nama</td>
			<td>Alamat</td>
		</tr>


<?php 

while ($tampil=mysqli_fetch_array($query_view)) {?>
 	

		<tr>
		<td><?php echo $tampil['id_anggota']?></td>
 			<td><?php echo $tampil['nama']?></td>
 			<td><?php echo $tampil['alamat']?></td>
 		</tr>
	 
 <?php } ?>
</table> 	