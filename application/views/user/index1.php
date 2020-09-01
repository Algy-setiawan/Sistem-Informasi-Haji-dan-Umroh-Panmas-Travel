


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Panmas Travel</title>
  <link rel="icon"type="image/png" href="dist/img/IMG_20170409_082506.jpg">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
 
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.11.3.min.js"> </script>
     <style type="text/css">
  p.msg {
    display: block;
    white-space: pre;
}
</style>

</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="/pnmas/user" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><strong>P</strong>TT</span>
      <!-- logo for regular state and mobile devices --><span class="logo-lg"><strong>Panmas</strong>Travel</span></a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
   
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <em class="fa fa-user"></em> <span class="hidden-xs"><?php echo $_SESSION['nama'];  ?></span> </a>
            <ul class="dropdown-menu">
              <!-- User image -->
             
                

                
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="<?php echo base_url('user/Home/logout'); ?>">
             <i class="fa fa-power-off"></i>
              <span class="hidden-xs">LOGOUT</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
             
                

                
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/dist/img/download.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama'];  ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="<?php echo base_url().'user/home'?>">
            <i class="fa fa-home"></i> <span>Home</span>            
          </a>
          </li>

        <li class="treeview">
          <a href="<?php echo base_url().'user/Profile'?>">
            <i class="fa fa-user"></i> <span>Profile</span>
          </a>
        </li>

        <li class="treeview">
          <a href="<?php echo base_url().'user/Password'?>">
            <i class="fa fa-star"></i> <span>Ganti Password</span>            
          </a>
          </li>
        <li class="header">LIHAT PAKET DAN JADWAL</li>
        <li class="treeview">
          <a href="<?php echo base_url().'user/jadwal'?>">
            <i class="fa fa-user-plus"></i>
            <span>Paket dan Jadwal</span>           
          </a>  
        </li>
        <li class="header">DATA PELANGGAN</li>
        <li class="treeview">
          <a href="<?php echo base_url().'user/Datapelanggan'?>">
            <i class="fa fa-user-plus"></i>
            <span>Data Pelanggan</span>           
          </a>  
        </li>
        <li class="treeview">
          <a href="pemesanan">
            <i class="fa fa-user-plus"></i>
            <span>Pemesanan Pelanggan</span>           
          </a>  
        </li>
        <li class="treeview">
          <a href="<?php echo base_url().'user/Cetak'?>">
            <i class="fa fa-print"></i>
            <span>Cetak Pemesanan</span>           
          </a>  
        </li>
        
        
        
       
       
        
        
         <li class="header">TESTIMONI</li>
           <li class="treeview">
          <a href="<?php echo base_url().'user/Testimoni'?>">
            <i class="fa fa-user"></i> <span>Tambah Testimoni</span>
            
            
          </a>
        </li>
       
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Selamat Datang Di Panmas Tours & Travel Tanggerang <?php echo $_SESSION['username'];  ?>
    
    
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        
      </ol>
    </section>

 
            
              
     








    