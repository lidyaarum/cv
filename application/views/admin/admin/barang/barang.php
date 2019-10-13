<?php include 'header.php'; ?>
<h3><span class="glyphicon glyphicon-briefcase"></span> Data Buku</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Buku</button>
<br/>
<br/>


<?php 
$per_hal=10;
$jumlah_record=mysqli_query($koneksi,"SELECT COUNT(*) from buku");
//jum=mysql_result($jumlah_record, 0);
$jum=mysqli_fetch_array($jumlah_record,MYSQLI_NUM);
$halaman=ceil($jum[0] / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Buku</td>		
			<td><?php echo ':'.' '.$jum[0]; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo ':'.' '.$halaman; ?></td>
		</tr>
		
	</table>
</div>
<table class="table table-hover">		
	</tr>
	<tr>
		<th class="col-sm-1">No</th>
		<th class="col-sm-1">Kode Buku</th>
		<th class="col-sm-1">Kode Kategori</th>
		<th class="col-sm-1">Kode Penerbit</th>
		<th class="col-sm-2">Judul</th>
		<th class="col-sm-1">Jumlah Buku</th>
		<th class="col-sm-1">Deskripsi</th>
		<th class="col-sm-1">Pengarang</th>
		<th class="col-sm-1">Tahun Terbit</th>
		<th class="col-sm-3">DLL</th>
		<!-- <th class="col-md-1">Sisa</th>		 -->
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysqli_real_escape_string($koneksi,$_GET['cari']);
		$brg=mysqli_query($koneksi,"select * from buku where buku='cari'");
	}else{
		$brg=mysqli_query($koneksi,"select * from buku limit $start, $per_hal");
	}
	$no=1;
	while($b=mysqli_fetch_array($brg)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['buku_kode'] ?></td>
			<td><?php echo $b['kategori_kode'] ?></td>
			<td><?php echo $b['penerbit_kode'] ?></td>
			<td><?php echo $b['buku_judul'] ?></td>
			<td><?php echo $b['buku_jumlah'] ?></td>
			<td><?php echo $b['buku_diskripsi'] ?></td>
			<td><?php echo $b['buku_pengarang'] ?></td>
			<td><?php echo $b['buku_tahun_terbit'] ?></td>
			<td>
				<a href="edit.php?id=<?php echo $b['buku_kode']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus.php?id=<?php echo $b['buku_kode']; ?>' }" class="btn btn-danger">Hapus</a>
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
			?>						
		</ul>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Buku Baru</h4>
			</div>
			<div class="modal-body">
				<form action="tmb_brg_act.php" method="post">
					<div class="form-group">
						<label>Kode Buku</label>
						<input name="buku_kode" type="text" class="form-control" placeholder="Masukan Kode Buku">
					</div>
					<div class="form-group">
						<label>Kode Kategori</label>
						<input name="kategori_kode" type="text" class="form-control" placeholder="Masukan Kode Kategori">
					</div>
					<div class="form-group">
						<label>Kode Penerbit</label>
						<input name="penerbit_kode" type="text" class="form-control" placeholder="Masukan Kode Penerbit">
					</div>
					<div class="form-group">
						<label>Judul</label>
						<input name="buku_judul" type="text" class="form-control" placeholder="Judul Buku">
					</div>	
					<div class="form-group">
						<label>Jumlah Buku</label>
						<input name="buku_jumlah" type="text" class="form-control" placeholder="Masukan Jumlah Buku">
					</div>	
					<div class="form-group">
						<label>Deskripsi</label>
						<input name="buku_diskripsi" type="text" class="form-control" placeholder="Deskripsi Buku">
					</div>	
					<div class="form-group">
						<label>Pengarang</label>
						<input name="buku_pengarang" type="text" class="form-control" placeholder="Pengarang Buku">
					</div>	
					<div class="form-group">
						<label>Tahun Terbit</label>
						<input name="buku_tahun_terbit" type="text" class="form-control" placeholder="Tahun Terbit Buku">
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