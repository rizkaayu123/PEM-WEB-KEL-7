<?php 

include_once '../lib/class-db.php';
include_once '../lib/class-ff.php';
?>
<section class="content-header">
  <h1>
   Data Donatur
   <small>Data dari seluruh donatur terdaftar</small>
 </h1>

</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
        <div class="box-header">
          <h3 class="box-title pull-right"><button class="btn btn-success" onclick="ofrmkelompok();"><i class="fa fa-user-plus"></i> Tambah kelompok</button></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="data" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>Menu</th>
                <th>Nama</th>
                <th>Ketua</th>
                <th>Dosen Pendamping</th>
                <th>Jumlah Maximum</th>
                <th>Jumlah Saat Ini</th>
                <th>Alamat Lengkap</th>
                <th>Tanggal Berangkat</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
             <?php 
             $n=0;
             $q=$odb->select("tb_kelompok");
             while ($r=$q->fetch()) {
               $n++;
               ?>
               <tr>
                 <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-primary edit-kelompok" data-id="<?=$r['id_kelompok']?>"><i class="fa fa-edit fa-md"></i></a>
                    <a href="sv-kelompok.php?act=del&id=<?=$r['id_kelompok']?>" class="btn btn-danger" data-id="<?=$r['id_kelompok']?>"><i class="fa fa-trash fa-md"></i></a>
                  </div>
                </td>
                <td><?=$r['nama']?></td>
                <td><?=$r['id_ketua']?></td>
                <td><?=$r['id_dosen_pendamping']?></td>
                <td><?=$r['jumlah_max']?></td>
                <td><?=$r['jumlah_sekarang']?></td>
                <td>Desa <?=$r['desa']?> Kec. <?=$r['kecamatan']?> <br> Kota/Kabupaten <?=$r['kota']?></td>
                <td><?=$r['tanggal_berangkat']?></td>
                <td><?=$r['tanggal_kembali']?></td>
                <td><?=$r['status']?></td>
              </tr>
              <?php 
            }
            ?>
          </tbody>
          <tfoot>
            <tr>
                <th>Menu</th>
                <th>Nama</th>
                <th>Ketua</th>
                <th>Dosen Pendamping</th>
                <th>Jumlah Maximum</th>
                <th>Jumlah Saat Ini</th>
                <th>Alamat Lengkap</th>
                <th>Tanggal Berangkat</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
  </div>	
</div>
</section>
<script>
  $(function () {
    $('#data').DataTable({
      'responsive'  : true,
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

<div class="modal fade" id="modal-edit-kelompok" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" role="document">
      <div class="modal-header bg-primary">
        <table style="border:none;width: 100%">
          <tr>
            <td>
              <h3 class="modal-title">Edit kelompok</h3>
            </td>
            <td>
              <a href="#" class="pull-right" style="color: white" onclick="closeeditkelompok();"><i class="fa fa-remove fa-lg"></i></a>
            </td>
          </tr>
        </table>
        
      </div>
      <div class="modal-body bg-light">
        <div class="fetched-data">

        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  function closeeditkelompok(){
    $("#modal-edit-kelompok").modal("hide");
  }
  // function tdelkelompok(){
  //   // sessionStorage.removeItem('id');
  //   $("#modal-del-kelompok").modal("hide");
  // }
  // function odelkelompok(){
    
  //   // var id_kelompok = (this).attr("data-id");
  //   // '<%Session["id"] = "' + id_kelompok + '";%>';
  //   // alert(<%=Session["id"]%>);
  //   $("#modal-del-kelompok").modal("show");
  // }
  $(document).ready(function(){
    $(".edit-kelompok").click(function(){

      $("#modal-edit-kelompok").modal("show");
      var id=$(this).attr("data-id");
      // alert(id);
      $.ajax({
        type:"post",
        url:"edit-kelompok.php?id="+id,
        success:function(data){
          $(".fetched-data").html(data);
        }
      })
    })
  })
</script>

<?php include_once 'frm-kelompok.php'; ?>