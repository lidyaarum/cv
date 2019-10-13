<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($koneksi,"delete from pengalaman where id_pengalaman='$id'");
header("location:pengalaman.php");

?>