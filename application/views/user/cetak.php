 <table class="table table-bordered table-striped table-hover">
                <tr>
                 
                  
                  <th >Nama Lengkap</th>
                  <th style="width: 20px">Program</th>
                  <th style="width: 200px">Nama Paket</th>
                  <th style="width:150px ">Tanggal Pemesanan</th>
                  <th style="width: 200px">Tanggal Keberangkatan</th>
                 
                  <th style="width: 140px">Action</th>
                </tr>
                
    <?php 
    
    foreach($hasilTransaksi as $data) {
    ?>
    <tr>
      
      <td><?php echo $data->nama ?></td>
      <td><?php echo $data->kelas ?></td>
      <td><?php echo $data->nama_paket ?></td>
      <td><?php echo $data->tgl_pesan ?></td>
      <td><?php echo $data->tanggal ?></td>
  
      <td><a href="<?php echo base_url()."user/pemesanan/editpemesanan/$data->id_pemesanan"; ?>"><button type="button" class="btn btn-success">Edit</button></a>
      <a href="<?php echo base_url()."user/pemesanan/hapuspemesanan/$data->id_pemesanan"; ?>" onclick="return confirm ('Yakin Mau Di Hapus ?')"><button type="button" class="btn btn-danger" id="demo">Hapus</button></a></td>
    </tr>
    <?php } ?>
  
              
              </table>