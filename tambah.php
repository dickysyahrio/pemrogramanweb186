<?php 
require 'fungsi.php';

// Mengecek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {


// cek apakah data  berhasil di tambah atau tidak
if(tambah($_POST) > 0 ) {
	echo "
	<script> alert('Data Berhasil Ditambahkan');
	document.location.href = 'index.php';
	</script>
	";
} else {
	echo "
	<script> alert('Data Gagal Ditambahkan');
	document.location.href = 'index.php';
	</script>
	";
}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<style type="text/css">
		body{
			padding: 0px;
			margin: 0px;
			background-color: #e6e6e6;
			font-family: montserrat;
		}
		h1{
			margin-bottom: 5px;
			margin-left: 80px;
			font-size: 23px;

		}
		.box{
			margin: 80px;
			background-color:white;
			margin-right: 900px;
			position: center;
			padding-top: 10px;
			padding-bottom: 10px;
			border-radius: 5px;
			margin-top: 0px;
			box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.3);
		}
		.kanan{
			margin-bottom: 10px;
			font-family: montserrat;
		}
		.kirim{
			background-color: green;
			color: white;
			border-color: green;
			border-radius: 5px;
		} 
		.navbar{
			background: #1a1a1a;
			height: 37px;
			width: 100%;
		}
		.ul{
			line-height: 3px;
			float:left;
		}
		.li{
			display: inline-block;
			margin-left: 25px;
		}
		nav ul li a{
			text-decoration: none;
			color: white;
			padding-left: 10px;
			font-size: 15px;
			margin-left: 10px;
			padding: 9px 9px 9px 9px;
			text-transform: uppercase;
		}
		.active,a:hover{
			background: black;
			transition: .5s;
		}
		#active{
			background-color: black;
			padding: 9px 9px 9px 9px;
		}
	</style>
</head>
<body>
	<nav class="navbar">
	<ul class="ul">
		<li class="li">
			<a href="index.php">Home</a>
			<a id="active" href="tambah.php">Upload</a>
		</li>
	</ul>

</nav>
	<h1>Upload Gambar</h1>
	<form class="box" action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<input class="kanan" type="text" name="nama" placeholder="Nama" id="nama" required>
			</li>
			<li>
				<input class="kanan" type="text" name="judul" placeholder="Judul Gambar" id="judul" required>
			</li>
			<li>
				<input class="kanan" type="file" name="gambar" id="gambar" >
			</li>
				<button class="kirim" type="submit" name="submit">Upload</button>
		</ul>
	</form>
</body>
</html>