<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Peminjam</h3>
<a class="btn" href="barang1.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysqli_real_escape_string($koneksi,$_GET['id']);
$det=mysqli_query($koneksi,"select * from peminjam where peminjam_kode='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
?>					
	<form action="update1.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="peminjam_kode" value="<?php echo $d['peminjam_kode'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Peminjam</td>
				<td><input type="text" class="form-control" name="peminjam_nama" value="<?php echo $d['peminjam_nama'] ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" class="form-control" name="peminjam_alamat" value="<?php echo $d['peminjam_alamat'] ?>"></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td><input type="text" class="form-control" name="peminjam_telp" value="<?php echo $d['peminjam_telp'] ?>"></td>
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