  <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pelanggan Panmas Tours & Travel</h3>

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
      <form method="post" action="../adm/simpan_pelanggan.php" enctype="multipart/form-data">
           <div class="form-group">
                  <label for="exampleInput">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama" name="nama" required><br>
                  
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                   <select name="jk" class="form-control" id="jk" required>
      <option value="" hidden="">Pilih Jenis Kelamin</option>
      <option value="Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
      <option value="?">Kosongkan</option>
  </select>
<br>
                
               
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" name="tgl_lhr" required><br>
                  
                  <label for="exampleInputPassword1">No Tlp</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan No Tlp" name="no_tlp" required><br>
               
                
                  <label for="exampleInputPassword1">Alamat</label>
                  <textarea class="form-control" id="exampleInputPassword1" placeholder="Masukan alamat" name="alamat" required></textarea><br>
                  
                  
               
                  <label for="exampleInputFile">Masukan Photo</label>
                  <input type="file" required id="exampleInputFile" name="photo"  >

                  <p class="help-block">Ukuran Max 5 MB</p>
                </div>
               
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <button type="reset" class="btn btn-warning">Reset</button>
              </div></form>
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