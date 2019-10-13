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

mysqli_query($koneksi,"insert into buku values('$bukuk','$katek','$penek','$judul','$jumlah','$diskripsi','$pengarang','$tahun')");
header("location:barang.php");

 ?>