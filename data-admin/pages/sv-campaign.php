<?php 
session_start();
include_once '../lib/class-db.php';
include_once '../lib/class-ff.php';

$act=$ff->get("act");
if (!empty($act)) {
	switch ($act) {
		case 'ins':
				// $as=$ff->get("as");
				// if (empty($as)) {
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$sukses=$ff->upload("foto");
		$ff->alert($sukses);
		$q=$odb->ins("campaing(judul, deskripsi, nama_penerima, jumlahdonatur, kebutuhan_dana, terdanai, kekurangan, gambar)","'$judul','$deskripsi','$nama_penerima', '$jumlahdonatur', '$kebutuhan_dana', '$terdanai', '$kekurangan', '$sukses'");
		$ff->alert("data berhasil disimpan !!");
		
		$ff->redirect("admin.php");
		break;
		case 'up':
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$q=$odb->up("campaing","judul='$judul',deskripsi='$deskripsi', nama_penerima='$nama_penerima', jumlahdonatur='$jumlahdonatur', kebutuhan_dana='$kebutuhan_dana', kekurangan='$kekurangan', gambar='$sukses'where id='$id'");
		$ff->alert("data berhasil disimpan !!");

		$ff->redirect("admin.php");
		break;
		case 'del':
		$id=$ff->get("id");
		if (!empty($id)) {

			$q=$odb->del("campaing where id='$id'");
			$ff->alert("data berhasil dihapus !!");
			$ff->redirect("admin.php");
		}

		break;
		default:
		$ff->alert("tidak ada perubahan !!");
		//$ff->redirect("admin.php");
		break;
	}
}
?>