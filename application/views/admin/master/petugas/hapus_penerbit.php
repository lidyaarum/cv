<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($koneksi,"delete from penerbit where penerbit_kode='$id'");
header("location:penerbit.php");

?>