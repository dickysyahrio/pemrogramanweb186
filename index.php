<?php 
require 'fungsi.php';
$galeri = query("SELECT * FROM galeri");

?> 

<!DOCTYPE html>
<html>
<head>
	<title >Halaman Galeri</title>
	<style type="text/css">
		.tabel{
			padding: 20px;
			background-color: white;
			margin-top: 0px;
			margin-left: 100px;
			margin-right: 100px;
			margin-bottom: 10px;
			font-size: 17px;
			padding-left: 20px;
			text-align:center;
			/*box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.3);*/
		}
		.footer { 
			background-color:#1a1a1a;  
		    bottom: 0px; 
		    color: white; 
		    padding-top:5px; 
		    padding-bottom:5px; 
		    text-align:center; 
		    font-size:15px;    
		    line-height: 20px; 
		    margin-right: 100px;
		    margin-left: 100px;
		} 
		h1{
			text-align: center;
			margin-bottom: 0px;
			margin-top: 0px;
			margin-left: 100px;
			margin-right: 100px;
			padding-bottom: 5px;
			padding-top: 5px;
		}
		body{
			font-family: montserrat;
			margin: 0px;
			padding: 0px;
			background-color: #e6e6e6;
		}
		.navbar{
			background: #1a1a1a;
			height: 37px;
			margin-right: 100px;
			margin-left: 100px;
		}
		.ul{
			line-height: 3px;
			float:left;
		}
		.li{
			display: inline-block;
			margin-left: 0px;
		}
		nav ul li a{
			text-decoration: none;
			color: white;
			margin-left: 10px;
			margin-right: 10px;
			font-size: 15px;
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
		p {
			background-color: white;
			margin-left: 100px;
			margin-right: 100px;
			word-spacing: 5px;
			font-size: 20px;
			margin-bottom: 0px;
			margin-top: 0px;
		}
	</style>
</head>
<body>
	<nav class="navbar">
	<ul class="ul">
		<li class="li">
			<a id="active" href="index.php">Home</a>
			<a href="tambah.php">Upload</a>
		</li>
	</ul>

</nav>
<h1>VALENTINO ROSSI</h1>
<p ><br>Valentino Rossi lahir pada 16 Februari 1979 di Urbino, Italia. Lahir dari pasangan Graziano Rossi dan Stefania Palma dan mempunyai 2 orang saudara kandung yaitu Luca Marini dan Clara. Ketertarikan Rossi pada motoGP sudah terlihat pada waktu kecil. Rossi kerap memperlihatkan bakatnya sebagai juara motoGP dengan menjuarai pertandingan balap motor sewaktu kecil. Setelah ayahnya, Graziano Rossi, Rossi memulai balapan di Grand Prix pada 1996 untuk Aprilia di antara 125 cc kategori dan memenangkan Kejuaraan Dunia pertama tahun berikutnya. Dari sana, ia pindah ke kategori 250cc dengan Aprilia dan memenangkan 250cc Kejuaraan Dunia pada tahun 1999. Ia memenangkan Kejuaraan Dunia 500cc dengan Honda pada tahun 2001, Kejuaraan Dunia MotoGP (juga dengan Honda) pada tahun 2002 dan 2003, dan melanjutkan kemenangan beruntunnya dengan memenangkan kejuaraan dunia 2004 dan 2005, setelah meninggalkan Honda untuk bergabung dengan Yamaha, sebelum merebut kembali gelar pada 2008 dan mempertahankannya pada tahun 2009 dan 2010, ia kemudian pindah ke Ducati pada tahun 2011 setelah terjadi ketegangan dengan rekan setimnya. Namun, saat di Ducati ia sedikit mengalami kemunduran dalam hal performa dalam lintasan yang memaksanya kembali ke Yamaha pada tahun 2013 sampai sekarang. Berikut adalah beberapa foto VR46. <br>
<table class="tabel" border="0" cellspacing="0" cellpadding="5">
	<?php foreach ($galeri as $row) : ?>
<tr >
	<td><img src="image/<?php echo $row["gambar"] ; ?>" width="359.5"></td>
	<td><img src="image/<?php echo $row["gambar"] ; ?>" width="359.5"></td>
	<td><img src="image/<?php echo $row["gambar"] ; ?>" width="359.5"></td>
</tr>
<tr class="hapus">
			<td>
				<a href="hapus.php?id=<?php echo $row["id"] ; ?>" 
				onclick="return confirm('Yakin ingin dihapus?');">Hapus</a>
			</td>
			<td>
				<a href="hapus.php?id=<?php echo $row["id"] ; ?>" 
				onclick="return confirm('Yakin ingin dihapus?');">Hapus</a>
			</td>
			<td>
				<a href="hapus.php?id=<?php echo $row["id"] ; ?>" 
				onclick="return confirm('Yakin ingin dihapus?');">Hapus</a>
			</td>
		</tr>
<?php  ?>
	<?php endforeach; ?>
</table>

<footer class="footer">@Dicky Syahrio</footer>
</body>
</html>