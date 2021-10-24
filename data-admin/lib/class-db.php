<?php 
	class Db{
		var $db=null;
		function __construct()
		{
			try {
				$this->db=new PDO("mysql:host=localhost;dbname=donasi","root","");
				$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				die("koneksi gagal!".$e->getMessage());
			}
		}
		function q($q){
			$q=$this->db->prepare($q);
			$q->execute();
			return $q;
		}
		function select($t,$f="*"){
			$q=$this->db->prepare("select $f from $t");
			$q->execute();
			return $q;
		}
		function ins($t,$f){
			$q=$this->db->prepare("insert into $t values ($f)");
			$q->execute();
		}
		function up($t,$f){
			$q=$this->db->prepare("update $t set $f");
			$q->execute();
		}
		function del($t){
			$q=$this->db->prepare("delete from $t");
			$q->execute();
		}
		function nur($data){
			return $data->rowCount();
		}
		function last(){
			return $this->db->lastInsertId();
		}
		function sant($tipe){
			$data=filter_input_array($tipe, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
			return $data;
		}
	}
	$odb= new Db();
 ?>