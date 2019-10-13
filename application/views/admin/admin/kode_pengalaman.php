<?php
include 'config.php';
$query = "select max(id_pengalaman) as maxKode from pengalaman";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kodepenerbit = $data['maxKode'];
$nourut = (int) substr($kodepenerbit,3,3);
$nourut++;
$char="PG";
$kodepengalaman = $char . sprintf("%03s",$nourut);
?>