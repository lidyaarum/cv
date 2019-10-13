<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-book"></span>  Detail Buku</h3>
<a class="btn" href="barang.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=mysqli_real_escape_string($koneksi,$_GET['buku_kode']);


$det=mysqli_query($koneksi,"select * from buku where buku_kode='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>Kode Buku</td>
			<td><?php echo $d['buku_kode'] ?></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td><?php echo $d['kategori_kode'] ?></td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td><?php echo $d['penerbit_kode'] ?></td>
		</tr>
		<tr>
			<td>Judul</td>
			<td><?php echo $d['buku_judul'] ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>
			<td><?php echo $d['buku_jumlah'] ?></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td><?php echo $d['buku_diskripsi'] ?></td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td><?php echo $d['buku_pengarang'] ?></td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td><?php echo $d['buku_tahun_terbit'] ?></td>
		</tr>
	</table>
	<?php 
}
?>
<?php include '../admin/footer.php'; ?>