
<?php 
include 'config.php';
$id=$_POST['id_portfolio'];
$foto=$_POST['foto'];
$ket=$_POST['keterangan'];

mysqli_query($koneksi,"update portfolio set foto='$foto', keterangan='$ket' where id_portfolio='$id'");
header("location:portfolio.php");

 ?>