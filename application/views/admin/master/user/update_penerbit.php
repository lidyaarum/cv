
<?php 
include 'config.php';
$bukuk=$_POST['penerbit_kode'];
$katek=$_POST['penerbit_nama'];
$penek=$_POST['penerbit_alamat'];
$judul=$_POST['penerbit_telp'];

mysqli_query($koneksi,"update penerbit set penerbit_nama='$katek', penerbit_alamat='$penek', penerbit_telp='$judul' where penerbit_kode='$bukuk'");
header("location:penerbit.php");

 ?>