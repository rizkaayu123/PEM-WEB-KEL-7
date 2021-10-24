<?php
// INCLUDE KONEKSI KE DATABASE
include_once("config.php");

// AMBIL DATA DARI DATABASE BERDASARKAN DATA TERAKHIR DI INPUT
$result = mysqli_query($mysqli, "SELECT * FROM berita ORDER BY id DESC");
?>

<html>

<head>
	<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
  
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
 
<title>WeTogether</title>
</head>

<body id="wrapper">
	<nav class='navbar navbar-expand-lg navbar-light bg-warning text-dark fixed-top" id="mainNav '>
    <div class="container">
        <a href="index.php" class="navbar-brand">HOME</a>
        <button class="navbar-toggler" type="button" data-togle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto pt-2 pb-2">
            <li class="nav-item">
                <a href="index.php" class="nav-link text-light">Home</a>
            </li>
            <li class="nav-item ml-4">
                <a href="logout.php" class="nav-link text-light"> Log Out </a>
            </li>
        </ul>
    </div>
</nav>
	<center>
	
		 <a href="add_berita.html" class="btn btn-primary" role="button">Tambah Data Berita</a>


		<table width='80%' border=0>

			<tr bgcolor='#CCCCCC'>
				<td>Judul</td>
				<td>Deskripsi</td>
				<td>Tanggal</td>
				<td>Gambar</td>
				<td collapse='2'>Update</td>
			</tr>
			<?php

			while ($res = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $res['judul'] . "</td>";
				echo "<td>" . $res['text'] . "</td>";
				echo "<td>" . $res['date'] . "</td>";
				echo "<td><img width='80' src='image/" . $res['gambar'] . "'</td>";
				echo "<td><a href=\"editberita.php?id=$res[id]\" class=\"btn btn-warning\" role=\"button\">Edit</a> 
				<a href=\"deleteberita.php?id=$res[id]\" class=\"btn btn-danger\" role=\"button\" onClick=\"return confirm('Kamu yakin untuk delete ini?')\">Delete</a>
				</td>";
			}
			?>
		</table>
	</center>
</body>

</html>
