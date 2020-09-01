    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      
      
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
                  <th>Program</th>
                  <th>Nama Paket</th>
                  <th>Harga</th>
                  <th >Tanggal Keberangkatan</th>
                  <th >fasilitas</th>
                
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


