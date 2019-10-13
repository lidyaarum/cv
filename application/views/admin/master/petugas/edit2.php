<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Petugas</h3>
<a class="btn" href="barang2.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysqli_real_escape_string($koneksi,$_GET['id']);
$det=mysqli_query($koneksi,"select * from petugas where petugas_kode='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
?>					
	<form action="update2.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="petugas_kode" value="<?php echo $d['petugas_kode'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Petugas</td>
				<td><input type="text" class="form-control" name="petugas_nama" value="<?php echo $d['petugas_nama'] ?>"></td>
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