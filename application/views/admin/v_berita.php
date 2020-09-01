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
              <h3 class="box-title">Tambah Berita dan Artikel Panmas Tours & Travel</h3>

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
      
        <form action="<?=base_url()?>admin/berita/tambahberita" method="post" enctype="multipart/form-data">

           <div class="form-group">
            <input type="hidden" name="tanggal" value="<?php date_default_timezone_set("Asia/Bangkok");
echo date(" d F Y ");?>">
                  <label for="exampleInput">Judul</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Judul" name="judul" required><br>
                  <label for="exampleInputPassword1">Berita</label>
                  <textarea class="form-control" id="exampleInputPassword1" placeholder="Masukan isi Berita" name="berita"  required></textarea><br>
                 
                  <img id="previewing" width="100" height="100" src="../assets/image/default.png"  /><br>
                  
                  <label for="exampleInputFile">Masukan Gambar/file</label>
                  <input type="file" name="filefoto" accept="image/*"  id="file">
                  <p class="help-block">Masukan Gambar Untuk Berita</p>


                
               
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
              <h3 class="box-title">Lihat Berita dan Artikel Panmas Tours & Travel</h3>

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
                  <th style="width: 200px">tanggal</th>
                  <th style="width: 20px">Judul</th>
                  <th style="width: 200px">Berita</th>
                  
                  <th style="width: 200px">Gambar</th>
                 
                  <th style="width: 140px">Action</th>
                </tr>

                
    <?php 
    $no = 1;
    foreach($berita as $data){ 
    ?>

    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $data->tanggal ?></td>
      <td><?php echo $data->judul ?></td>
      <td><p class="msg"><?php echo $data->berita ?></td>
      
     <td><a href="../assets/images/<?php echo $data->gambar ?>"> <?php echo $data->gambar ?></a></td>
      
      

      
      
      <td align="center"><a href="<?php echo base_url()."admin/berita/editberita/$data->id_berita"; ?>"><button type="button" class="btn btn-success">Edit</button></a>
      <a href="<?php echo base_url()."admin/berita/hapusberita/$data->id_berita"; ?>" onclick="return confirm ('Yakin Mau Di Hapus ?')"><button type="button" class="btn btn-danger" id="demo">Hapus</button></a></td>
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
