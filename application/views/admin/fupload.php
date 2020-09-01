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
              <h3 class="box-title">Halaman Upload Gallery Panmas Tours & Travel</h3>

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


                <div class="panel panel-default">
  <div class="panel-heading"><b>Max 2Mb</b></div>
  <div class="panel-body">
  <?=$this->session->flashdata('pesan')?>
     <form action="<?=base_url()?>admin/upload/insert" method="post" enctype="multipart/form-data">
       <table class="table table-striped">

         <tr>
          <td style="width:15%;">File Foto</td>
          <td>
            <div class="col-sm-6">
                <input type="file" name="filefoto" class="form-control">
            </div>
            </td>
         </tr>
                    <tr>
          <td style="width:15%;">Keterangan Foto</td>
          <td>
            <div class="col-sm-10">
                <textarea name="textket" class="form-control"></textarea>
            </div>
            </td>
         </tr>
         <tr>
          <td colspan="2">
            <input type="submit" class="btn btn-success" value="Simpan">
            <button type="reset" class="btn btn-default">Batal</button>
          </td>
         </tr>
       </table>
     </form>
        </div>
      
</div>



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
  
        </div>
        <!-- /.col -->
     
      <!-- /.row -->
    
    <!-- /.content -->
 
  <!-- /.content-wrapper -->