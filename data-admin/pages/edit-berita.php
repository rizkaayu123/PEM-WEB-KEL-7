<?php 
include_once '../lib/class-db.php';
include_once '../lib/class-ff.php';
$id=$ff->get("id");
$q=$odb->select("berita where id='$id'");
$r=$q->fetch();
?>

<form action="sv-berita.php?act=up" method="post">
	<input type="hidden" name="id" value="<?=$r['id']?>">

	<div class="form-group">
		<label>Judul Berita :</label>
		<input type="text" name="judul" class="form-control" required="" value="<?=$r['judul']?>">
	</div>
	<div class="form-group">
		<label>Deskripsi :</label>
		<input type="text" name="text" class="form-control" value="<?=$r['text']?>">
	</div>
	<div class="form-group">
		<label>Tanggal :</label>
		<input type="date" name="date" id="date" class="form-control" value="<?=$r['date']?>">
	</div>
	<div class="form-group">
		<label>Gambar :</label>
		<input type="file" name="date" id="date" class="form-control" placeholder="Ulangi Password" value="<?=$r['date']?>">
	</div>
	
	<div class="form-group float-right">
		<button type="submit" name="submit" class="btn btn-success text-light"><i class="fa fa-save fa-lg"></i></button>

		<button type="reset" name="reset" class="btn btn-danger text-light"><i class="fa fa-refresh fa-lg" style="margin-left: 7px;"></i></button>
	</div>
</form>

