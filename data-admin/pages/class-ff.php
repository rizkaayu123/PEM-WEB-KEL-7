<?php 
	class Fungsi{
		function get($p,$a=""){
			return isset($_GET["$p"])?$_GET["$p"]:"$a";
		}
		function post($p,$a=""){
			return isset($_POST["$p"])?$_POST["$p"]:"$a";
		}
		function sess($p,$a=""){
			return isset($_SESSION["$p"])?$_SESSION["$p"]:"$a";
		}
		function duit($duit){
			return "Rp.".number_format($duit);
		}
		function back(){
			echo "<script>history.back()</script>";
		}
		function redirect($url){

			echo "<script>location.href='$url'</script>";
		}
		function alert($a){

			echo "<script>alert('$a')</script>";
		}
		function upload($foto){
			$fname="";
			$fn=$_FILES[$foto]['name'];
			$fs=$_FILES[$foto]['size'];
			$ft=$_FILES[$foto]['type'];
			$fe=$_FILES[$foto]['error'];
			$tipe = array('images/jpeg','images/jpg','images/png');
			if (!in_array($ft, $tipe)) {
				echo("<script>Tipe foto tidak valid !! Tipe Harus berupa PNG,JPG</script>");
				$fname="";
			}
			elseif ($fe===0&&$ft>0) {
				$fname="VE_".date("Ymdhis").".jpg";
				$move=move_uploaded_file($_FILES[$foto]['tmp_name'], "../images/".$fname);
			}else
			{
				$fname="";
			}
			return $fname;
		}
		function hitung_umur($tanggal_lahir, $kondisi)
		{
			$lahir = new DateTime($tanggal_lahir);
			$today = new DateTime("today");
			if ($lahir > $today) {
				echo "error !! tanggal lahir lebih besar dari hari ini";
			}
			else{
				$y = $today->diff($lahir)->y;
				$m = $today->diff($lahir)->m;
				$d = $today->diff($lahir)->d;
				switch ($kondisi) {
					case 'tahun':
						echo $y;
						break;

					case 'bulan':
						echo $m;
						break;

					case 'hari':
						echo $d;
						break;
					default:
						echo $y . "tahun" . $m . "bulan" . $d . "hari";
						break;
				}
			}


		}
	}
	$ff=new Fungsi();
 ?>