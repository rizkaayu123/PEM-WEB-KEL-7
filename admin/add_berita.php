<html>

<head>
	<title>Tambah Data</title>
</head>

<body>
	<?php
	// INCLUDE KONEKSI KE DATABASE
	include_once("config.php");

	if (isset($_POST['Submit'])) {
		$judul = mysqli_real_escape_string($mysqli, $_POST['judul']);
		$text = mysqli_real_escape_string($mysqli, $_POST['text']);
		$date = mysqli_real_escape_string($mysqli, $_POST['date']);
		$filename = $_FILES['gambar']['name'];

		// CEK DATA TIDAK BOLEH KOSONG
		if (empty($judul) || empty($text) || empty($date) || empty($filename)) {

			if (empty($judul)) {
				echo "<font color='red'>Kolom judul tidak boleh kosong.</font><br/>";
			}

			if (empty($text)) {
				echo "<font color='red'>Kolom text tidak boleh kosong.</font><br/>";
			}

			if (empty($date)) {
				echo "<font color='red'>Kolom date tidak boleh kosong.</font><br/>";
			}

			if (empty($filename)) {
				echo "<font color='red'>Kolom Gambar tidak boleh kosong.</font><br/>";
			}

			// KEMBALI KE HALAMAN SEBELUMNYA
			echo "<br/><a href='javascript:self.history.back();'>Kembali</a>";
		} else {
			// JIKA SEMUANYA TIDAK KOSONG
			$filetmpname = $_FILES['gambar']['tmp_name'];

			// FOLDER DIMANA GAMBAR AKAN DI SIMPAN
			$folder = 'image/';
			// GAMBAR DI SIMPAN KE DALAM FOLDER
			move_uploaded_file($filetmpname, $folder . $filename);

			// MEMASUKAN DATA DATA + NAMA GAMBAR KE DALAM DATABASE
			$result = mysqli_query($mysqli, "INSERT INTO berita(judul,text,date,gambar) VALUES('$judul', '$text', '$date', '$filename')");

			// MENAMPILKAN PESAN BERHASIL
			echo "<font color='green'>Data Berhasil ditambahkan.";
			echo "<br/><a href='indexadmin.php'>Lihat Hasilnya</a>";
		}
	}
	?>
</body>

</html>
