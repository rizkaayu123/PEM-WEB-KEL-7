<?php 
include_once '../lib/class-db.php';
include_once '../lib/class-ff.php';
$id=$ff->get("id");
$q=$odb->select("user where id_log='$id'");
$r=$q->fetch();
?>

<form action="sv-user.php?act=up" method="post">
	<input type="hidden" name="id" value="<?=$r['id_user']?>">
	<div class="row">
		<div class="form-group col-md-6">
			<label>Nama Depan</label>
			<input type="text" name="nama_depan" value="<?=$r['nama_depan']?>" class="form-control" placeholder="Nama Depan">
		</div>
		<div class="form-group col-md-6">
			<label>Nama Belakang</label>
			<input type="text" name="nama_belakang" value="<?=$r['nama_belakang']?>" class="form-control" placeholder="Nama Belakang">
		</div>
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" placeholder="Username" required="" value="<?=$r['username']?>">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" name="pass1" id="pass1" class="form-control" placeholder="Password">
	</div>
	<div class="form-group">
		<label>Ulangi Password</label>
		<p class="text-danger salah" style="display: none;">Password tidak sama!!</p>
		<input type="password" name="pass2" id="pass2" class="form-control" placeholder="Ulangi Password">
	</div>
	<div class="form-group">
		<select name="id_level" class="form-control select2" style="width: 100%;">
			<option value="">---Pilih---</option>
			<?php 
			$q1=$odb->select("tb_level");
			while ($r1=$q1->fetch()) {
				if ($r1['id_level']===$r['id_level']) {
					?>
					<option value="<?=$r1['id_level']?>" selected><?=$r1['nama_level']?></option>
					<?php
				}else{

					?>

					<option value="<?=$r1['id_level']?>"><?=$r1['nama_level']?></option>
					<?php
				}
			}
			?>
		</select>
	</div>
	<div class="form-group float-right">
		<button type="submit" name="submit" class="btn btn-success text-light"><i class="fa fa-save fa-lg"></i></button>

		<button type="reset" name="reset" class="btn btn-danger text-light"><i class="fa fa-refresh fa-lg" style="margin-left: 7px;"></i></button>
	</div>
</form>

<script type="text/javascript">
	$(function(){
		$("#pass2").keyup(function(){
			var pass1 = $("#pass1").val();
			var pass2 = $(this).val();
			if(pass1 != pass2)
			{
				$(".text-danger").removeAttr('style');
				

			}
			else
			{
				$(".text-danger").attr('style','display:none;');
			}

		});
	})
</script>	