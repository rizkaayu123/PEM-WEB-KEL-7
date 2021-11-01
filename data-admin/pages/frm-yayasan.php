<div class="modal fade" id="modal-frm-user" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content" role="document">
			<div class="modal-header bg-primary text-light">
				<table style="border:none;width: 100%">
					<tr>
						<td>
							<h3 class="modal-title">Tambah Data Yayasan</h3>
						</td>
						<td>
							<a href="#" class="pull-right" style="color: white" onclick="tfrmuser();"><i class="fa fa-remove fa-lg"></i></a>
						</td>
					</tr>
				</table>

			</div>
			<div class="modal-body bg-light">
				<form action="sv-yayasan.php?act=ins" method="post">
					<div class="form-group">
						<label>Nama Yayasan :</label>
						<input type="text" name="nama_yayasan" class="form-control" placeholder="Masukan Nama Yayasan" required="">
					</div>
					<div class="form-group">
						<label>Deskripsi :</label>
						<input type="text" name="text" class="form-control" placeholder="Masukan Deskripsi" required="">
					</div>
					<div class="form-group">
						<label>Alamat :</label>
						<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Yayasan" required="">
					</div>
					<div class="form-group">
						<label>No Telepon :</label>
						<input type="text" id="text" name="notlp" class="form-control" placeholder="Masukan No Telepon" required="">
					</div>
					<div class="form-group">
						<label>Email :</label>
						<input type="text" name="email" class="form-control" placeholder="Masukan Email" required="">
					</div>
					<div class="form-group">
						<label>Kebutuhan :</label>
						<input type="text" name="kebutuhan" class="form-control" placeholder="Masukan Kebutuhan" required="">
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