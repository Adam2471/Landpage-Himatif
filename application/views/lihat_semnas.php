<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <title></title>
</head>
<body>
     <div class="container">
        <a  class= "btn btn-primary mt-3" href="<?php echo base_url(). 'admin/index'?>">Back</a>
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">No HP</th>
      <th scope="col">Kegiatan</th>
      <th scope="col">Asal Kampus/Instansi</th>
      <th scope="col">Bukti Pembayaran</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?>
  <?php foreach ($user as $p) {
  ?>
    <tr>
      <th scope="row"><?php echo $i++ ?></th>
      <td><?php echo $p->nama ?></td>
      <td><?php echo $p->nim ?></td>
      <td><?php echo $p->no_hp ?></td>
      <td><?php echo $p->kegiatan ?></td>
      <td><?php echo $p->asal ?></td>
      <td><img src="<?php echo base_url(); ?>assets/bukti/<?php echo $p->foto ?>" width='100' height='100'></td>
      <td><?php echo anchor('admin/hapus_semnas/'.$p->id,'Hapus') ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>