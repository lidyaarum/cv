<?php
include 'config.php';
$query = "select max(id_pendidikan) as maxKode from pendidikan";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kodepenerbit = $data['maxKode'];
$nourut = (int) substr($kodepenerbit,3,3);
$nourut++;
$char="PD";
$kodependidikan = $char . sprintf("%03s",$nourut);
?>