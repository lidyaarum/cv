<?php 
include 'config.php';
$kode=$_POST['peminjam_kode'];
$nama=$_POST['peminjam_nama'];
$jenis=$_POST['peminjam_alamat'];
$suplier=$_POST['peminjam_telp'];

mysqli_query($koneksi,"insert into peminjam values('$kode','$nama','$jenis','$suplier')");
header("location:barang1.php");

 ?>