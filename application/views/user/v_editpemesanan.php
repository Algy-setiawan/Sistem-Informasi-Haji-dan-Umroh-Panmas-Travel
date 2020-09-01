   
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          
            

            <div class="info-box-content">
           
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Paket dan Jadwal Pelanggan Panmas Tours & Travel</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  
                  
                </div>
               
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <section class="content-header">
      <?php foreach ($pemesanan as $data) ?>
        <form action="<?=base_url()?>user/pemesanan/UpdatePemesanan" method="post" enctype="multipart/form-data">

           <div class="form-group">
            <input type="hidden" name="id_pemesanan" value="<?php echo $data->id_pemesanan ?>">
            
                  <label for="exampleInput">Nama</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama" value="<?php echo $data->nama ?>"  readonly required><br>
                  <label for="exampleInput">Tanggal Pemesanan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="tgl_pesan" value="<?php date_default_timezone_set("Asia/Bangkok");
echo date(" d F Y ");?>"  readonly required><br>
                 
                 <label for="exampleInputEmail1">Paket dan Jadwal</label>                                  
                   <select name="id_jadwal" class="form-control"  required>
       
      <option value="" hidden="">Pilih Paket Program</option>
    <?php foreach($jadwal as $data):?>
<option value="<?php echo $data->id_jadwal?>"><?php echo $data->nama_paket?></option>
<?php endforeach;?>
  </select>
<br>
                 


                
               
                <div class="box-footer">
                <button type="submit" class="btn btn-primary" >Update</button>
                <button type="reset" class="btn btn-warning">Reset</button>

              </div> </form>
              <?php ?>
    </section>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              
              <!-- /.row -->
            </div></div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
