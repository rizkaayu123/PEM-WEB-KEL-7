<?php
// INCLUDE KONEKSI KE DATABASE
include_once("config.php");

if (isset($_POST['update'])) {

	// AMBIL ID DATA
	$id_cam = mysqli_real_escape_string($mysqli, $_POST['id_cam']);

	// AMBIL NAMA FILE FOTO SEBELUMNYA
	$data = mysqli_query($mysqli, "SELECT gambar FROM campaing WHERE id_cam='$id_cam'");
	$dataImage = mysqli_fetch_assoc($data);
	$oldImage = $dataImage['gambar'];

	// AMBIL DATA DATA DIDALAM INPUT
	$judul 		= mysqli_real_escape_string($mysqli, $_POST['judul']);
	$deskripsi 	= mysqli_real_escape_string($mysqli, $_POST['deskripsi']);
	$nama_penerima 	= mysqli_real_escape_string($mysqli, $_POST['nama_penerima']);
	$jumlahdonatur 	= mysqli_real_escape_string($mysqli, $_POST['jumlahdonatur']);
	$kebutuhan_dana = mysqli_real_escape_string($mysqli, $_POST['kebutuhan_dana']);
	$terdanai 	= mysqli_real_escape_string($mysqli, $_POST['terdanai']);
	$kekurangan 	= mysqli_real_escape_string($mysqli, $_POST['kekurangan']);
	$filename = $_FILES['newImage']['name'];

	// CEK DATA TIDAK BOLEH KOSONG
	if (empty($judul) || empty($deskripsi) || empty($nama_penerima) || empty($jumlahdonatur) || empty($kebutuhan_dana) || empty($terdanai) || empty($kekurangan) || empty($filename) ) {

			if (empty($judul)) {
				echo "<font color='red'>Kolom judul tidak boleh kosong.</font><br/>";
			}

			if (empty($deskripsi)) {
				echo "<font color='red'>Kolom deskripsi tidak boleh kosong.</font><br/>";
			}

			if (empty($nama_penerima)) {
				echo "<font color='red'>Kolom nama_penerima tidak boleh kosong.</font><br/>";
			}

			if (empty($jumlahdonatur)) {
				echo "<font color='red'>Kolom jumlahdonatur tidak boleh kosong.</font><br/>";
			}

			if (empty($kebutuhan_dana)) {
				echo "<font color='red'>Kolom kebutuhan_dana tidak boleh kosong.</font><br/>";
			}

			if (empty($terdanai)) {
				echo "<font color='red'>Kolom terdanai tidak boleh kosong.</font><br/>";
			}

			if (empty($kekurangan)) {
				echo "<font color='red'>Kolom kekurangan tidak boleh kosong.</font><br/>";
			}

			if (empty($filename)) {
				echo "<font color='red'>Kolom Gambar tidak boleh kosong.</font><br/>";
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

			// NAMA FILE FOTO + DATA YANG DI GANTI BARU DIMASUKAN
			$result = mysqli_query($mysqli, "UPDATE campaing SET judul='$judul',deskripsi='$deskripsi',nama_penerima='$nama_penerima',jumlahdonatur='$jumlahdonatur',kebutuhan_dana='$kebutuhan_dana',terdanai='$terdanai',kekurangan='$kekurangan',gambar='$filename' WHERE id_cam=$id_cam");
		}

		// MEMASUKAN DATA YANG DI UPDATE KECUALI GAMBAR
		$result = mysqli_query($mysqli, "UPDATE campaing SET judul='$judul',deskripsi='$deskripsi',nama_penerima='$nama_penerima',jumlahdonatur='$jumlahdonatur',kebutuhan_dana='$kebutuhan_dana',terdanai='$terdanai',kekurangan='$kekurangan' WHERE id_cam=$id_cam");
		}

		// REDIRECT KE HALAMAN INDEX.PHP
		header("Location: tampil_campaign.php");
	}
?>
<?php
// AMBIL ID DARI URL
$id_cam = $_GET['id_cam'];

// AMBIL DATA BERDASARKAN ID
$result = mysqli_query($mysqli, "SELECT * FROM campaing WHERE id_cam=$id_cam");

while ($res = mysqli_fetch_array($result)) {
	$judul	= $res['judul'];
	$deskripsi 	= $res['deskripsi'];
	$nama_penerima 	= $res['nama_penerima'];
	$jumlahdonatur	= $res['jumlahdonatur'];
	$kebutuhan_dana	= $res['kebutuhan_dana'];
	$terdanai	= $res['terdanai'];
	$kekurangan	= $res['kekurangan'];
	$image 	= $res['gambar'];
}
?>
<html>

<head>
	<title>Edit Data</title>
</head>

<body>
	<center>
		<a href="tampil_campaign.php">Home</a>
		<br /><br />

		<form name="form1" method="post" action="editcampaign.php" enctype="multipart/form-data">
			<table border="0">
				<tr>
					<td>Judul</td>
					<td><input type="text" name="judul" value="<?php echo $judul; ?>"></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td><input type="text" name="deskripsi" value="<?php echo $deskripsi; ?>"></td>
				</tr>
				<tr>
					<td>Nama Penerima</td>
					<td><input type="text" name="nama_penerima" value="<?php echo $nama_penerima; ?>"></td>
				</tr>
				<tr>
					<td>Kebutuhan Dana</td>
					<td><input type="text" name="kebutuhan_dana" value="<?php echo $kebutuhan_dana; ?>"></td>
				</tr>
				<tr>
					<td>Terdanai</td>
					<td><input type="text" name="terdanai" value="<?php echo $terdanai; ?>"></td>
				</tr>
				<tr>
					<td>Kekurangan</td>
					<td><input type="text" name="kekurangan" value="<?php echo $kekurangan; ?>"></td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td><img width="80" src="image/<?php echo $image ?>"></td>
					<td><input type="file" name="newImage"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id_cam" value=<?php echo $_GET['id_cam']; ?>></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
	</center>
</body>

</html>
