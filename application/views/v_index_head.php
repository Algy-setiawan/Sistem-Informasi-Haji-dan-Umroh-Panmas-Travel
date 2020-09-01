
<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1.0;">
<title>Panmas Travel</title>
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/image/IMG_20170409_082506.jpg"/>
<!-- Bootstrap -->
<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/css/plan/style.css" rel="stylesheet">

<link href="<?php echo base_url() ?>assets/css/testimoni/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css" />

<link href="<?php echo base_url() ?>assets/dist/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/dist/jquery.jquery.fancybox.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/dist/swipebox.css" rel="stylesheet">


  <!-- Font Awesome -->

  <!-- Ionicons -->
 
  <!-- jvectormap -->

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
  p.msg {
    display: block;
    white-space: pre;
}
</style>
</head>
<body>
<div class="primary_header">
     
      <h5 class="title"><a href="#">HOTLINE:(021)59407315</a> &nbsp; &nbsp; &nbsp; <a href="#">EMAIL: info@panmastravel.com</a></h5>
     
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="<?php echo base_url().'home'?>">Panmas Travel</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
       
        <li><a href="<?php echo base_url().'home'?>">HOME<span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url().'tentang'?>">TENTANG KAMI</a></li>
        <li><a href="<?php echo base_url().'jadwal'?>">PAKET DAN JADWAL</a></li>
        <li><a href="<?php echo base_url().'berita'?>">BERITA DAN PENGUMUMAN</a></li>
        
        <li><a href="<?php echo base_url().'galeri'?>">GALERI</a></li>
        <li><a href="<?php echo base_url().'testimoni'?>">TESTIMONI</a></li>
        <li><a href="<?php echo base_url().'kontak'?>">KONTAK KAMI</a></li>
        
      </ul>
      
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">LOGIN <span class="glyphicon glyphicon-log-in"></span></a> 
          <ul class="dropdown-menu" role="menu">
          <center><label class="label-danger" style="padding: 15px 70px"><font size="5" color="white">Login</font></label></center>
            
          <?php echo form_open("login/login_process"); ?>
            <div class="form-group">
           <center><label>Username</label></center>
           <center><input type="text" name="username"   required></center>
           <center><label>Password</label></center>
           <center><input type="password" name="password"  required></center>
           <center><br>
          
           <input type="submit" value="login" class="btn btn-danger btn-sm" style="padding: 10px 40px;"><br><?php echo $this->session->flashdata('message');?><br>
            <a href="<?php echo base_url().'registrasi'?>"><font color="#FF0004">Belum punya akun ?<br>Registrasi Di sini</font></a> 
            
            </center></div>
          <?php echo form_close(); ?>

          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php echo base_url() ?>assets/js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/dist/jquery.fancybox.js"></script>
<script src="<?php echo base_url() ?>assets/dist/jquery.jquery.fancybox.min.js"></script>
<script src="<?php echo base_url() ?>assets/dist/jquery.swipebox.min.js"></script>

</body>

</html>


