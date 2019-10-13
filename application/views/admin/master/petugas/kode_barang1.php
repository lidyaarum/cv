<?php
include 'config.php';
$query = "select max(peminjam_kode) as maxKode from peminjam";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kodepenerbit = $data['maxKode'];
$nourut = (int) substr($kodepenerbit,3,3);
$nourut++;
$char="PM";
$kodepenerbit = $char . sprintf("%03s",$nourut);
?>