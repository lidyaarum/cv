<?php
include 'config.php';
$query = "select max(kategori_kode) as maxKode from kategori";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kodepenerbit = $data['maxKode'];
$nourut = (int) substr($kodepenerbit,3,3);
$nourut++;
$char="K";
$kodepenerbit = $char . sprintf("%03s",$nourut);
?>