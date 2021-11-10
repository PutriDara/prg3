<?php 
include("koneksi.php");
if(isset($_POST['save'])) {
	$query_edit=mysqli_query($koneksi, "update anggota set
		nama='".$_POST['nama']."',
		alamat='".$_POST['alamat']."'
		WHERE id_anggota ='".$_POST['id_anggota']."'");
if ($query_edit) {
	header("location:view_anggota.php");
}else{
	echo mysqli_error();
}
}

$tampil=mysqli_query($koneksi, "select * from anggota where id_anggota='".$_GET['id_anggota']."'");
$tampil_data=mysqli_fetch_array($tampil);

?>

<form method="POST">
	<table class="table table-bordered" border="1">
		<input type="hidden" name="id_anggota" value="<?php echo $tampil_data['id_anggota'];?>">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" class="form-control" value="<?php echo $tampil_data['nama'];?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat" class="form-control" value="<?php echo $tampil_data['alamat'];?>"></td>
		</tr>
		<tr>
			<td><input type="submit" value="rubah data" name="save"></td>
		</tr>

	</table>
</form>