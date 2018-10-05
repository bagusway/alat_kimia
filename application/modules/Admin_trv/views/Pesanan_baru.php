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
    
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Travel Agent Terdaftar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="T_A_Baru" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Pemesanan</th>
                  <th>Nama Pemesan</th>
                  <th>Trip</th>
                  <th>Nama Trip</th>
                  <th>Status Trip</th>
                  <th>Nama Travel</th>
                  <th>Berangkat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($new_booking as $key) {
                  
                  echo "<tr> 
                  <td>".$key->no_booking." </td>
                  <td>".$key->order_name." </td>
                  <td>".$key->id_type_trip->type_trip."</td>
                  <td>".$key->id_trip->trip_name."</td>
                  <td>".$key->id_statusTrip->status_trip."</td>
                  <td></td>
                  <td>".date('d-m-Y',strtotime($key->startDate_trip))."</td> 
                  <td><button type='button' id='tombollihat' data-toggle='modal' data-target='#modallihat'
                    data-_id='".$key->_id."' class='btn btn-info btn-xs'>Lihat</button>
                    <button type='button' id='tombolblock' data-toggle='modal' data-_id='".$key->_id."' data-target='#modalblock'
                          class='btn btn-success btn-xs'> Ubah</button>
                    <button type='button' id='tombolhapus' data-toggle='modal' data-_id='".$key->_id."' data-target='#modalhapus'
                          class='btn btn-danger btn-xs'> Hapus</button>
                        </td>
                  </tr>";
                }
                ;?>


                
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
   
  </div>



 
 <?php include 'wrapper.php';?>
</body>
</html>
