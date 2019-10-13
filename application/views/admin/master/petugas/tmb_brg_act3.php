<?php 
include 'config.php';
$kode=$_POST['kategori_kode'];
$nama=$_POST['kategori_nama'];

mysqli_query($koneksi,"insert into kategori values('$kode','$nama')");
header("location:barang3.php");

 ?>