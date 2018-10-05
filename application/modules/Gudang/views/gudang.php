<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Laboratory Assesment Tool</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url().'assets/vendor/font-awesome/css/font-awesome.min.css';?>" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.css';?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'assets/css/sb-admin.css';?>" rel="stylesheet">

    <!-- datepicker -->
    <link href="<?php echo base_url().'assets/styles/glDatePicker.default.css';?>" rel="stylesheet" type="text/css">

    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/jquery-birthday-picker.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="glDatePicker.min.js"></script>

    <script type="text/javascript">
        $(window).load(function()
        {
            $('#mydate').glDatePicker();
        });
    </script>

    <script type="text/javascript" class="init">
    $(document).ready(function() {
          var table = $('#dataTable').DataTable( {
              //scrollY:        "300px",
              scrollX:        true,
              scrollCollapse: true,
              //paging:         false,
              fixedColumns:   {
                  leftColumns: 2
              }
              
          } );
          $('#dataTable tbody').on( 'click', 'tr', function () {
              if ( $(this).hasClass('selected') ) {
                  $(this).removeClass('selected');
              }
              else {
                  table.$('tr.selected').removeClass('selected');
                  $(this).addClass('selected');
              }
          } );
 
          $('#button').click( function () {
              table.row('.selected').remove().draw( false );
          } );
    } );
     $('.datepicker').datepicker()
     $(document).ready(function() {
        $( "#datepicker" ).datepicker({
            format: 'mm/dd/yyyy'
        });
      });
    </script>
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>

    <script type="text/javascript">
        jQuery(function ($) {
            $("#exportButton").click(function () {
                // parse the HTML table element having an id=exportTable
                var dataSource = shield.DataSource.create({
                    data: "#dataTable",
                    schema: {
                        type: "table",
                        fields: {
                            Kode: { type: String },
                            Nama: { type: String },
                            Tanggal: { type: Date },
                            Unit: { type: Number },
                            Harga: { type: Number },
                            Total: { type: Number}
                            Kategori: { type: String },
                            Jenis: { type: String },
                            Masa: { type: String },
                            Susuttahun: { type: String },
                            Susutbulan: { type: String },
                            Nilai: { type: String },
                            Status: { type: String },
                        }
                    }
                });

                // when parsing is done, export the data to Excel
                dataSource.read().then(function (data) {
                    new shield.exp.OOXMLWorkbook({
                        author: "SPS",
                        worksheets: [
                            {
                                name: "Data Barang",
                                rows: [
                                    {
                                        cells: [
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: String,
                                                value: "Kode Barang"
                                            },
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: String,
                                                value: "Nama Barang"
                                            },
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: Date,
                                                value: "Tanggal masuk"
                                            }
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: Number,
                                                value: "Unit"
                                            }
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: Number,
                                                value: "Harga awal"
                                            }
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: Number,
                                                value: "Total Harga"
                                            }
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: String,
                                                value: "Kategori"
                                            },
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: String,
                                                value: "Jenis Aktiva"
                                            },
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: String,
                                                value: "Masa Manfaat"
                                            }
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: String,
                                                value: "Beban Penyusutan/tahun"
                                            }
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: String,
                                                value: "Beban Penyusutan/bulan"
                                            }
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: String,
                                                value: "Nilai Buku"
                                            }
                                            {
                                                style: {
                                                    bold: true
                                                },
                                                type: String,
                                                value: "Status"
                                            }
                                        ]
                                    }
                                ].concat($.map(data, function(item) {
                                    return {
                                        cells: [
                                            { type: String, value: item.Kode },
                                            { type: String, value: item.Nama },
                                            { type: Date, value: item.Tanggal },
                                            { type: Number, value: item.Unit },
                                            { type: Number, value: item.Harga },
                                            { type: Number, value: item.Total },
                                            { type: String, value: item.Kategori },
                                            { type: String, value: item.Jenis },
                                            { type: String, value: item.Masa },
                                            { type: String, value: item.Susuttahun },
                                            { type: String, value: item.Susutbulan },
                                            { type: String, value: item.Nilai },
                                            { type: String, value: item.Status }
                                        ]
                                    };
                                }))
                            }
                        ]
                    }).saveAs({
                        fileName: "Data Barang"
                    });
                });
            });
        });
    </script>

    <style>
        #exportButton, #ubah, #hapus, #tambah, #simpan {
            border-radius: 0;
        }
    </style>
    <style type="text/css">
      .zui-table {
          border: none;
          border-right: solid 1px #007bff;
          border-collapse: separate;
          border-radius: 0.25rem;
          border-spacing: 0;
          font: normal 13px Arial, sans-serif;
      }
      .zui-table thead th {
          background-color: #007bff;
          border: none;
          color: #fff;
          padding: 10px;
          text-align: left;
          /*text-shadow: 1px 1px 1px #fff;*/
          white-space: nowrap;
      }
      .zui-table tbody td {
          border-bottom: solid 1px #007bff;
          color: #333;
          padding: 10px;
          text-shadow: 1px 1px 1px #fff;
          white-space: nowrap;
      }
      .zui-wrapper {
          position: relative;
      }
      .zui-scroller {
          margin-left: 141px;
          overflow-x: scroll;
          overflow-y: visible;
          padding-bottom: 5px;
          width: 300px;
      }
      .zui-table .zui-sticky-col {
          border-left: solid 1px #DDEFEF;
          border-right: solid 1px #DDEFEF;
          left: 0;
          position: absolute;
          top: auto;
          width: 120px;
      }
    </style>


  </head>

  <body class="fixed-nav" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">Laboratory Assesment Tool</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav">
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Dashboard</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper py-3">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Data Barang</li>
        </ol>

        <!-- Tabel Barang -->
        <div class="card mb-3">
          <div class="card-header">
          <div class="row">
          <div class="col-md-6">
            <i class="fa fa-table"></i>
            Daftar Barang
          </div>
            <div class="col-md-6"><span class="pull-right">
              <button type="button" id="tambah" class="btn btn-primary" data-toggle="modal" data-target="#formtambah">
                <i class="fa fa-plus"></i>
                Tambah
              </button>
              <button type="button" id="ubah" class="btn btn-primary" data-toggle="modal" data-target="">
                  <i class="fa fa-edit"></i>
                  Ubah
              </button> 
              <button type="button" id="hapus" class="btn btn-primary" data-toggle="modal" data-target="">
                  <i class="fa fa-trash"></i>
                  Hapus
              </button> 
              <button type="button" id="exportButton" class="btn btn-primary" data-toggle="modal" data-target="">
                  <i class="fa fa-file-excel-o"></i>
                  Export to Excel
              </button>     
              </span>
            </div>
          </div>
            <!-- Modal -->
            <div id="formtambah" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Form Tambah Barang</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                  
                <div class="row">
                  <div class="col-md-12">
                    <form name="simpan_data" action="<?php echo $action;?>" method="post">
                    <div class="row">
                      <div class="col-md-2">Kode Barang</div>
                      <div class="col-md-4"><input id="kode_barang" type="text" name="kode_barang" class="input-md  textinput textInput form-control" placeholder="Auto by system" disabled="true"></div>
                      <div class="col-md-2">Nama Barang</div>
                      <div class="col-md-4"><input id="nama_barang" type="text" name="nama_barang" class="input-md  textinput textInput form-control" placeholder="Nama Barang" required="true"></div>
                    </div> 
                    <br>
                    <div class="row">
                      <div class="col-md-2">Tanggal Masuk</div>
                      <div class="col-md-4"><input id="datepicker" type="date" name="tanggal_masuk" class="form-control" placeholder="MM/DD/YYYY" required="true">
                      </div>
                      <div class="col-md-2">Unit</div>
                      <div class="col-md-4"><input id="unit" type="text" name="unit" class="input-md  textinput textInput form-control" placeholder="Unit" required="true"></div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-2">Harga Awal</div>
                      <div class="col-md-4"><input id="harga_awal" type="text" name="harga_awal" class="input-md  textinput textInput form-control" placeholder="Harga Awal" required="true"></div>
                      <div class="col-md-2">Total Harga</div>
                      <div class="col-md-4"><input id="total_harga" type="text" name="total_harga" class="input-md  textinput textInput form-control" placeholder="Total Harga" disabled> </div>
                    </div> 
                    <br>
                    <div class="row">
                      <div class="col-md-2">Jenis Aktiva</div>
                      <div class="col-md-4">
                          <select  name="jenis_aktiva" id="jenis_aktiva" class="form-control" required="true">
                              <option value="">--Pilih Jenis Aktiva--</option>
                              <option value="1">Kelompok 1</option>
                              <option value="2">Kelompok 2</option>
                              <option value="3">Kelompok 3</option>
                          </select> 
                      </div>
                      <div class="col-md-2">Penyusutan per Tahun</div>
                      <div class="col-md-4"><input id="susut_tahun" type="text" name="susut_tahun" class="input-md  textinput textInput form-control" placeholder="Penyusutan per Tahun" required="true"></div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-2">Kategori</div>
                      <div class="col-md-4">
                          <select name="kategori" id="kategori" class="form-control">
                              <option value="">--Pilih Kategori--</option>
                              <option value="1">Furniture</option>
                              <option value="2">Komputer</option>
                              <option value="3">Others</option>
                          </select> 
                      </div>
                      
                    
                  </div>
                 
                </div>
             </div>
                  <div class="modal-footer">
                    <div class="col-md-6"><span class="pull-right"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary" id="simpan"></span></div>
                    </div>
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                  </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="dataTable" class="zui-table" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Tanggal masuk</th>
                    <th>Unit</th>
                    <th>Harga awal</th>
                    <th>Total Harga</th>
                    <th>Kategori</th>
                    <th>Jenis Aktiva</th>
                    <th>Masa Manfaat</th>
                    <th>Beban Penyusutan/tahun</th>
                    <th>Beban Penyusutan/bulan</th>
                    <th>Nilai Buku</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php 
                    foreach ($hasil as $hasilx) {
                    if($hasilx->kategori==1){

                      $cat = "Furniture";

                    }
                    elseif ($hasilx->kategori==2) {
                      $cat = "Komputer";
                    }

                    else{

                      $cat = "Others";
                    }
                    if ($hasilx->jenis_aktiva==1) {
                      $masa_aktif=4;
                    }
                    elseif ($hasilx->jenis_aktiva==2) {
                     $masa_aktif=8;
                    }
                    else {
                      $masa_aktif=12;
                    }
                    
                    echo "<tr><td>".$hasilx->kode_barang."</td>
                    <td>".$hasilx->nama_barang."</td>
                    <td>".$hasilx->tanggal_masuk."</td>
                    <td>".$hasilx->unit."</td>
                    <td>".$hasilx->harga_awal."</td>
                    <td>".$hasilx->total_harga."</td>
                    <td>".$cat."</td>
                    <td>"."Kelompok ".$hasilx->jenis_aktiva."</td>
                    <td>".$masa_aktif." Tahun"."</td>
                    <td>".$hasilx->susut_tahun."</td>
                    <td>".$hasilx->susut_bulan."</td>
                    <td>".$hasilx->nilai_buku."</td>
                    <td>".$hasilx->status."</td></tr>";
                    
                    

                }
                  ?>
                  
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <!-- Updated yesterday at 11:59 PM -->
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/vendor/popper/popper.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.min.js';?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/vendor/chart.js/Chart.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.js';?>"></script>
    <script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.js';?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url().'assets/js/sb-admin.min.js';?>"></script>

  </body>

</html>
