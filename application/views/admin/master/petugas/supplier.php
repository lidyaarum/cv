<?php include 'header.php';	?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data Supplier</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-pencil"></span>  Tambah</button>
<br/>
<br/>
<table class="table">
	<tr>
		<th>No</th>
		<th>Nama </th>
		<th>Alamat</th>
		<th>Telepon</th>
	</tr>
	<?php 
		$brg=mysqli_query($koneksi,"select * from supplier order by id desc");
	$no=1;
	while($b=mysqli_fetch_array($brg)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['nama_supplier'] ?></td>
			<td><?php echo $b['alamat_supplier'] ?></td>
			<td><?php echo['telp_supplier'] ?> </td>
			<td>		
				<a href="edit_supplier.php?id=<?php echo $b['id']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_supplier.php?id=<?php echo $b['id']; ?>&jumlah=<?php echo $b['jumlah'] ?>&nama=<?php echo $b['nama']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>

		<?php 
	}
	?>
</table>

<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Penjualan
				</div>
				<div class="modal-body">				
					<form action="barang_laku_act.php" method="post">								
						<div class="form-group">
							<label>Nama</label>
							<input name="sama_supplier" type="text" class="form-control" placeholder="nama" autocomplete="off">
						</div>	
						<div class="form-group">
							<label>Alamat</label>
							<input name="alamat_supplier" type="text" class="form-control" placeholder="alamat" autocomplete="off">
						</div>																	
						<div class="form-group">
							<label>Telepon</label>
							<input name="telp_supplier" type="text" class="form-control" placeholder="telepon" autocomplete="off">
						</div>		
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<input type="reset" class="btn btn-danger" value="Reset">												
						<input type="submit" class="btn btn-primary" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tgl").datepicker({dateFormat : 'yy/mm/dd'});							
		});
	</script>
	<?php include 'footer.php'; ?>