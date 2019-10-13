<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-book"></span>  Edit pendidikan</h3>
<a class="btn" href="pendidikan.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysqli_real_escape_string($koneksi,$_GET['id_pendidikan']);
$det=mysqli_query($koneksi,"select * from pendidikan where id_pendidikan='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
?>					
	<form action="update_biodata.php" method="post">
		<table class="table">
			<tr>
				<td>Id Pendidikan</td>
				<td><input type="text" class="form-control" readonly="" name="id_pendidikan" value="<?php echo $d['id_pendidikan'] ?>"></td>
			</tr>
			<tr>
				<td>Sekolah Asal</td>
				<td><input type="text" class="form-control" name="sekolah_asal" value="<?php echo $d['sekolah_asal'] ?>"></td>
			</tr>
			<tr>
				<td>Tahun Ajaran</td>
				<td><input type="text" class="form-control" name="tahun_ajaran" value="<?php echo $d['tahun_ajaran'] ?>"></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" class="form-control" name="foto" value="<?php echo $d['foto'] ?>"></td>
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