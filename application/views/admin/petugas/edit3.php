<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit kategori</h3>
<a class="btn" href="barang.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysqli_real_escape_string($koneksi,$_GET['id']);
$det=mysqli_query($koneksi,"select * from kategori where kategori_kode='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
?>					
	<form action="update3.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="kategori_kode" value="<?php echo $d['kategori_kode'] ?>"></td>
			</tr>
			<tr>
				<td>kategori nama</td>
				<td><input type="text" class="form-control" name="kategori_nama" value="<?php echo $d['kategori_nama'] ?>"></td>
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