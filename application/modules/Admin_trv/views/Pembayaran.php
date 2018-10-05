<!DOCTYPE html>
<html>
<head>
 <?php include 'head.php'; ?>
  <script type="text/javascript" class="init">
    $(document).on( "click", '#tombolterima',function(e) {
        var _id = $(this).data('_id');
        $("#_id2").val(_id);
        });
    $(document).on( "click", '#tomboltolak',function(e) {
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
        Pemesanan 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-address-book"></i> Pemesanan</a></li>
        <li class="active">Pembayaran </li>
      </ol>
    </section> 
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pembayaran</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<table id="T_A_Baru" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Pemesanan</th>
                  <th>Total Bayar</th>
                  <th>Nama Pemesan</th>
                  <th>Metode Pembayaran</th>
                  <th>Harga</th>
                  <th>Tanggal Bayar</th>
                  <th>Status Bayar</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php 
                	foreach ($payment as $key) {
                		if($key->id_statusPayment->payment_status == 'Sudah Dibayar'){
                		echo"
                		<tr>
                		<td>".$key->no_booking."</td>
                		<td>".$key->coded_amount."</td>
                		<td>".$key->order_name."</td>
                		<td>".$key->id_typePayment->type_payment."</td>
                		<td>".$key->coded_amount."</td>
                		<td>".date('d-m-Y',strtotime($key->date_pay))."</td>
                		<td>".$key->id_statusPayment->payment_status."</td>
                		<td>
                			<button style='align-items: center;'id='tombollihat' data-toggle='modal' data-target='#modallihat' data-_id='".$key->_id."' class='btn-info btn-xs'>Lihat </button> </td>
                		</tr>";
                		}
                		else{
                			echo"
                		<tr>
                		<td>".$key->no_booking."</td>
                		<td>".$key->coded_amount."</td>
                		<td>".$key->order_name."</td>
                		<td>".$key->id_typePayment->type_payment."</td>
                		<td>".$key->coded_amount."</td>
                		<td>".date('d-m-Y',strtotime($key->date_pay))."</td>
                		<td>".$key->id_statusPayment->payment_status."</td>
                		<td>
                			<button style='margin-right:10px;' id='tombollihat' data-toggle='modal' data-target='#modallihat' data-_id='".$key->_id."' class='btn-info btn-xs'>Lihat </button>
                			<button style='margin-right:10px;' id='tombolterima' data-toggle='modal' data-_id='".$key->_id."' data-target='#modalterima'  class='btn-success btn-xs'>Terima </button>
                		 </td></tr>";
                		}
                		
                	}
                	?>
                </tbody>
            </table>
            </div>
   </div>
<!-- modal lihat -->
<div class="modal fade" id="modallihat" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                
                <div class="modal-header">
                Lihat Detail pemesanan
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                <form method="post" action="<?php echo base_url('Admin_trv/detail_booking'); ?>">
                <input type="text" name="_id" id="_id1">
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


<!-- modal terima -->

<div class="modal fade" id="modalterima" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                
                <div class="modal-header">
                Terima Booking
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                <form method="post" action="<?php echo base_url('Admin_trv/acc_payment_booking'); ?>">
                <input type="text" name="_id" id="_id2">
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


  </div>



 
 <?php include 'wrapper.php';?>
</body>
</html>
