<div class="modal fade" id="modal-frm-user" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content" role="document">
			<div class="modal-header bg-primary text-light">
				<table style="border:none;width: 100%">
					<tr>
						<td>
							<h3 class="modal-title">Tambah user</h3>
						</td>
						<td>
							<a href="#" class="pull-right" style="color: white" onclick="tfrmuser();"><i class="fa fa-remove fa-lg"></i></a>
						</td>
					</tr>
				</table>

			</div>
			<div class="modal-body bg-light">
				<form action="sv-user.php?act=ins" method="post">
					<div class="row">
						<div class="form-group col-md-6">
							<label>Nama Lengkap</label>
							<input type="text" name="nama_lengkap" value="<?=$r['nama_lengkap']?>" class="form-control" placeholder="Nama Lengkap">
						</div>
					</div>
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Username" required="">
					</div>
					<div class="form-group">
						<input type="password" name="pass1" id="pass1" class="form-control" placeholder="Password" required="">
					</div>
					<div class="form-group">
						<p class="text-danger salah" style="display: none;">Password tidak sama!!</p>
						<input type="password" name="pass2" id="pass2" class="form-control" placeholder="Password" required="">
					</div>
					<div class="form-group">
						<select name="level" class="form-control select2" required="" style="width: 100%;">
							<option value="">---Pilih---</option>
							<?php 
							$q=$odb->select("level");
							while ($r=$q->fetch()) {
								?>
								
								<option value="<?=$r['id_level']?>"><?=$r['nama_level']?></option>
								<?php
							}
							?>
						</select>
					</div>
					<div class="form-group float-right">
						<button type="submit" name="submit" class="btn btn-success text-light" id="submit"><i class="fa fa-save fa-lg"></i></button>
						
						<button type="reset" name="reset" class="btn btn-danger text-light"><i class="fa fa-refresh fa-lg" style="margin-left: 7px;"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
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