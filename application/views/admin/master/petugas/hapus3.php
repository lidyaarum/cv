<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($koneksi,"delete from kategori where kategori_kode='$id'");
header("location:barang3.php");

?>