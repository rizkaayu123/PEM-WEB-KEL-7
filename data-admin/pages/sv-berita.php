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
		$q=$odb->ins("berita(desa, kecamatan, kota, alamat_lengkap, keterangan)","'$desa','$kecamatan','$kota','$alamat_lengkap','$keterangan'");
		$ff->alert("data berhasil disimpan !!");
		
		$ff->redirect("admin.php");
		break;
		case 'up':
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$q=$odb->up("tb_tempat","desa='$desa',kecamatan='$kecamatan',kota='$kota',alamat_lengkap='$alamat_lengkap',keterangan='$keterangan' where id_tempat='$id'");
		$ff->alert("data berhasil disimpan !!");

		$ff->redirect("admin.php");
		break;
		case 'del':
		$id=$ff->get("id");
		if (!empty($id)) {

			$q=$odb->del("tb_tempat where id_tempat='$id'");
			$ff->alert("data berhasil dihapus !!");
			$ff->redirect("admin.php");
		}

		break;
		default:
		$ff->alert("tidak ada perubahan !!");
		$ff->redirect("admin.php");
		break;
	}
}
?>