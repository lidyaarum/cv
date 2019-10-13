
<?php 
include 'header.php';
?>
<html>
	<header>
	<title>Perpustakaan Online</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	</header>
<?php
$a = mysqli_query($koneksi,"select * from buku");
?>
<body>
<div class="wew">
	<br>
		<br>
			<br>
				<br>
					<br>
						<br>
							<br>
								<br>
	<center><b><h2>Selamat Datang</h2>	
    <h2>Perpustakaan Online</h2>
    <h2>Kelompok GJ</h2></b></center>
</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>
</body>
</html>

<?php 
include 'footer.php';

?>
</html>