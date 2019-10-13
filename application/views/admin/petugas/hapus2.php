<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($koneksi,"delete from petugas where petugas_kode='$id'");
header("location:barang2.php");
?>