
     

<div class="container">

   <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center">Registrasi</h1>
 <form action="<?=base_url()?>registrasi/registrasi" method="post" enctype="multipart/form-data">
  <tr>
    <input type="hidden" name="level" value="usr">
  <label for="name"> Nama Lengkap</label> <input type="text" class="form-control" name="nama" required >
  <label for=""> Username</label> <input type="text" class="form-control" name="username" required >
  <label for=""> Password</label> <input type="password" class="form-control" name="password" id="password" required>
  <label for="">Ulangi Password</label> <input type="password" class="form-control" name="confirm_password" id="confirm_password" required><br>
   <center><input type="submit" name="daftar" value="Daftar" class="btn btn-danger btn-sm" style="padding: 10px 70px;">
   <input type="reset" name="" value="Reset" class="btn btn-danger btn-sm" style="padding: 10px 70px;">
   </center>
 </tr>
    </form>
    <br>
    </div>
  
  </div>
  <script src="<?php echo base_url() ?>assets/js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>

