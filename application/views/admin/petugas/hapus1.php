<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($koneksi,"delete from peminjam where peminjam_kode='$id'");
header("location:barang1.php");

?>