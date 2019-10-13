<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-book"></span>  Edit pendidikan</h3>
<a class="btn" href="pendidikan.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysqli_real_escape_string($koneksi,$_GET['id_portfolio']);
$det=mysqli_query($koneksi,"select * from portfolio where id_portfolio='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
?>					
	<form action="update_portfolio.php" method="post">
		<table class="table">
			<tr>
				<td>Id Pendidikan</td>
				<td><input type="text" class="form-control" readonly="" name="id_portfolio" value="<?php echo $d['id_portfolio'] ?>"></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" class="form-control" name="foto" value="<?php echo $d['foto'] ?>"></td>
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