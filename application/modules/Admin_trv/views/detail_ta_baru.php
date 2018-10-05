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
        Travel Agent Baru
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-address-book"></i> Travel Agent</a></li>
        <li class="active">Travel Agent Baru</li>
      </ol>
    </section>    


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Travel Agent Baru</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="T_A_Baru" class="table table-bordered table-striped">
            </div>
            <!-- /.box-body -->


            <div class="row">
                    <div class="col-md-12 wrap-content">
    
                       <div class="row">
                        <div class="profile-img ">
                            <img class="img-round" src="<?php echo $new_provider->logo ;?>" alt=""/>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-md-10 label-tittle">Nama</div>
                          <span class="col-md-5 bold"> <span class="normal">:</span> <?php echo $new_provider->travel_name ;?></span>
                        </div>
                        <div class="row">
                          <div class="col-md-10 label-tittle">Slogan</div>
                          <span class="col-md-5 bold"><span class="normal">:</span> <?php echo $new_provider->slogan ;?></span>
                        </div>
                        <div class="row">
                          <div class="col-md-10 label-tittle">Deskripsi</div>
                          <span class="col-md-5 bold"><span class="normal">:</span> <?php echo $new_provider->description ;?></span>
                        </div>
                        <div class="row">
                          <div class="col-md-10 label-tittle">Alamat</div>
                          <span class="col-md-5 bold"><span class="normal">:</span><?php echo $new_provider->office_address ;?></span>
                        </div>
                        <div class="row">
                          <div class="col-md-10 label-tittle">Provinsi</div>
                          <span class="col-md-5 bold"><span class="normal">: </span><?php echo $new_provider->province->province_name ;?></span>
                        </div>
                        <div class="row">
                          <div class="col-md-10 label-tittle">Media Sosial</div>
                          <span class="col-md-5 bold"><span class="normal">: </span><?php echo $new_provider->medsoc_account ;?></span>
                        </div>
                        <div class="row">
                          <div class="col-md-10 label-tittle">No.HP</div>
                          <span class="col-md-5 bold"><span class="normal">: </span> <?php echo $new_provider->office_phone_number ;?></span>
                        </div>
                        <div class="row">
                          <div class="col-md-10 label-tittle">Domain</div>
                          <span class="col-md-5 bold"> <span class="normal">: </span><?php echo $new_provider->domain ;?></span>
                        </div>
                        <div class="row">
                          <div class="col-md-7 label-tittle">Saldo</div>
                          <span class="col-md-5 bold"> <span class="normal">: </span><?php echo $new_provider->balance ;?></span>
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
