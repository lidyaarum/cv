<?php include 'header.php'; ?>
<h3><span class="glyphicon glyphicon-briefcase"></span> Petugas</h3>
<br/>
<br/>


<?php 
$per_hal=10;
$jumlah_record=mysqli_query($koneksi,"SELECT COUNT(*) from petugas");
//jum=mysql_result($jumlah_record, 0);
$jum=mysqli_fetch_array($jumlah_record,MYSQLI_NUM);
$halaman=ceil($jum[0] / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah petugas</td>		
			<td><?php echo ':'.' '.$jum[0]; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo ':'.' '.$halaman; ?></td>
		</td>
	</table>
		<form action="cari_act2.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari Petugas Disini.." name="cari">
	</div>
	</form>
</div>
<table class="table table-hover">		
	</tr>
	<tr>
		<th class="col-sm-1">No</th>
		<th class="col-sm-1">Kode Petugas</th>
		<th class="col-sm-2">Nama Petugas</th>
		<th class="col-sm-1">Level</th>
		<th class="col-sm-3">DLL</th>
		<!-- <th class="col-md-1">Sisa</th>		 -->
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysqli_real_escape_string($koneksi,$_GET['cari']);
		$brg=mysqli_query($koneksi,"select * from petugas where petugas_nama like '%$cari%'");
	}else{
		$brg=mysqli_query($koneksi,"select * from petugas limit $start, $per_hal");
	}
	$no=1;
	while($b=mysqli_fetch_array($brg)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['petugas_kode'] ?></td>
			<td><?php echo $b['petugas_nama'] ?></td>
			<td><?php echo $b['level'] ?></td>
		</tr>		
		<?php 
	}
	?>
</table>
<ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			include 'kode_barang2.php';
			?>						
		</ul>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Petugas Baru</h4>
			</div>
			<div class="modal-body">
				<form action="tmb_brg_act2.php" method="post">
					<div class="form-group">
						<label>Kode Petugas</label>
						<input name="petugas_kode" readonly="" value="<?php echo $kodepenerbit; ?>" type="text" class="form-control" placeholder="Masukan Kode Petugas">
					</div>
					<div class="form-group">
						<label>Nama Petugas</label>
						<input name="petugas_nama" type="text" class="form-control" placeholder="Masukan Nama Petugas">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input name="username" type="text" class="form-control" placeholder="Masukan Nama Petugas">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input name="password" type="password" class="form-control" placeholder="Masukan Nama Petugas">
					</div>
					<div class="form-group">
						<label>Level</label>
						<select class="form-control" name="level">
							<option>admin</option>
							<option>petugas</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>



<?php 
include 'footer.php';

?>