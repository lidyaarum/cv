
<?php 
include 'config.php';
$bukuk=$_POST['petugas_kode'];
$katek=$_POST['petugas_nama'];


mysqli_query($koneksi,"update petugas set petugas_nama='$katek' where petugas_kode='$bukuk'");
header("location:barang2.php");

 ?>