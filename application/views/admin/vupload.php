
<head>
    <title><?=$titel?></title> <!-- variabel diambil dari controller -->
    
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet"> <!-- Custom styles for this template -->
<style>

    body{
        margin:20px 10%;
    }
</style>
</head>

<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
  <div class="panel-heading"><b> Daftar File IMage</b></div>
  <div class="panel-body">
    
    <?=$this->session->flashdata('pesan')?>
    <p>
        <a href="<?=base_url()?>upload/add" class="btn btn-success">Tambah</a>
    </p>
  <table class="table table-bordered table-striped">
    <tr>
      <th>Keterangan File</th>
      <th>Tipe File</th>
      <th>Gambar File</th>
    </tr>
    <? if(empty($query)){ ?> <!-- jika data kosong kita tampilkan pesan -->
    <tr>
        <td colspan="3">Data tidak ada</td>
    </tr>
    <? }else{
    foreach($query as $rowdata){ ?> <!-- menampilkan data dari query dengan looping -->
    <tr>
      <td><?=$rowdata->ket_gbr?></td>
      <td><?=$rowdata->tipe_gbr?></td>
      <td><img src="assets/images/<?=$rowdata->nm_gbr?>"></td>
    </tr>
    <? }}?>
  </table>

</div>
</div>
</div>
