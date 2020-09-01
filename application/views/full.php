
<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1.0;">
<title>Panmas Travel</title>

<!-- Bootstrap -->
<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/css/plan/style.css" rel="stylesheet">

<link href="<?php echo base_url() ?>assets/css/testimoni/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css" />



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
</head>
<body>
<div class="primary_header">
     
      <h5 class="title"><a href="url">HOTLINE:(021)59407315</a> &nbsp; &nbsp; &nbsp; <a href="url">EMAIL: info@panmastravel.com</a></h5>
     
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


</body>

</html>













<div class="container-fluid">
  <div id="carousel1" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel1" data-slide-to="1"></li>
      <li data-target="#carousel1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active"><img src="<?php echo base_url() ?>assets/images/1600x500.png"  alt="First slide image" class="center-block"  >
        
      </div>
      <div class="item"><img src="<?php echo base_url() ?>assets/images/1600x500.png" alt="Second slide image" class="center-block">
        
      </div>
      <div class="item"><img src="<?php echo base_url() ?>assets/images/1600x500.png" alt="Third slide image" class="center-block" >
        
      </div>
    </div>
    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>

  
</div>
<div class="social1 form-group">
  <div class="container" style="width: 40%">
   <h3><font color="white"><strong>CARI PAKET DAN TANGGAL KEBERANGKATAN</strong></font> <select name="nama" class="form-control"  required>
                  <form>
                    <option value="" hidden="">Pilih Nama Paket</option>
 <?php foreach($jadwal as $data):?>
<option value="<?php echo $data->nama_paket?>"><?php echo $data->tanggal?> - <?php echo $data->nama_paket?></option>
<?php endforeach;?>
</select><br><button type="submit" class="btn btn-primary">Tampilkan</button></h3></div>
    </form>
  </div>

</select></h3></div></div>
<div class="container">
  <div class="row text-center">
   <div class="col-md-6 col-md-offset-3">
   
     </div>
  </div>
  <hr>























    <div class="container">

      <!-- pricing table -->
      <h1 class="heading">Kenapa Memilih Kami</h1>
<h4>Panmas Travel & Tour memberikan layanan perjalanan wisata sejak tahun 2001 dan resmi terdaftar sebagai penyelenggaraan Haji Plus dan Umroh di Kementrian Agama RI. Panmas Travel & Tour berkomitmen kuat untuk selalu memberikan layanan prima, tulus, ikhlas sepenuh hati</h4>
</div>




















  <div class="container">

      <!-- pricing table -->
      <h1 class="heading">Lihat Paket dan Jadwal</h1>

</div>

 <table align="center" class="table " style="width: 100%">
            
                
  <?php

  $jml_kolom=3;
 
  $cnt = 0;
foreach($jadwal as $data){
  if ($cnt >= $jml_kolom) 
      {
          echo "</tr><tr>";
          $cnt = 0;
    }
 
    $cnt++;
 
  ?>

 

    <td align='center' width="auto"   >       
       <div class="pricing_top">
          <h6> <?php echo $data->nama_paket; ?></h6>
          <p><?php echo $data->harga; ?></p>
        </div>
       <div class="pricing_middle">
         <ul>
            <li ><?php echo $data->tanggal; ?></li>
            <li><?php echo $data->kelas; ?></li>
           
            <li><?php echo $data->kelas; ?></li>
            
          </ul>
        </div>
        <div class="pricing_bottom">
          <a href="#">Order</a>
        </div>

     </td>
     
    
    <?php } ?>
  
             
              </table>
              





























    <hr>
         
        <div class="news">
          <div class="wrap">
            <h1 class="heading">Berita dan Pengumuman</h1>
            <div class="row">  
             <table align="center" class="table " style="width: 100%">              
  <?php

  $jml_kolom=3;
 
  $cnt = 0;
