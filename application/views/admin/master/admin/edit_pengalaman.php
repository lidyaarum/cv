<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-book"></span>  Edit Pengalaman</h3>
<a class="btn" href="pengalaman.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysqli_real_escape_string($koneksi,$_GET['id_pengalaman']);
$det=mysqli_query($koneksi,"select * from pengalaman where id_pengalaman='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
?>					
	<form action="update_pengalaman.php" method="post">
		<table class="table">
			<tr>
				<td>Id Pendidikan</td>
				<td><input type="text" class="form-control" readonly="" name="id_pengalaman" value="<?php echo $d['id_pengalaman'] ?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" class="form-control" name="keterangan" value="<?php echo $d['keterangan'] ?>"></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" class="form-control" name="foto" value="<?php echo $d['foto'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Perusahaan</td>
				<td><input type="text" class="form-control" name="foto" value="<?php echo $d['nama_perusahaan'] ?>"></td>
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