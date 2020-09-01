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
              <h3 class="box-title">Edit Password Panmas Tours & Travel</h3>

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
       <?php foreach ($user as $data) {?>
        <form action="<?=base_url()?>user/password/updatepassword" method="post" enctype="multipart/form-data">

           <div class="form-group">
           <input type="hidden" name="id_user">
                  <label for="exampleInput">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama jadwal" name="nama" value="<?php echo $data->nama ?> " readonly
                   required><br>
                  <label for="exampleInput">Username</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama jadwal" name="username" value="<?php echo $data->username ?>" readonly
                   required><br>
                 
                  <label for="exampleInputEmail1">Password Baru</label>
                  <input type="Password" class="form-control" id="password" name="password" required><br>
                   <label for="exampleInputEmail1">Ulangi Password</label>
                  <input type="Password" class="form-control" name="confirm_password" id="confirm_password" required><br>
                  
                  
                </div>
               
                <div class="box-footer">
                <button type="submit" class="btn btn-primary" >Simpan</button>
                <button type="reset" class="btn btn-warning">Reset</button>

              </div> </form>
              <?php } ?>
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
  

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script type="text/javascript">
  
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

$('#password, #confirm_password').on('keyup', function () {
    if ($('#password').val() == $('#confirm_password').val()) {
        $('#message').html('Matching').css('color', 'green');
    } else 
        $('#message').html('Not Matching').css('color', 'red');
});
</script>