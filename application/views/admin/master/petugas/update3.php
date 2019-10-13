
<?php 
include 'config.php';
$bukuk=$_POST['kategori_kode'];
$katek=$_POST['kategori_nama'];

mysqli_query($koneksi,"update kategori set kategori_nama='$katek' where kategori_kode='$bukuk'");
header("location:barang3.php");

 ?>