<!DOCTYPE html>
<html>
<head>
 <?php include 'head.php'; ?>
 <script type="text/javascript" class="init">
    $(document).on( "click", '#tombolterima',function(e) {
        var _id = $(this).data('_id');
        $("#_id2").val(_id);
        });
    $(document).on( "click", '#tombolunblock',function(e) {
        var _id = $(this).data('_id');
        $("#_id3").val(_id);
        });
    $(document).on( "click", '#tombollihat',function(e) {
        var _id = $(this).data('_id');
        $("#_id1").val(_id);
        });


      </script>
</head>


 <?php include 'header.php' ; ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'side_bar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Travel Agent 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-address-book"></i> Travel Agent</a></li>
        <li class="active">Travel Agent Terdaftar </li>
      </ol>
    </section>    


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Travel Agent Blocked</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="T_A_Baru" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Travel</th>
                  <th>Instagram Travel</th>
                  <th>Nama Pendaftar</th>
                  <th>No HP</th>
                  <th>Provinsi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($contents as $key) {
                  if($key->flag_blocked==1){
                  echo "<tr> 
                  <td>".$key->travel_name." </td>
                  <td>".$key->medsoc_account." </td>
                  <td>".$key->travel_name." </td>
                  <td>".$key->office_phone_number." </td>
                  <td>".$key->province->province_name." </td>
                  
                  <td><button type='button' id='tombollihat' data-toggle='modal' data-target='#modallihat'
                    data-_id='".$key->_id."' class='btn btn-info btn-xs'>Lihat Trip</button>
                    <button type='button' id='tombolunblock' data-toggle='modal' data-_id='".$key->_id."' data-target='#modalunblock'
                          class='btn btn-danger btn-xs'> Unblock</button>
                    
                        </td>
                  </tr>";}
                }
                ;?>


                
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
<!-- Box -->

  </div>
<!-- modal lihat -->
<div class="modal fade" id="modallihat" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                
                <div class="modal-header">
                Lihat Travel Agent
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                <form method="post" action="<?php echo base_url('Admin_trv/lihat_new_provider'); ?>">
                <input type="hidden" name="_id" id="_id1">
                  <p>Apakah anda yakin?</p>
                </div>
                <div class="modal-footer">
                  <button id="yes" type="submit" class="btn btn-primary">Ya</button>
                  <button id="no" type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
                </form>
              </div>
            </div>
          </div>

<div class="modal fade" id="modalunblock" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                
                <div class="modal-header">
                Terima Travel Agent
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                <form method="post" action="<?php echo base_url('Admin_trv/block_provider');?>">
                <input type="hidden" name="_id" id="_id3">
                  <p>Apakah anda yakin?</p>
                </div>
                <div class="modal-footer">
                  <button id="yes" type="submit" class="btn btn-primary">Ya</button>
                  <button id="no" type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
                </form>
              </div>
            </div>
          </div>

 
 <?php include 'wrapper.php';?>
</body>
</html>
