<?php 
include_once '../lib/class-db.php';
include_once '../lib/class-ff.php';
$id=$ff->get("id");
$q=$odb->select("tb_tempat where id_tempat='$id'");
$r=$q->fetch();
?>

<form action="sv-tempat.php?act=up" method="post">
	<input type="hidden" name="id" value="<?=$r['id_tempat']?>">
	<div class="form-group">
		<label>Desa</label>
		<input type="text" name="desa" class="form-control" placeholder="Desa" required="" value="<?=$r['desa']?>">
	</div>
	<div class="form-group">
		<label>Kecamatan</label>
		<input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="<?=$r['kecamatan']?>">
	</div>
	<div class="form-group">
		<label>Kota</label>
		<input type="text" name="kota" class="form-control" placeholder="Kota / Kabupaten" value="<?=$r['kota']?>">
	</div>
	<div class="form-group">
		<label>Alamat Lengkap</label>
		<textarea name="alamat_lengkap" class="form-control" placeholder="Alamat Lengkap"><?=$r['alamat_lengkap']?></textarea>

	</div>

	<div class="form-group">
		<label>Keterangan</label>
		<textarea name="keterangan" class="form-control" placeholder="Keterangan"><?=$r['keterangan']?></textarea>

	</div>

	<div class="form-group float-right">
		<button type="submit" name="submit" class="btn btn-success text-light"><i class="fa fa-save fa-lg"></i></button>

		<button type="reset" name="reset" class="btn btn-danger text-light"><i class="fa fa-refresh fa-lg" style="margin-left: 7px;"></i></button>
	</div>
</form>