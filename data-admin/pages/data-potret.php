<?php 
include_once '../lib/class-db.php';
include_once '../lib/class-ff.php';
?>
<section class="content-header">
  <h1>
   Data Potret
   <small>Data Potret Kegiatan</small>
 </h1>

</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
        <div class="box-header">
          <h3 class="box-title pull-right"><button class="btn btn-success" onclick="ofrmuser();"><i class="fa fa-user-plus"></i> Tambah Data Potret Kegiatan</button></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="data" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>Gambar</th>
                <th>Caption</th>
              </tr>
            </thead>
            <tbody>
        
                <?php 
                $n=0;
                $q=$odb->select("potret");
                while ($r=$q->fetch()) {
                $n++;
                ?>
                <tr>
                    <td>
                    <div class="btn-group">   
                    <a href="#" class="btn btn-warning edit-user" data-id="<?=$r['id_potret']?>"><i class="fa fa-edit fa-md"></i></a>
                    <a href="sv-potret.php?act=del&id=<?=$r['id_potret']?>" class="btn btn-danger" data-id="<?=$r['id_potret']?>"><i class="fa fa-trash fa-md"></i></a>
                    </div>
                    </td>
                    <td><?=$r['caption']?></td>
                    <td><img width='80' src="../image/<?=($r['potret'])?>"></td>
                </tr>
                <?php 
                }
                ?>
           
          </tbody>
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
              <h3 class="modal-title">Edit potret kegiatan</h3>
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
    $(".edit-potret").click(function(){

      $("#modal-edit-potret").modal("show");
      var id=$(this).attr("data-id");
      // alert(id);
      $.ajax({
        type:"post",
        url:"edit-potret.php?id="+id,
        success:function(data){
          $(".fetched-data").html(data);
        }
      })
    })
  })
</script>

<?php include_once 'frm-potret.php'; ?>