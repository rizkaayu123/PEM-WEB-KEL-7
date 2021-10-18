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
		$deskripsi = mysqli_real_escape_string($mysqli, $_POST['deskripsi']);
		$nama_penerima = mysqli_real_escape_string($mysqli, $_POST['nama_penerima']);
		$jumlahdonatur = mysqli_real_escape_string($mysqli, $_POST['jumlahdonatur']);
		$kebutuhan_dana = mysqli_real_escape_string($mysqli, $_POST['kebutuhan_dana']);
		$terdanai = mysqli_real_escape_string($mysqli, $_POST['terdanai']);
		$kekurangan = mysqli_real_escape_string($mysqli, $_POST['kekurangan']);
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
			$result = mysqli_query($mysqli, "INSERT INTO campaing(judul,deskripsi,nama_penerima,jumlahdonatur,kebutuhan_dana,terdanai,kekurangan,gambar) VALUES('$judul', '$deskripsi', '$nama_penerima','$jumlahdonatur','$kebutuhan_dana','$terdanai','$kekurangan', '$filename')");

			// MENAMPILKAN PESAN BERHASIL
			echo "<font color='green'>Data Berhasil ditambahkan.";
			echo "<br/><a href='indexadmin.php'>Lihat Hasilnya</a>";
		}
	}
	?>
</body>

</html>
