<?php
// INCLUDE KONEKSI KE DATABASE
include("config.php");

// AMBIL DATA ID DI URL
$id_cam = $_GET['id_cam'];

// AMBIL NAMA FILE FOTO SEBELUMNYA
$data = mysqli_query($mysqli, "SELECT gambar FROM campaing WHERE id_cam='$id_cam'");
$dataImage = mysqli_fetch_assoc($data);
$oldImage = $dataImage['gambar'];

// DELETE GAMBAR LAMA
$link = "image/" . $oldImage;
unlink($link);

// DELETE DATA DARI TABLE
$result = mysqli_query($mysqli, "DELETE FROM campaing WHERE id_cam=$id_cam");

// REDIRECT KE indesx.php
header("Location:tampil_campaign.php");