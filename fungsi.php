<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "proyek");

function query($query) { 
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$judul = htmlspecialchars($data["judul"]);
	
	// Upload gambar
	$gambar = upload();
	if (!$gambar ) {
		return false;
	}

		$query = "INSERT INTO galeri 
	VALUES
	('', '$nama', '$judul','$gambar') 
";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function upload() {
	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah ada gambar yang diupload 
	if ($error === 4 ) {
		echo "<script>
			alert('Pilih gambar terlebih dahulu');
			</script> 
		";
		return false;
	}

	// Cek yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namafile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
			alert('Yang di upload harus gambar');
			</script>";
			return false;
	}

	// Cek ukuran upload
	if ($ukuranfile > 2000000) {
		echo "<script>
			alert('Ukuran gambar terlalu besar! (harus < 2 Mb)');
			</script>";
			return false;
	}

	// Jika lolos pengecekan, gambar di upload
	// Generate nama gambar
	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'image/' . $namafilebaru);

	return $namafilebaru;
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM galeri WHERE id = $id");
	return mysqli_affected_rows($conn);
}

?>