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
		$q=$odb->ins("yayasan(nama_yayasan, text, alamat, notlp, email, kebutuhan)","'$nama_yayasan','$text','$alamat','$notlpn','$email','$kebutuhan'");
		$ff->alert("data berhasil disimpan !!");

		$post=$odb->sant(INPUT_POST);
		extract($post);
		$q=$odb->ins("campaing(judul, deskripsi, kategori_donasi, nama_penerima, kebutuhan_dana, terdanai)","'$judul','$deskripsi','$kategori_donasi','$nama_penerima','$kebutuhan_dana', '$terdanai'");
		
		$ff->redirect("admin.php");
		break;
		case 'up':
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$q=$odb->up("berita","judul='$judul',text='$text',gambar='$sukses'where id='$id'");
		$ff->alert("data berhasil disimpan !!");

		$ff->redirect("admin.php");
		break;
		case 'del':
		$id=$ff->get("id");
		if (!empty($id)) {

			$q=$odb->del("berita where id='$id'");
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