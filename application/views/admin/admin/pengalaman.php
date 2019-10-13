<?php    include 'header.php'; 
?>
<h3><span class="glyphicon glyphicon-book"></span> Pengalaman</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Pengalaman</button>
<br/>
<br/>


<?php 
$per_hal=10;
$jumlah_record=mysqli_query($koneksi,"SELECT COUNT(*) from pengalaman");
//jum=mysql_result($jumlah_record, 0);
$jum=mysqli_fetch_array($jumlah_record,MYSQLI_NUM);
$halaman=ceil($jum[0] / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Pengalaman</td>		
			<td><?php echo ':'.' '.$jum[0]; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo ':'.' '.$halaman; ?></td>
		</tr>
		
	</table>
	<form action="cari_pengalaman.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari.." name="cari">
	</div>
	</form>
</div>
<table class="table table-hover">		
	</tr>
	<tr>
		<th class="col-sm-1">No</th>
		<th class="col-sm-3">Keterangan</th>
		<th class="col-sm-2">Foto</th>
		<th class="col-sm-2">Nama Perusahaan</th>
		<th class="col-sm-3">DLL</th>
		<!-- <th class="col-md-1">Sisa</th>		 -->
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysqli_real_escape_string($koneksi,$_GET['cari']);
		$brg=mysqli_query($koneksi,"select * from pengalaman where nama_perusahaan like '%$cari%'");
	}else{
		$brg=mysqli_query($koneksi,"select * from pengalaman limit $start, $per_hal");
	}
	$no=1;
	while($b=mysqli_fetch_array($brg)){
	?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['keterangan'] ?></td>
			<td><?php echo $b['foto'] ?></td>
			<td><?php echo $b['nama_perusahaan'] ?></td>
			<td>
				<a href="det_pengalaman.php?id_pengalaman=<?php echo $b['id_pengalaman']; ?>" class="btn btn-info">Detail</a>
				<a href="edit_pengalaman.php?id_pengalaman=<?php echo $b['id_pengalaman']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_pengalaman.php?id=<?php echo $b['id_pengalaman']; ?>' }" class="btn btn-danger">Hapus</a>
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
			include 'kode_pengalaman.php';
			?>						
		</ul>
		<?php/*$query = "SELECT max (buku_kode) as maxKode FROM buku";
		$hasil = mysqli_query($koneksi, $query);
		$data = mysqli_fetch_array($hasil);
		$buku_kode = $data['maxKode'];
		$noUrut = (int) substr($buku_kode,4,4);
		$noUrut++;
		$kode = "B-";
		$newID = $kode . sprintf("%03s",$noUrut);*/
		
		?>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Portfolio Baru</h4>
			</div>
			<div class="modal-body">
				<form action="tmb_pengalaman.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Id Pengalaman</label>
						<input name="id_portfolio" readonly="" value="<?php echo $kodepengalaman; ?>" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<input name="keterangan" type="text" class="form-control" placeholder="Keterangan..">
					</div>		
					<div class="form-group">
						<label>Foto</label>
						<input name="foto" type="file" class="form-control" placeholder="Foto Disini">
					</div>	
					<div class="form-group">
						<label>Nama Perusahaan</label>
						<input name="nama_perusahaan" type="text" class="form-control" placeholder="Nama Perusahaan..">
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