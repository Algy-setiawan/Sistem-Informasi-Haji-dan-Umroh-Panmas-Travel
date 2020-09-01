     <section class="content">
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
              <h3 class="box-title">Edit Testimoni Pelanggan Panmas Tours & Travel</h3>

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
      <?php foreach ($testimoni as $data) ?>
        <form action="<?=base_url()?>user/Testimoni/UpdateTestimoni" method="post" enctype="multipart/form-data">

           <div class="form-group">
            <input type="hidden" name="id_testimoni" value="<?php echo $data->id_testimoni ?>">
            <input type="hidden" name="tanggal" value="<?php date_default_timezone_set("Asia/Bangkok");
echo date(" d F Y ");?>">
                  <label for="exampleInput">Nama</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama" value="<?php echo $_SESSION['nama'];  ?>"  readonly required><br>
                  <label for="exampleInputPassword1">Testimoni</label>
                  <textarea class="form-control" id="exampleInputPassword1" placeholder="Masukan Testimoni" name="isi_testimoni"  required><?php echo $data->isi_testimoni ?></textarea><br>
                 
                 
                 


                
               
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
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      
   
  </section>
</div>