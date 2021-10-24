<?php 
session_start();
include_once '../lib/class-db.php';
include_once '../lib/class-ff.php';

if (isset($_SESSION['user'])) {
	$ff->redirect("../../index.php");
}


$post=$odb->sant(INPUT_POST);
extract($post);
	// $password=md5($pass);
$q=$odb->select("user where username='$username' and password='$password'");
$qnur=$odb->nur($q);
if ($qnur>0) {
	$r=$q->fetch();
	$_SESSION['user']=$r['id_log'];
	$_SESSION['level']=$r['level'];
	$ff->alert("Login Berhasil ! Selamat Datang");
	if($r['id_level']==1){
		$ff->redirect("admin.php");
	}
	else{
		$ff->redirect("../../indexuser.php");
	}
}
else{
	$ff->redirect("login.php?err=2");
}

	// $ff->redirect("login.php");
?>