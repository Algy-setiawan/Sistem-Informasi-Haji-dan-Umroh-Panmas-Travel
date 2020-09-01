<hr>
         
        <div class="news">
          <div class="wrap">
            <h1 class="heading">Berita dan Pengumuman Terbaru</h1>
            <div class="row">  
             <table align="center" class="table " style="width: 100%">              
  <?php

  $jml_kolom=3;
 
  $cnt = 0;
foreach($berita as $data){
  if ($cnt >= $jml_kolom) 
      {
          echo "</tr><tr>";
          $cnt = 0;
    }
 
    $cnt++;
 
  ?>
  <td>
            <div class="col-lg-3 news-grid" style="width: auto; " >
              
              <img height="200" src=assets/images/<?php echo $data->gambar ?>>
              <div class="news-desc">
              <h2><?php echo $data->judul; ?></h2>
              <p><p class="msg"><?php echo $data->berita; ?></p>
             
                <div class="news-desc-bottom">
                  <p class="left">Category: Berita</p>
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