<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($koneksi,"delete from pendidikan where id_pendidikan='$id'");
header("location:pendidikan.php");

?>