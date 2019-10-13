<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-book"></span>  Edit Buku</h3>
<a class="btn" href="barang.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysqli_real_escape_string($koneksi,$_GET['id']);
$det=mysqli_query($koneksi,"select * from buku where buku_kode='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
?>					
	<form action="update.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="buku_kode" value="<?php echo $d['buku_kode'] ?>"></td>
			</tr>
			<tr>
				<td>Kategori Buku</td>
				<td><input type="text" class="form-control" name="kategori_kode" value="<?php echo $d['kategori_kode'] ?>"></td>
			</tr>
			<tr>
				<td>Kode Penerbit</td>
				<td><input type="text" class="form-control" name="penerbit_kode" value="<?php echo $d['penerbit_kode'] ?>"></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td><input type="text" class="form-control" name="buku_judul" value="<?php echo $d['buku_judul'] ?>"></td>
			</tr>
			<tr>
				<td>Jumlah Buku</td>
				<td><input type="text" class="form-control" name="buku_jumlah" value="<?php echo $d['buku_jumlah'] ?>"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" class="form-control" name="buku_diskripsi" value="<?php echo $d['buku_diskripsi'] ?>"></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td><input type="text" class="form-control" name="buku_pengarang" value="<?php echo $d['buku_pengarang'] ?>"></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td><input type="text" class="form-control" name="buku_tahun_terbit" value="<?php echo $d['buku_tahun_terbit'] ?>"></td>
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