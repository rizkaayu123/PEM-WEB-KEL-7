<div class="modal fade" id="modal-frm-user" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content" role="document">
			<div class="modal-header bg-primary text-light">
				<table style="border:none;width: 100%">
					<tr>
						<td>
							<h3 class="modal-title">Tambah berita</h3>
						</td>
						<td>
							<a href="#" class="pull-right" style="color: white" onclick="tfrmberita();"><i class="fa fa-remove fa-lg"></i></a>
						</td>
					</tr>
				</table>

			</div>
			<div class="modal-body bg-light">
				<form action="sv-berita.php?act=ins" method="post">
					<div class="row">
					<div class="form-group">
						<label>Judul Berita:</label>
						<input type="text" name="judul" class="form-control" placeholder="Masukan Judul Berita" required />

					</div>
					<div class="form-group">
						<label>Diskripsi:</label>
						<textarea type="text" name="text" class="form-control" rows="5" placeholder="Masukan Deskripsi Berita" required></textarea>

					</div>
					<div class="form-group">
						<label>Tanggal:</label>
						<input type="text" name="date" id="date">
						
					<div class="form-group">
						<label>Gambar:</label>
						<input type="file" name="gambar" required/>
						<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
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