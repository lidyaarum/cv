<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($koneksi,"delete from buku where buku_kode='$id'");
header("location:barang.php");

?>