<div class="container">
         
        <div class="news">
          <div class="wrap">
            <h1 class="heading">Testimoni Pelanggan</h1>
            <div class="row">  
             <table align="center" class="table " style="width: 100%">              
  <?php

  $jml_kolom=7;
 
  $cnt = 0;
foreach($hasiltransaksi as $data){
  if ($cnt >= $jml_kolom) 
      {
          echo "</tr><tr>";
          $cnt = 0;
    }
 
    $cnt++;
 
  ?>
  <td>
            <div class="col-lg-3 news-grid" style="width: auto; " >
              
              <img class="img-circle"  width="100" height="150" src=assets/images/<?php echo $data->photo ?>>
              <div class="news-desc">
              <h2><?php echo $data->nama; ?></h2>
              <p><p class="msg"><?php echo $data->isi_testimoni; ?></p>
              
                <div class="news-desc-bottom">
                 
                  <p class="right"><i class="fa fa-calendar"></i><?php echo $data->tanggal; ?></p>
                   <div class="clear"></div>
                </div>
                
              
            </div><!-- /.col-lg-4 -->
     
            </div><!-- /.col-lg-4 -->
             </td> <?php } ?></table>
          </div>
           </div>
        </div>
   </div>