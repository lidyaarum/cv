<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-user"></span>  Edit Biodata</h3>
<a class="btn" href="biodata.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysqli_real_escape_string($koneksi,$_GET['id_biodata']);
$det=mysqli_query($koneksi,"select * from biodata where id_biodata='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
?>					
	<form action="update_biodata.php" method="post" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td>Id Biodata</td>
				<td><input type="text" class="form-control" readonly="" name="id_biodata" value="<?php echo $d['id_biodata'] ?>"></td>
			</tr>
			<tr>
				<td>Profesi</td>
				<td><input type="text" class="form-control" name="profesi" value="<?php echo $d['profesi'] ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" class="form-control" name="jk" value="<?php echo $d['jk'] ?>"></td>
			</tr>
			<tr>
				<td>Tempat Tanggal Lahir</td>
				<td><input type="text" class="form-control" name="ttl" value="<?php echo $d['ttl'] ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td><input type="text" class="form-control" name="agama" value="<?php echo $d['agama'] ?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" class="form-control" name="status" value="<?php echo $d['status'] ?>"></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" class="form-control" name="foto" value="<?php echo $d['foto'] ?>"></td>
			</tr>
			<tr>
				<td>Resume</td>
				<td><input type="text" class="form-control" name="resume" value="<?php echo $d['resume'] ?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" class="form-control" name="keterangan" value="<?php echo $d['keterangan'] ?>"></td>
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