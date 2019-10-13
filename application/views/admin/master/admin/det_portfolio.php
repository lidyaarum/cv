<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-book"></span>  Detail Pendidikan</h3>
<a class="btn" href="portfolio.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=mysqli_real_escape_string($koneksi,$_GET['id_portfolio']);


$det=mysqli_query($koneksi,"select * from portfolio where id_portfolio='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>Id Portfolio</td>
			<td><?php echo $d['id_portfolio'] ?></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td><?php echo $d['foto'] ?></td>
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