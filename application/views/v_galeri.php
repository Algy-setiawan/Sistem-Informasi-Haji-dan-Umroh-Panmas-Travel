

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Jura:400,300,500,600' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
  

<!-- //body-content -->
<!-- gallery -->
  <div class="gallery">
    <div class="container">
      <div class="gallery-grids">
        <h1 class="heading">Gallery Panmas Travel</h1>
   
  <table>
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
         <a href="assets/images/<?php echo $data->nm_gbr ?>" class="b-link-stripe b-animate-go  swipebox">
         <img src="assets/images/<?php echo $data->nm_gbr; ?>" alt="" width="370" height="230" border="0"></a>
       </div>     
       <div>
         Keterangan : <?php echo $data->ket_gbr; ?><br>

       </div>  
     </td>


    <?php } ?>
  </table>

  
      </div>
      </div>
      </div>
          <div class="clearfix"></div>
        </div>
        <!-- script-for-swipebox -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/swipebox.css">
          <link rel="stylesheet" href="css/swipebox.css">
          <script src="js/jquery.swipebox.min.js"></script> 
            <script type="text/javascript">
              jQuery(function($) {
                $(".swipebox").swipebox();
              });
            </script>
        <!-- //script-for-swipebox -->
      </div>
    </div>
  </div>
