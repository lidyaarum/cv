
<?php 
include 'config.php';
$id=$_POST['id_pendidikan'];
$sa=$_POST['sekolah_asal'];
$ta=$_POST['tahun_ajaran'];
$foto=$_POST['foto'];

mysqli_query($koneksi,"update pendidikan set sekolah_asal='$sa', jk='$jk', ta='$ta', foto='$foto' where id_pendidikan='$id'");
header("location:pendidikan.php");

 ?>