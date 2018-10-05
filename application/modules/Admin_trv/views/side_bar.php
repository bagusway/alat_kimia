


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('name');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('Admin_trv');?>">
           <i class="fa fa-window-maximize"></i>
           Dashboard
          </a>
          <!-- <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul> -->
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-address-book"></i>
            <span>Travel Agent</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Admin_trv/T_A_Baru'); ?>"><i class="fa fa-circle-o"></i> Travel Agent Baru</a></li>
            <li><a href="<?php echo base_url('Admin_trv/T_A_Terdaftar'); ?>"><i class="fa fa-circle-o"></i> Travel Agent Terdaftar</a></li>
             <li><a href="<?php echo base_url('Admin_trv/T_A_Blocked'); ?>"><i class="fa fa-circle-o"></i> Travel Agent Blocked</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Pemesanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Admin_trv/Pembayaran'); ?>"><i class="fa fa-circle-o"></i> Pembayaran</a></li>
            <li><a href="<?php echo base_url('Admin_trv/Pesanan_Baru'); ?>"><i class="fa fa-circle-o"></i> Pesanan Baru</a></li>
            <li><a href="<?php echo base_url('Admin_trv/On_Going'); ?>"><i class="fa fa-circle-o"></i> Pesanan On-Going</a></li>
            <li><a href="<?php echo base_url('Admin_trv/Pesanan_Selesai'); ?>"><i class="fa fa-circle-o"></i> Pesanan Selesai</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('Admin_trv/Trip'); ?>">
            <i class="fa fa-briefcase"></i> <span>Trip</span>
            
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Pencairan Dana</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Admin_trv/Dana'); ?>"><i class="fa fa-circle-o"></i> Permintaan Baru</a></li>
            <li><a href="<?php echo base_url('Admin_trv/Riwayat_Dana'); ?>"><i class="fa fa-circle-o"></i> Riwayat</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('Admin_trv/Promo'); ?>">
            <i class="fa fa-gift"></i> <span>Promo</span>
           
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

