<?php 
	include_once '../lib/class-ff.php';
	session_start();
	unset($_SESSION['user']);
	unset($_SESSION['level']);
	$ff->redirect("login.php");
 ?>