<?php
// INCLUDE KONEKSI KE DATABASE
include_once("config.php");

if (isset($_POST['update'])) {

	// AMBIL ID DATA
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);

	// AMBIL NAMA FILE FOTO SEBELUMNYA
	$data = mysqli_query($mysqli, "SELECT gambar FROM berita WHERE id='$id'");
	$dataImage = mysqli_fetch_assoc($data);
	$oldImage = $dataImage['gambar'];

	// AMBIL DATA DATA DIDALAM INPUT
	$judul 		= mysqli_real_escape_string($mysqli, $_POST['judul']);
	$text 		= mysqli_real_escape_string($mysqli, $_POST['text']);
	$date 		= mysqli_real_escape_string($mysqli, $_POST['date']);
	$filename = $_FILES['newImage']['name'];

	// CEK DATA TIDAK BOLEH KOSONG
	if (empty($judul) || empty($text) || empty($date)) {

		if (empty($judul)) {
			echo "<font color='red'>Kolom Nama tidak boleh kosong.</font><br/>";
		}

		if (empty($text)) {
			echo "<font color='red'>Kolom Umur tidak boleh kosong.</font><br/>";
		}

		if (empty($date)) {
			echo "<font color='red'>Kolom Email tidak boleh kosong.</font><br/>";
		}
	} else {

		// JIKA FOTO DI GANTI
		if (!empty($filename)) {
			$filetmpname = $_FILES['newImage']['tmp_name'];
			$folder = "image/";

			// GAMBAR LAMA DI DELETE
			unlink($folder . $oldImage) or die("GAGAL");

			// GAMBAR BARU DI MASUKAN KE FOLDER
			move_uploaded_file($filetmpname, $folder . $filename);

			// NAMA FILE FOTO + DATA YANG DI GANTIBARU DIMASUKAN
			$result = mysqli_query($mysqli, "UPDATE berita SET judul='$judul',text='$text',date='$date',gambar='$filename' WHERE id=$id");
		}

		// MEMASUKAN DATA YANG DI UPDATE KECUALI GAMBAR
		$result = mysqli_query($mysqli, "UPDATE berita SET  judul='$judul',text='$text',date='$date' WHERE id=$id");

		// REDIRECT KE HALAMAN INDEX.PHP
		header("Location: indexuser.php");
	}
}
?>
<?php
// AMBIL ID DARI URL
$id = $_GET['id'];

// AMBIL DATA BERDASARKAN ID
$result = mysqli_query($mysqli, "SELECT * FROM berita WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
	$judul	= $res['judul'];
	$text 	= $res['text'];
	$date 	= $res['date'];
	$image 	= $res['gambar'];
}
?>
<html>

<head>
	<title>Edit Data</title>
</head>

<body>
	<center>
		<a href="index.php">Home</a>
		<br /><br />

		<form name="form1" method="post" action="edit.php" enctype="multipart/form-data">
			<table border="0">
				<tr>
					<td>Judul</td>
					<td><input type="text" name="judul" value="<?php echo $judul; ?>"></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td><input type="text" name="text" value="<?php echo $text ?>"></td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td><input type="text" name="date" value="<?php echo $date; ?>"></td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td><img width="80" src="image/<?php echo $image ?>"></td>
					<td><input type="file" name="newImage"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
	</center>
</body>

</html>
