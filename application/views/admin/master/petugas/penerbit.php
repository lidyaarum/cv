<?php include 'header.php'; ?>
<h3><span class="glyphicon glyphicon-briefcase"></span> Data Penerbit</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambahkan Penerbit</button>
<br/>
<br/>


<?php 
$per_hal=10;
$jumlah_record=mysqli_query($koneksi,"SELECT COUNT(*) from penerbit");
//jum=mysql_result($jumlah_record, 0);
$jum=mysqli_fetch_array($jumlah_record,MYSQLI_NUM);
$halaman=ceil($jum[0] / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Penerbit</td>		
			<td><?php echo ':'.' '.$jum[0]; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo ':'.' '.$halaman; ?></td>
		</tr>
		
	</table>
		<form action="cari_penerbit.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari Penerbit Disini.." name="cari">
		
	</div>
	</form>
</div>
<table class="table table-hover">		
	</tr>
	<tr>
		<th class="col-sm-1">No</th>
		<th class="col-sm-2">Kode Penerbit</th>
		<th class="col-sm-3">Nama</th>
		<th class="col-sm-2">Alamat</th>
		<th class="col-sm-2">Telepon</th>
		<th class="col-sm-3">DLL</th>
		<!-- <th class="col-md-1">Sisa</th>		 -->
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysqli_real_escape_string($koneksi,$_GET['cari']);
		$brg=mysqli_query($koneksi,"select * from penerbit where penerbit_nama like '%$cari%'");
	}else{
		$brg=mysqli_query($koneksi,"select * from penerbit limit $start, $per_hal");
	}
	$no=1;
	while($b=mysqli_fetch_array($brg)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['penerbit_kode'] ?></td>
			<td><?php echo $b['penerbit_nama'] ?></td>
			<td><?php echo $b['penerbit_alamat'] ?></td>
			<td><?php echo $b['penerbit_telp'] ?></td>
			<td>
				<a href="edit_penerbit.php?id=<?php echo $b['penerbit_kode']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_penerbit.php?id=<?php echo $b['penerbit_kode']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
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
			include 'kode_penerbit.php';
			?>						
		</ul>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambahkan Penerbit</h4>
			</div>
			<div class="modal-body">
				<form action="penerbit_act.php" method="post">
					<div class="form-group">
						<label>Kode Penerbit</label>
						<input name="penerbit_kode" readonly="" value="<?php echo $kodepenerbit; ?>" type="text" class="form-control" placeholder="Masukan Kode Penerbit">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input name="penerbit_nama" type="text" class="form-control" placeholder="Masukan Nama Penerbit">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input name="penerbit_alamat" type="text" class="form-control" placeholder="Alamat..">
					</div>
					<div class="form-group">
						<label>Telepon</label>
						<input name="penerbit_telp" type="text" class="form-control" placeholder="Telepon Penerbit">
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