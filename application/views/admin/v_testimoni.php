    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
 
      
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Lihat Testimoni Pelanggan Panmas Tours & Travel</h3>

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
                  <th style="width: 100px">Photo</th>
                  <th style="width: 100px">Nama</th>
                  <th style="width: 100px">tanggal</th>
                  <th >Testimoni</th>
                  
                 
                  <th style="width: 140px">Action</th>
                </tr>

                
    <?php 
    $no = 1;
    foreach($hasiltransaksi as $data){ 
    ?>

    <tr>
      <td><?php echo $no++ ?></td>
      <td><img  width="100" height="100" src=../assets/images/<?php echo $data->photo ?>></td>
      <td><?php echo $data->nama ?></td>
      <td><?php echo $data->tanggal ?></td>
      <td><p class="msg"><?php echo $data->isi_testimoni ?></td>
      
     
      
   
      
      

      
      
      <td align="center"><a href="<?php echo base_url()."admin/Testimoni/edittestimoni/$data->id_testimoni"; ?>"><button type="button" class="btn btn-success">Edit</button></a>
      <a href="<?php echo base_url()."admin/testimoni/hapustestimoni/$data->id_testimoni"; ?>" onclick="return confirm ('Yakin Mau Di Hapus ?')"><button type="button" class="btn btn-danger" id="demo">Hapus</button></a></td>
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
              
