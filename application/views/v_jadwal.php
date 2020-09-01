<div class="container">

      <!-- pricing table -->
      <h1 class="heading">Lihat Paket dan Jadwal Terpopuler</h1>

</div>

 <table align="center" class="table " style="width: 100%">
            
                
  <?php

  $jml_kolom=3;
 
  $cnt = 0;
foreach($jadwal as $data){
  if ($cnt >= $jml_kolom) 
      {
          echo "</tr><tr>";
          $cnt = 0;
    }
 
    $cnt++;
 
  ?>

 

    <td align='center' width="25%" height="1000%"   >       
       <div class="pricing_top">
          <h6> <?php echo $data->nama_paket; ?> </h6>
          
          <p><?php echo $data->harga; ?></p>
        </div>
       <div class="pricing_middle">
         <ul >
          <li><?php echo $data->kelas; ?></li>
            <li ><?php echo $data->tanggal; ?></li>
            <li><p class="msg"><?php echo $data->fasilitas; ?></li>
           
       
            
          </ul>
        </div>
        <div class="pricing_bottom">
          <a href="<?php echo base_url().'registrasi'?>">Pesan</a>
        </div>

     </td>
     
    
    <?php } ?>
  
             
              </table>
              

