<?php
include 'config.php';
$query = "select max(id_biodata) as maxKode from biodata";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kodepenerbit = $data['maxKode'];
$nourut = (int) substr($kodepenerbit,3,3);
$nourut++;
$char="B";
$kodebiodata = $char . sprintf("%03s",$nourut);
?>