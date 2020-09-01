<!DOCTYPE html>
<html>
<head>
  <title>Report Table</title>
  <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      width:100%;
      border-radius: 5px;
    }
 
    .short{
      width: 50px;
    }
 
    .normal{
      width: 150px;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
      border: 1px solid black;
    }
 table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
</head>
<body>
 
      
 <center>
  <div id="outtable" align="left">

    <table align="center" style="width: 100%">
      <thead>
        <center>
         <h3> Panmas Tours & Travel<br>
          JL. Raya Serang KM 17,5 Bojong Cikupang 12710 <br>Telp. (021) 59407315<br></h3></center>
         <h3> Tanggal:<?php date_default_timezone_set("Asia/Bangkok");
echo date(" d F Y ");?></h3><hr><br>
<?php 
    
    foreach($hasilTransaksi as $data) :
    ?>



        
       
         
       
        
  <tr>      
<td><h3>No Pesanan:<?php echo $data->id_pemesanan ?></h3></td>
<td><h3>Nama Pemesan:<?php echo $data->nama ?></h3></td>

<tr>
        <tr>
          <th class="short">Nama</th>
          <td><?php echo $data->nama ?></td>
        </tr>

        <tr>
          <th class="normal">Jenis Kelamin</th>
          <td><?php echo $data->jk ?></td>
        </tr>

        <tr>
          <th class="normal">Tanggal Lahir</th>
          <td><?php echo $data->tgl_lhr ?></td>
        </tr>

        <tr>
          <th class="normal">Alamat</th>
          <td> <?php echo $data->alamat ?></td>
        </tr>
         <tr>
          <th class="normal">Jadwal dan Paket</th>
          <td> <?php echo $data->nama_paket ?></td>
        </tr>
         <tr>
          <th class="normal">Tanggal Pesan</th>
          <td> <?php echo $data->tgl_pesan ?></td>
        </tr>
        <tr>
          <th class="normal">Harga</th>
          <td> <?php echo $data->harga  ?></td>
        </tr>
         
       <th>Photo</th>
          <td><img  width="100" height="100" src=../assets/images/<?php echo $data->photo ?>></td>
        </tr>
</tr>

      </thead>
      <tbody>
      
          <?php endforeach ?>
       
      </tbody>
    </table>
    <a href="#" onclick="cetak()">Cetak Data</a>
   </div>
</body>
</html>
<script type="text/javascript">
function cetak(){
 print();
}
</script>