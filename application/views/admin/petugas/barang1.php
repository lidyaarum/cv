<?php include 'header.php'; ?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Peminjam</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambahkan Peminjam</button>
<br/>
<br/>

<?php 
$per_hal=10;
$jumlah_record=mysqli_query($koneksi,"SELECT COUNT(*) from peminjam");
$row = mysqli_fetch_array($jumlah_record,MYSQLI_NUM);
$jum = $row[0];
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Record</td>		
			<td><?php echo $jum; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
		<form action="cari_act1.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari Peminjam Disini.." name="cari">
		</form>
	</div>
</div>
<br/>
<table class="table table-hover">
	<tr>
		<th class="col-md-1">No</th>
		<th class="col-md-1">Kode Peminjam</th>
		<th class="col-md-2">Nama Peminjam</th>
		<th class="col-md-2">Alamat</th>
		<th class="col-md-2">No Telepon</th>
		<th class="col-md-3">DLL</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysqli_real_escape_string($koneksi,$_GET['cari']);
		$brg=mysqli_query($koneksi,"select * from peminjam where peminjam_nama like '%$cari%'");
	}else{
		$brg=mysqli_query($koneksi,"select * from peminjam limit $start, $per_hal");
	}
	$no=1;
	while($b=mysqli_fetch_array($brg)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['peminjam_kode'] ?></td>
			<td><?php echo $b['peminjam_nama'] ?></td>
			<td><?php echo $b['peminjam_alamat'] ?></td>
			<td><?php echo $b['peminjam_telp'] ?></td>
			
			<td>
				<a href="edit1.php?id=<?php echo $b['peminjam_kode']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus1.php?id=<?php echo $b['peminjam_kode']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
		<?php 
	}
	include 'kode_barang1.php';
	?>
</table>
<ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			include 'kode_barang1.php';
			?>						
		</ul>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Peminjam Baru</h4>
			</div>
			<div class="modal-body">
				<form action="tmb_brg_act1.php" method="post">
					<div class="form-group">
						<label>Kode Peminjam</label>
						<input name="peminjam_kode" readonly="" value="<?php echo $kodepenerbit; ?>" type="text" class="form-control" placeholder="Kode Peminjam ..">
					</div>
					<div class="form-group">
						<label>Nama Peminjam</label>
						<input name="peminjam_nama" type="text" class="form-control" placeholder="Nama Peminjam ..">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input name="peminjam_alamat" type="text" class="form-control" placeholder="Alamat ..">
					</div>
					<div class="form-group">
						<label>No Telepon</label>
						<input name="peminjam_telp" type="text" class="form-control" placeholder="Masukan No Telepon ..">
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