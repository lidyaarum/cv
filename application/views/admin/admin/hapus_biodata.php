<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($koneksi,"delete from biodata where id_biodata='$id'");
header("location:biodata.php");

?>