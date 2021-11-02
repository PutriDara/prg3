<?php
include("koneksi.php");

if(isset($_POST['save'])){
	$querry_input=mysqli_query($koneksi, "insert into kategori(id_kategori,nama) 
	values(
	'".$_POST['id_kategori']."',
	'".$_POST['nama']."')");
	
if($querry_input){
header('location:view_kategori.php');
}else{
	echo mysqli_error();
}
}
?>
<form method="POST">
	<table class="table-bordered" border="1">
		<tr>
			<td>ID Kategori</td>
			<td><input number="text" name="id_kategori"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>
