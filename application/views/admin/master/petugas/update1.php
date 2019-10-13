<?php 
include 'config.php';
$id=$_POST['peminjam_kode'];
$nama=$_POST['peminjam_nama'];
$jenis=$_POST['peminjam_alamat'];
$suplier=$_POST['peminjam_telp'];

mysqli_query($koneksi,"update peminjam set peminjam_nama='$nama', peminjam_alamat='$jenis', peminjam_telp='$suplier' where peminjam_kode='$id'");
header("location:barang1.php");

?>