<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-user"></span>  Detail Biodata</h3>
<a class="btn" href="biodata.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=mysqli_real_escape_string($koneksi,$_GET['id_biodata']);


$det=mysqli_query($koneksi,"select * from biodata where id_biodata='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>Id Biodata</td>
			<td><?php echo $d['id_biodata'] ?></td>
		</tr>
		<tr>
			<td>Profesi</td>
			<td><?php echo $d['profesi'] ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $d['jk'] ?></td>
		</tr>
		<tr>
			<td>Tempat Tanggal Lahir</td>
			<td><?php echo $d['ttl'] ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $d['alamat'] ?></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td><?php echo $d['agama'] ?></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><?php echo $d['status'] ?></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td><?php echo $d['foto'] ?></td>
		</tr>
		<tr>
			<td>Resume</td>
			<td><?php echo $d['resume'] ?></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td><?php echo $d['keterangan'] ?></td>
		</tr>
	</table>
	<?php 
}
?>
<?php include 'footer.php'; ?>