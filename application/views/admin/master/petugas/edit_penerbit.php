<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Penerbit</h3>
<a class="btn" href="penerbit.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysqli_real_escape_string($koneksi,$_GET['id']);
$det=mysqli_query($koneksi,"select * from penerbit where penerbit_kode='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
?>					
	<form action="update_penerbit.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="penerbit_kode" value="<?php echo $d['penerbit_kode'] ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" class="form-control" name="penerbit_nama" value="<?php echo $d['penerbit_nama'] ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" class="form-control" name="penerbit_alamat" value="<?php echo $d['penerbit_alamat'] ?>"></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><input type="text" class="form-control" name="penerbit_telp" value="<?php echo $d['penerbit_telp'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
<?php include 'footer.php'; ?>