foreach($berita as $data){
  if ($cnt >= $jml_kolom) 
      {
          echo "</tr><tr>";
          $cnt = 0;
    }
 
    $cnt++;
 
  ?>
  <td>
            <div class="col-lg-3 news-grid" style="width: auto; " >
              
              <img height="200" src=assets/images/<?php echo $data->gambar ?>>
              <div class="news-desc">
              <h2><?php echo $data->judul; ?></h2>
              <p><?php echo $data->berita; ?></p>
              <p><a class="read-more" href="#">Read More</a></p>
                <div class="news-desc-bottom">
                  <p class="left">Category: Berita</p>
                  <p class="right"><i class="fa fa-calendar"></i><?php echo $data->tanggal; ?></p>
                   <div class="clear"></div>
                </div>
                
              
            </div><!-- /.col-lg-4 -->
     
            </div><!-- /.col-lg-4 -->
             </td> <?php } ?></table>
          </div>
           </div>
        </div>
   </div>






























<div class="container">
         
        <div class="news">
          <div class="wrap">
            <h1 class="heading">Testimoni Pelanggan</h1>
            <div class="row">  
             <table align="center" class="table " style="width: 100%">              
  <?php

  $jml_kolom=7;
 
  $cnt = 0;
foreach($hasiltransaksi as $data){
  if ($cnt >= $jml_kolom) 
      {
          echo "</tr><tr>";
          $cnt = 0;
    }
 
    $cnt++;
 
  ?>
  <td>
            <div class="col-lg-3 news-grid" style="width: auto; " >
              
              <img class="img-circle"  width="100" height="150" src=assets/images/<?php echo $data->photo ?>>
              <div class="news-desc">
              <h2><?php echo $data->nama; ?></h2>
              <p><?php echo $data->isi_testimoni; ?></p>
              
                <div class="news-desc-bottom">
                 
                  <p class="right"><i class="fa fa-calendar"></i><?php echo $data->tanggal; ?></p>
                   <div class="clear"></div>
                </div>
                
              
            </div><!-- /.col-lg-4 -->
     
            </div><!-- /.col-lg-4 -->
             </td> <?php } ?></table>
          </div>
           </div>
        </div>
   </div>


























</tr></table></div></div></div></div>
   <div class="general_social_icons">
  <nav class="social">
    <ul>
      <li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
      <li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
      <li class="w3_dribbble"><a href="#">Instagram <i class="fa fa-instagram"></i></a></li>
      <li class="w3_g_plus"><a href="#">Youtube <i class="fa fa-youtube-play"></i></a></li>         
    </ul>
  </nav>
</div>
<!-- general -->
  
    <div class="info">
  <div class="footer_grids">
        <div class="col-md-3 footer_grid">
          <h3>KONTAK</h3>
          
            <li><a href="#">Alamat</a></li>
            <li><a href="contact.html">Kantor Pusat</a></li>
            <li><a href="short-codes.html">Email</a></li>
            <li><a href="faq.html">FAQ's</a></li>
            
          
        </div>
        <div class="col-md-3 footer_grid">
          <h3>LAYANAN</h3>
          
            <li><a href="about.html">Umroh</a></li>
            <li><a href="contact.html">Haji Plus</a></li>
            
            
          
        </div>
        <div class="col-md-3 footer_grid">
          <h3>INFORMASI</h3>
           
            <li><a href="groceries.html">Tentang Kami</a></li>
            <li><a href="household.html">Testimoni</a></li>
            <li><a href="personalcare.html">Galeri</a></li>
            
          
        </div>
        
        <div class="col-md-3 footer_grid">
          <h3>BERITA & ARTIKEL</h3>
          
            <li><a href="products.html">Berita</a></li>
            <li><a href="checkout.html">Jadwal</a></li>
            <li><a href="login.html">Login</a></li>
            
          
        </div>
        <div class="clearfix"> </div>
      </div>
  </div>
  <div class="footer">
    <h5 align="center"><a href="index.html">Copyright <?php echo date("Y");?> Panmas Travel & Tour Tanggerang</a></h5>
  </div>