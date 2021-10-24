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
		if (!empty($pass1)&&!empty($pass1)) {
			if ($pass1==$pass2) {
				$password=$pass1;
				$q=$odb->ins("tb_user(nama_depan, nama_belakang, username, password, id_level)","'$nama_depan','$nama_belakang','$username','$password','$level'");
				$ff->alert("data berhasil disimpan !!");
			}
		}else{
			$ff->alert("gagal menyimpan !");
		}

				// }else{
				// 	$post=$odb->sant(INPUT_POST);
				// 	extract($post);
				// 	if (!empty($pass1)&&!empty($pass1)) {
				// 		if ($pass1==$pass2) {
				// 			$password=md5($pass1);
				// 			$q=$odb->ins("tb_user(nama_user, username, password, id_level)","'$nama_user','$username','$password',5");
				// 			$ff->alert("data berhasil disimpan !!");
				// 			$id_user=$odb->last();
				// 			if (empty($_SESSION['user'])) {
				// 				$_SESSION['user']=$id_user;
				// 				$_SESSION['level']=5;
				// 			}
				// 			$ff->redirect("../index.php");
				// 		}
				// 	}else{
				// 		$ff->alert("gagal menyimpan !");
				// 	}
				// }

		$ff->redirect("admin.php");
		break;
		case 'up':
		$post=$odb->sant(INPUT_POST);
		extract($post);
		if (!empty($id)) {
			if (!empty($pass1)&&!empty($pass2)) {
				if ($pass1==$pass2) {
					$password=$pass1;
					// $ff->alert($id);
					// $ff->alert($nama_belakang);
					$q=$odb->up("tb_user","nama_depan='$nama_depan',nama_belakang='$nama_belakang',username='$username',password='$password',id_level='$id_level' where id_user='$id'");
					$ff->alert("data berhasil disimpan !!");
				}
			}else{
				$ff->alert("gagal menyimpan !");
			}
		}


		$ff->redirect("admin.php");
		break;
		case 'del':
		$id=$ff->get("id");
		if (!empty($id)) {

			$q=$odb->del("tb_user where id_user='$id'");
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