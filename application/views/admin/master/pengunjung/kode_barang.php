<?php
include 'config.php';
$query = "select max(buku_kode) as maxKode from buku";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kodepenerbit = $data['maxKode'];
$nourut = (int) substr($kodepenerbit,3,3);
$nourut++;
$char="B";
$kodepenerbit = $char . sprintf("%03s",$nourut);
?>