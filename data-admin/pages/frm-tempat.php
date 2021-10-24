<div class="modal fade" id="modal-frm-tempat" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content" role="document">
			<div class="modal-header bg-primary text-light">
				<table style="border:none;width: 100%">
					<tr>
						<td>
							<h3 class="modal-title">Tambah tempat</h3>
						</td>
						<td>
							<a href="#" class="pull-right" style="color: white" onclick="tfrmtempat();"><i class="fa fa-remove fa-lg"></i></a>
						</td>
					</tr>
				</table>

			</div>
			<div class="modal-body bg-light">
				<form action="sv-tempat.php?act=ins" method="post">
					<div class="form-group">
						<input type="text" name="desa" class="form-control" placeholder="Desa" required="">
					</div>
					<div class="form-group">
						<input type="text" name="kecamatan" id="pass1" class="form-control" placeholder="Kecamatan" required="">
					</div>
					<div class="form-group">
						<input type="text" name="kota" id="pass2" class="form-control" placeholder="Kota / Kabupaten" required="">
					</div>

					<div class="form-group">
						<textarea name="alamat_lengkap" class="form-control" placeholder="Alamat Lengkap"></textarea>

					</div>

					<div class="form-group">
						<textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>

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
