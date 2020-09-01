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
        
         
            
            <!-- /.box-header -->
<section class="content-header">
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Profile Pelanggan Panmas Tours & Travel</h3>

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
      
  
                
    <?php 
    
    foreach($pelanggan as $data){ 
    ?>
    <h3><b>
  Data Pelanggan</b>
  </h3><br>
  <h2>
        &nbsp <img  width="100" height="100" src=../assets/images/<?php echo $data->photo ?>>
    <li><b>Nama :</b> <?php echo $data->nama ?></li>
    <li><b>Jenis Kelamin :</b> <?php echo $data->jk ?></li>
     <li><b>Tanggal Lahir :</b> <?php echo $data->tgl_lhr ?></li>
      <li><b>No Telephone :</b><?php echo $data->no_tlp ?> </li>
      <li><b>Alamat :</b> <?php echo $data->alamat ?></li>
 </h2>
     
      

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
      </div>
	</section>

              </div>
              <!-- /.row -->
            
            <!-- ./box-body -->
           
            <!-- /.box-footer -->
          
          <!-- /.box -->
      
        <!-- /.col -->
     
      <!-- /.row -->

      <!-- Main row -->
      
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
     
      <!-- /.row -->
    
    <!-- /.content -->
 
  <!-- /.content-wrapper -->