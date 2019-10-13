
<?php 
include 'config.php';
$bukuk=$_POST['buku_kode'];
$katek=$_POST['kategori_kode'];
$penek=$_POST['penerbit_kode'];
$judul=$_POST['buku_judul'];
$jumlah=$_POST['buku_jumlah'];
$diskripsi=$_POST['buku_diskripsi'];
$pengarang=$_POST['buku_pengarang'];
$tahun=$_POST['buku_tahun_terbit'];

mysqli_query($koneksi,"update buku set kategori_kode='$katek', penerbit_kode='$penek', buku_judul='$judul', buku_jumlah='$jumlah', buku_diskripsi='$diskripsi', buku_pengarang='$pengarang', buku_tahun_terbit='tahun' where buku_kode='$bukuk'");
header("location:barang.php");

 ?>