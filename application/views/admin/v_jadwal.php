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
              <h3 class="box-title">Tambah Jadwal Keberangkatan Panmas Tours & Travel</h3>

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
      
        <form action="<?=base_url()?>admin/jadwal/tambahjadwal" method="post" enctype="multipart/form-data">

           <div class="form-group">
                  <label for="exampleInput">Kelas</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Kelas" name="kelas" required><br>
                  <label for="exampleInput">Nama Paket</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Paket" name="nama_paket" required><br>
                  <label for="exampleInput">Harga</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Harga" name="harga" required><br>
                  <label for="exampleInputEmail1">Tanggal Keberangkatan</label>
                  <input type="date" class="form-control" id="datetimepicker1" name="tanggal" >

                  <br>
                  <label for="exampleInputPassword1">Fasilitas</label>
                  <textarea class="form-control"  placeholder="Fasilitas" name="fasilitas" cols="5"  required></textarea><br>
                  
                </div>
               
                <div class="box-footer">
                <button type="submit" class="btn btn-primary" >Tambah</button>
                <button type="reset" class="btn btn-warning">Reset</button>

              </div> </form>
              
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
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Lihat Jadwal Keberangkatan Panmas Tours & Travel</h3>

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
      
           <table class="table table-bordered table-striped table-hover">
                <tr>
                  <th style="width: 10px">No</th>
                  <th style="width: 20px">Kelas</th>
                  <th style="width: 200px">Nama Paket</th>
                  <th style="width: 200px">Harga</th>
                  <th style="width: 200px">Tanggal Keberangkatan</th>
                  <th >fasilitas</th>
                  <th style="width: 140px">Action</th>
                </tr>
                
    <?php 
    $no = 1;
    foreach($jadwal as $data){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $data->kelas ?></td>
      <td><?php echo $data->nama_paket ?></td>
      <td><?php echo $data->harga ?></td>
      <td><?php echo  $data->tanggal  ?></td>
      <td><p class="msg"><?php echo $data->fasilitas ?></td>
      
      
      <td align="center"><a href="<?php echo base_url()."admin/jadwal/editjadwal/$data->id_jadwal"; ?>"><button type="button" class="btn btn-success">Edit</button></a>
      <a href="<?php echo base_url()."admin/jadwal/hapusjadwal/$data->id_jadwal"; ?>" onclick="return confirm ('Yakin Mau Di Hapus ?')"><button type="button" class="btn btn-danger" id="demo">Hapus</button></a></td>
    </tr>
    <?php } ?>
  
              
              </table>
    </section>
      
            </div>
                        <div class="box-footer">
              
          
            </div>
       
          </div>
     
        </div>
  
      </div>
      </section>

              </div>
        
 
             
<script>
function myFunction() {
var result = confirm("Want to delete?");
if (result) {
    //Logic to delete the item
}
    document.getElementById("demo").innerHTML = x;
}
</script>          
              
<script>
  function bacaGambar(input){

    if (input.files && input.files[0]){
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#gambar_nodin').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

</script>


