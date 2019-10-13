
<?php 
include 'config.php';
$id=$_POST['id_biodata'];
$profesi=$_POST['profesi'];
$jk=$_POST['jk'];
$ttl=$_POST['ttl'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$status=$_POST['status'];
$foto=$FILES['foto']['name'];
$resume=$_POST['resume'];
$keterangan=$_POST['keterangan'];

// move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name'])or die();
// 	mysql_query("update admin set foto='$foto' where uname='$user'");

  
$u=mysqli_query($koneksi,"select * from biodata where id_biodata='$id'");
$us=mysqli_fetch_array($u);
if(file_exists("foto/".$us['foto'])){
	unlink("foto/".$us['foto']);
	move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
	mysqli_query($koneksi,"update biodata set profesi='$profesi', jk='$jk', ttl='$ttl', alamat='$alamat', agama='$agama', status='$status', foto='$foto', resume='$resume', keterangan='$keterangan' where id_biodata='$id'");
	header("location:biodata.php?pesan=oke");
}else{
	move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
	mysqli_query($koneksi,"update biodata set profesi='$profesi', jk='$jk', ttl='$ttl', alamat='$alamat', agama='$agama', status='$status', foto='$foto', resume='$resume', keterangan='$keterangan' where id_biodata='$id'");
	header("location:biodata.php?pesan=oke");
}




//mysqli_query($koneksi,"update biodata set profesi='$profesi', jk='$jk', ttl='$ttl', alamat='$alamat', agama='$agama', status='$status', foto='$foto', resume='$resume', keterangan='$keterangan' where id_biodata='$id'");
header("location:biodata.php");

 ?>