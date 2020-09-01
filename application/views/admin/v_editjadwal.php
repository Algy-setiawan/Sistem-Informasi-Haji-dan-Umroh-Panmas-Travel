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
              <h3 class="box-title">Edit Data Jadwal Panmas Tours & Travel</h3>

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
       <?php foreach ($jadwal as $data) ?>
        <form action="<?=base_url()?>admin/jadwal/updatejadwal" method="post" enctype="multipart/form-data">

           <div class="form-group">
            <input type="hidden" name="id_jadwal" value="<?php echo $data->id_jadwal ?>">
                  <label for="exampleInput">Kelas</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama jadwal" name="kelas" 
                  value="<?php echo $data->kelas ?>" required><br>
                  <label for="exampleInput">Nama Paket</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama jadwal" name="nama_paket" 
                  value="<?php echo $data->nama_paket ?>" required><br>
                  <label for="exampleInput">Harga</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama jadwal" name="harga" 
                  value="<?php echo $data->harga ?>" required><br>
                  <label for="exampleInputEmail1">Tanggal Keberangkatan</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" name="tanggal" value="<?php echo $data->tanggal ?>" required><br>
                  <label for="exampleInputPassword1">fasilitas</label>
                  <textarea class="form-control" id="exampleInputPassword1" placeholder="Masukan alamat" name="fasilitas"  required><?php echo $data->fasilitas ?></textarea><br>
                  
                  
                </div>
               
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
      </div></div>
      </section>
           