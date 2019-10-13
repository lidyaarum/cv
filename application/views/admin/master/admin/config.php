<?php 
/*mysql_connect("localhost","root","");
mysql_select_db("malasngoding_kios");*/

$koneksi = mysqli_connect("localhost", "root", "", "personal");
	
if(mysqli_connect_errno()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
}

?>