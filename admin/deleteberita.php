<?php
// INCLUDE KONEKSI KE DATABASE
include("config.php");

// AMBIL DATA ID DI URL
$id = $_GET['id'];

// AMBIL NAMA FILE FOTO SEBELUMNYA
$data = mysqli_query($mysqli, "SELECT gambar FROM berita WHERE id='$id'");
$dataImage = mysqli_fetch_assoc($data);
$oldImage = $dataImage['gambar'];

// DELETE GAMBAR LAMA
$link = "image/" . $oldImage;
unlink($link);

// DELETE DATA DARI TABLE
$result = mysqli_query($mysqli, "DELETE FROM berita WHERE id=$id");

// REDIRECT KE indesx.php
header("Location:indexadmin.php");
