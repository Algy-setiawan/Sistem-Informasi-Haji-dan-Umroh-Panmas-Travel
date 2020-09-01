   
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
              <h3 class="box-title">Tambah Paket dan Pemesanan Pelanggan Panmas Tours & Travel</h3>

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
     
        <form action="<?=base_url()?>user/Pemesanan/TambahPemesanan" method="post" enctype="multipart/form-data">

           <div class="form-group">
                  <select name="nama" class="form-control"  required>
 <?php foreach($pelanggan as $data):?>
<option value="<?php echo $data->nama?>"><?php echo $data->nama?></option>
<?php endforeach;?>
</select><br>
                  

 <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'];  ?>">


                    <label for="exampleInputEmail1">Paket dan Jadwal</label>                                  
                   <select name="id_jadwal" class="form-control"  required>
      <option value="" hidden="">Pilih Paket Program</option>
     <?php foreach($jadwal as $data):?>
<option value="<?php echo $data->id_jadwal?>"><?php echo $data->nama_paket?></option>
<?php endforeach;?>
  </select>
                                  
                  

<br>
    
               
                  <label for="exampleInputEmail1">Tanggal Pemesanan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="tgl_pesan" value="<?php date_default_timezone_set("Asia/Bangkok");
echo date(" d F Y ");?>" readonly required><br>
                  
                 
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
              <h3 class="box-title">Lihat Pemesanan Pelanggan Panmas Tours & Travel</h3>

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
                 
                  
                  <th >Nama Lengkap</th>
                  <th style="width: 20px">Program</th>
                  <th style="width: 200px">Nama Paket</th>
                  <th style="width:150px ">Tanggal Pemesanan</th>
                  <th style="width: 200px">Tanggal Keberangkatan</th>
                 
                  <th style="width: 140px">Action</th>
                </tr>
                
    <?php 
    
    foreach($hasilTransaksi as $data) {
    ?>
    <tr>
      
      <td><?php echo $data->nama ?></td>
      <td><?php echo $data->kelas ?></td>
      <td><?php echo $data->nama_paket ?></td>
      <td><?php echo $data->tgl_pesan ?></td>
      <td><?php echo $data->tanggal ?></td>
  
      <td><a href="<?php echo base_url()."user/pemesanan/editpemesanan/$data->id_pemesanan"; ?>"><button type="button" class="btn btn-success">Edit</button></a>
      <a href="<?php echo base_url()."user/pemesanan/hapuspemesanan/$data->id_pemesanan"; ?>" onclick="return confirm ('Yakin Mau Di Hapus ?')"><button type="button" class="btn btn-danger" id="demo">Hapus</button></a></td>
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
              
<script type="text/javascript"> /* script JQuery untuk load gambar pada bagian preview */
    $(function() {
      $("#file").change(function() {
        $("#message").empty(); // To remove the previous error message
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];

        if (!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
        {
          $('#previewing').attr('src','noimage.png');
          $("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
          return false;
        }else {
          var reader = new FileReader();
          reader.onload = imageIsLoaded;
          reader.readAsDataURL(this.files[0]);
        }
      });
    });

    function imageIsLoaded(e) {
      $("#file").css("color","green");
      $('#image_preview').css("display", "block");
      $('#previewing').attr('src', e.target.result);
      $('#previewing').attr('width', '100px');
      $('#previewing').attr('height', '100px');
    }
  </script>