<?php 
session_start();
include 'admin/config.php';
$uname=$_POST['username'];
$pass=$_POST['password'];
$pas=md5($pass);
$query=mysqli_query($koneksi,"select * from user where username='$uname' and password='$pas'")or die(mysql_error());
if(mysqli_num_rows($query)==1){
	
	$data=mysqli_fetch_assoc($query);
	
	if($data['level']=="admin"){
	$_SESSION['uname']=$uname;
	header("location:index.php");
		}
	else{
		header("location:index.php");
		}
}
else{
	header("location:index.php?pesan=gagal")or die(mysql_error());

}

 ?>