<?php
include 'config.php';
$query = "select max(id_portfolio) as maxKode from portfolio";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kodepenerbit = $data['maxKode'];
$nourut = (int) substr($kodepenerbit,3,3);
$nourut++;
$char="PT";
$kodeportfolio = $char . sprintf("%03s",$nourut);
?>