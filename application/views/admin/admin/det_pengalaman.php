<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-book"></span>  Detail Pengalaman</h3>
<a class="btn" href="pengalaman.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=mysqli_real_escape_string($koneksi,$_GET['id_pengalaman']);


$det=mysqli_query($koneksi,"select * from pengalaman where id_pengalaman='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>Id Pengalaman</td>
			<td><?php echo $d['id_pengalaman'] ?></td>
		</tr>	
		<tr>
			<td>Keterangan</td>
			<td><?php echo $d['keterangan'] ?></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td><?php echo $d['foto'] ?></td>
		</tr>
		<tr>
			<td>Nama Perusahaan</td>
			<td><?php echo $d['nama_perusahaan'] ?></td>
		</tr>
	</table>
	<?php 
}
?>
<?php include 'footer.php'; ?>