<!DOCTYPE html>
<html>
<head>
 <?php include 'head.php'; ?>

</head>


 <?php include 'header.php' ; ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'side_bar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Detail Pemesanan
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-address-book"></i> Pemesanan</a></li>
        <li><a href="<?php echo base_url('Admin_trv/Pembayaran');?>">Pembayaran</a></li>
        <li class="active">Detail Pembayaran</li>
      </ol>
    </section>    


          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $payment->no_booking ;?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="T_A_Baru" class="table table-bordered table-striped">
            </div>
            <!-- /.box-body -->


            <div class="row">
                    <div class="col-md-12 wrap-content">
    
                      <!--  <div class="row">
                        <div class="profile-img ">
                            <img class="img-round" src="<?php echo $new_provider->logo ;?>" alt=""/>
                        </div>
                        </div> -->
                        <div class="row">
                          <div class="col-md-10 label-tittle">Total Bayar</div>
                          <span class="col-md-5 bold"> <span class="normal">:</span>Rp. <?php echo $payment->coded_amount ;?></span>
                        </div>
                        <div class="row">
                          <div class="col-md-10 label-tittle">Nama Pemesan</div>
                          <span class="col-md-5 bold"><span class="normal">:</span> <?php echo $payment->order_name ;?></span>
                        </div>
                        <div class="row">
                          <div class="col-md-10 label-tittle">Harga</div>
                          <span class="col-md-5 bold"><span class="normal">:</span> <?php echo $payment->coded_amount ;?></span>
                        </div>
                        <div class="row">
                          <div class="col-md-10 label-tittle">Tanggal Bayar</div>
                          <span class="col-md-5 bold"><span class="normal">:</span><?php echo $payment->date_pay ;?></span>
                        </div>
                        <div class="row">
                          <div class="col-md-10 label-tittle">Status Bayar</div>
                          <span class="col-md-5 bold"><span class="normal">: </span><?php echo $payment->id_statusPayment->payment_status;?></span>
                        </div>
                         
                    </div>
                </div>
              </div>
          </div>
<!-- Box -->

  </div>


 <?php include 'wrapper.php';?>

 <style type="text/css">
   
   .img-round {
    border-radius:50%;
    width: 150px;
    height: 150px;
    margin-bottom: 20px;

   }

   .wrap-content {
    width: 100%;
    padding-left: 50px;

   }

   .label-tittle{
    display: inline-block;
    width: 115px;
   }

   .bold{
    font-weight: bold;
    margin-left: -10px;
   }

   .normal{
    font-weight: normal;
   }
 </style>
</body>
</html>
