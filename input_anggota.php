<?php
include("koneksi.php");

if(isset($_POST['save'])){
	$querry_input=mysqli_query($koneksi, "insert into anggota(nama, alamat) 
	values(
	'".$_POST['nama']."',
	'".$_POST['alamat']."')");
	
if($querry_input){
header('location:view_anggota.php');
}else{
	echo mysqli_error();
}
}
?>
<form method="POST">
	<table class="table-bordered" border="1">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>
