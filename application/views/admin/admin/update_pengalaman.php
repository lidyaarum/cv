
<?php 
include 'config.php';
$id=$_POST['id_pengalaman'];
$ket=$_POST['keterangan'];
$foto=$_POST['foto'];
$nama=$_POST['nama_perusahaan'];

mysqli_query($koneksi,"update pengalaman set keterangan='$ket', foto='$foto', nama_perusahaan='$nama' where id_pengalaman='$id'");
header("location:pengalaman.php");

 ?>