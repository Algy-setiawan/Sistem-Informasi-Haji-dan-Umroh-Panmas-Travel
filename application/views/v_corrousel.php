
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
</select><br><a href="<?php echo base_url().'jadwal'?>" class="btn btn-default">Tampilkan</a></h3></div>
    </form>
  </div>

</select></h3></div></div>
<div class="container">
  <div class="row text-center">
   <div class="col-md-6 col-md-offset-3">
   
     </div>
  </div>
  <hr>