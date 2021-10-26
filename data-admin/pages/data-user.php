<?php 

include_once '../lib/class-db.php';
include_once '../lib/class-ff.php';
?>
<section class="content-header">
  <h1>
   Tabel User
   <small>Data dari seluruh user yang terdaftar</small>
 </h1>

</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
        <div class="box-header">
          <h3 class="box-title pull-right"><button class="btn btn-success" onclick="ofrmuser();"><i class="fa fa-user-plus"></i> Tambah Data User</button></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="data" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>Menu</th>
                <td>Nama Lengkap</td>
                <td>Alamat</td>
                <td>Jenis Kelamin</td>
                <td>Tempat Lahir</td>
                <td>Tanggal Lahir</td>
                <td>Telepon</td>
                <td>Email</td>
                <td>Username</td>
                <td>Kode</td>
                <td>Level</td>
              </tr>
            </thead>
            <tbody>
             <?php 
             $n=0;
             $q=$odb->select("user");
             while ($r=$q->fetch()) {
               $n++;
               ?>
               <tr>
                 <td>
                  <div class="btn-group">
                    <a href="#" class="btn btn-warning edit-user" data-id="<?=$r['id_log']?>"><i class="fa fa-edit fa-md"></i></a>
                    <a href="sv-user.php?act=del&id=<?=$r['id_log']?>" class="btn btn-danger" data-id="<?=$r['id_log']?>"><i class="fa fa-trash fa-md"></i></a>
                  </div>
                </td>
                <td><?=$r['nama_lengkap']?></td>
                <td><?=$r['alamat']?></td>
                <td><?=$r['jenis_kelamin']?></td>
                <td><?=$r['tempat_lahir']?></td>
                <td><?=$r['tanggal_lahir']?></td>
                <td><?=$r['no_tlpn']?></td>
                <td><?=$r['email']?></td>
                <td><?=$r['username']?></td>
                <td><?php if($r['kode']==0){echo "Tidak Ada";}else{echo $r['kode'];}?></td>
                <td>
                  <?php 
                  switch ($r['level']) {
                    case 1:
                    echo "admin";
                    break;
                    case 2:
                    echo "Donatur";
                    break;
                    default:
                          # code...
                    break;
                  }
                  ?>
                </td>
              </tr>
              <?php 
            }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th>Menu</th>
              <th>Nama lengkap</th>
              <th>Username</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>Telpon</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal Lahir</th>
              <th>Level</th>
              <th>Kode</th>
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

<div class="modal fade" id="modal-edit-user" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" role="document">
      <div class="modal-header bg-primary">
        <table style="border:none;width: 100%">
          <tr>
            <td>
              <h3 class="modal-title">Edit user</h3>
            </td>
            <td>
              <a href="#" class="pull-right" style="color: white" onclick="closeedituser();"><i class="fa fa-remove fa-lg"></i></a>
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

  function closeedituser(){
    $("#modal-edit-user").modal("hide");
  }
  // function tdeluser(){
  //   // sessionStorage.removeItem('id');
  //   $("#modal-del-user").modal("hide");
  // }
  // function odeluser(){
    
  //   // var id_user = (this).attr("data-id");
  //   // '<%Session["id"] = "' + id_user + '";%>';
  //   // alert(<%=Session["id"]%>);
  //   $("#modal-del-user").modal("show");
  // }
  $(document).ready(function(){
    $(".edit-user").click(function(){

      $("#modal-edit-user").modal("show");
      var id=$(this).attr("data-id");
      // alert(id);
      $.ajax({
        type:"post",
        url:"edit-user.php?id="+id,
        success:function(data){
          $(".fetched-data").html(data);
        }
      })
    })
  })
</script>
<?php include_once 'frm-user.php'; ?>