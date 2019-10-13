<?php
include 'config.php';
$query = "select max(penerbit_kode) as maxKode from penerbit";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kodepenerbit = $data['maxKode'];
$nourut = (int) substr($kodepenerbit,3,3);
$nourut++;
$char="PN";
$kodepenerbit = $char . sprintf("%03s",$nourut);
?>