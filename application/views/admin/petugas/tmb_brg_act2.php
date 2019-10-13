<?php 
include 'config.php';
$bukuk=$_POST['petugas_kode'];
$katek=$_POST['petugas_nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$pas=md5($pass);
$level=$_POST['level'];

mysqli_query($koneksi,"insert into petugas values('$bukuk','$katek','$user','$pas','$level')");
header("location:barang2.php");

 ?>