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
      <?php foreach ($pelanggan as $data) ?>
        <form action="<?=base_url()?>admin/Datapelanggan/updatedatapelanggan" method="post" enctype="multipart/form-data">

          <input type="hidden" name="id" value="<?php echo $data->id ?>">
           <div class="form-group">
                  <label for="exampleInput">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama" name="nama" value="<?php echo $data->nama ?>" required><br>
                  
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                   <select name="jk" class="form-control" id="jk" required>
      <option value="<?php echo $data->jk ?>" hidden=""><selected><?php echo $data->jk ?></option>
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
      <option value="?">Kosongkan</option>
  </select>
<br>
                
               
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" name="tgl_lhr" value="<?php echo $data->tgl_lhr ?>" required><br>
                  
                  <label for="exampleInputPassword1">No Tlp</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan No Tlp" name="no_tlp" value="<?php echo $data->no_tlp ?>" required><br>
               
                
                  <label for="exampleInputPassword1">Alamat</label>
                  <textarea class="form-control" id="exampleInputPassword1" placeholder="Masukan alamat" name="alamat"  required><?php echo $data->alamat ?></textarea><br>
                  
                  
                  <td><img id="previewing" width="100" height="100" src=../../../assets/images/<?php echo $data->photo ?>></td><br>
                 <td>
                  <label for="exampleInputFile">Masukan Photo</label><br>
                  
                  <input type="file" name="filefoto" accept="image/*" id="file">

                  <p class="help-block">Ukuran Max 5 MB</p></td>
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