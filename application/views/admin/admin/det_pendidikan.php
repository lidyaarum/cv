<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-book"></span>  Detail Pendidikan</h3>
<a class="btn" href="pendidikan.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=mysqli_real_escape_string($koneksi,$_GET['id_pendidikan']);


$det=mysqli_query($koneksi,"select * from pendidikan where id_pendidikan='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>Id Pendidikan</td>
			<td><?php echo $d['id_pendidikan'] ?></td>
		</tr>
		<tr>
			<td>Sekolah Asal</td>
			<td><?php echo $d['sekolah_asal'] ?></td>
		</tr>
		<tr>
			<td>Tahun Ajaran</td>
			<td><?php echo $d['tahun_ajaran'] ?></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td><?php echo $d['foto'] ?></td>
		</tr>
	</table>
	<?php 
}
?>
<?php include 'footer.php'; ?>