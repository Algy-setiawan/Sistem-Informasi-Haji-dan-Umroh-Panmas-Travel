    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
  
      
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Lihat Galeri Panmas Tours & Travel</h3>

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
      
           <table class="table table-bordered">
            
                
  <?php

  $jml_kolom=3;
 
  $cnt = 0;
foreach($galeri as $data){
  if ($cnt >= $jml_kolom) 
      {
          echo "</tr><tr>";
          $cnt = 0;
    }
 
    $cnt++;
 
  ?>

 

    <td align=center>       
       <div>
         <img width='200px' height="150px" valign='bottom' src="../../assets/images/<?php echo $data->nm_gbr; ?>">
       </div>     
       <div>
         Keterangan : <?php echo $data->ket_gbr; ?><br>
<a href="<?php echo base_url()."admin/upload/hapusfoto/$data->id"; ?>" onclick="return confirm ('Yakin Mau Di Hapus ?')"><button type="button" class="btn btn-danger" id="demo">Hapus</button></a>
       </div>  
     </td>
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
              