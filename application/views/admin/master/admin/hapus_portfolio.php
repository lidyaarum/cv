<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($koneksi,"delete from portfolio where id_portfolio='$id'");
header("location:portfolio.php");

?>