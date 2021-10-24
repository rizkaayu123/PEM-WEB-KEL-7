<?php 

include_once '../lib/class-db.php';
include_once '../lib/class-ff.php';
?>
<section class="content-header">
  <h1>
   Data Camping
   <small>Data Galang Dana</small>
 </h1>

</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
        <div class="box-header">
          <h3 class="box-title pull-right"><button class="btn btn-success" onclick="ofrmtempat();"><i class="fa fa-user-plus"></i> Tambah Tempat</button></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="data" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>Menu</th>
                <th>Desa</th>
                <th>Kecamatan</th>
                <th>Kota / Kabupaten</th>
                <th>Alamat Lengkap</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
             <?php 
             $n=0;
             $q=$odb->select("tb_tempat");
             while ($r=$q->fetch()) {
               $n++;
               ?>
               <tr>
                 <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-primary edit-tempat" data-id="<?=$r['id_tempat']?>"><i class="fa fa-edit fa-md"></i></a>
                    <a href="sv-tempat.php?act=del&id=<?=$r['id_tempat']?>" class="btn btn-danger" data-id="<?=$r['id_tempat']?>"><i class="fa fa-trash fa-md"></i></a>
                  </div>
                </td>
                <td><?=$r['desa']?></td>
                <td><?=$r['kecamatan']?></td>
                <td><?=$r['kota']?></td>
                <td>Desa <?=$r['desa']?> Kec. <?=$r['kecamatan']?> <br> Kota/Kabupaten <?=$r['kota']?></td>
                <td><?=$r['keterangan']?></td>
              </tr>
              <?php 
            }
            ?>
          </tbody>
          <tfoot>
            <tr>
                <th>Menu</th>
                <th>Desa</th>
                <th>Kecamatan</th>
                <th>Kota</th>
                <th>Alamat Lengkap</th>
                <th>Keterangan</th>
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

<div class="modal fade" id="modal-edit-tempat" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" role="document">
      <div class="modal-header bg-primary">
        <table style="border:none;width: 100%">
          <tr>
            <td>
              <h3 class="modal-title">Edit tempat</h3>
            </td>
            <td>
              <a href="#" class="pull-right" style="color: white" onclick="closeedittempat();"><i class="fa fa-remove fa-lg"></i></a>
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

  function closeedittempat(){
    $("#modal-edit-tempat").modal("hide");
  }
  // function tdeltempat(){
  //   // sessionStorage.removeItem('id');
  //   $("#modal-del-tempat").modal("hide");
  // }
  // function odeltempat(){
    
  //   // var id_tempat = (this).attr("data-id");
  //   // '<%Session["id"] = "' + id_tempat + '";%>';
  //   // alert(<%=Session["id"]%>);
  //   $("#modal-del-tempat").modal("show");
  // }
  $(document).ready(function(){
    $(".edit-tempat").click(function(){

      $("#modal-edit-tempat").modal("show");
      var id=$(this).attr("data-id");
      // alert(id);
      $.ajax({
        type:"post",
        url:"edit-tempat.php?id="+id,
        success:function(data){
          $(".fetched-data").html(data);
        }
      })
    })
  })
</script>

<?php include_once 'frm-tempat.php'; ?>