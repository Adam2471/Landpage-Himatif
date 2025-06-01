<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content="SPA Example" />
		<meta name="keywords" content="HTML, CSS, JavaScript" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo base_url() ?>assets/img/logo/itfastlogo.png" type="image/gif" sizes="16x16" />
		<link
			href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
			rel="stylesheet"
		/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />
		<title>IT FAST # 2</title>
        <nav class="as-nav as-container">
				<a href="#" class="as-nav__logo"> IT FAST # 2</a>

				<div class="as-nav__menu" id="nav-menu">
					<ul class="as-nav__list">
						<li class="as-nav__item">
							<a href="<?php echo base_url(). 'admin/index'?>" class="as-nav__link"
								>Home Admin</a
							>
						</li>
					</ul>
				</div>

				<div class="as-nav__toggle" id="nav-toggle">
					<i class="bx bx-menu"></i>
				</div>
			</nav>
	</head>
<body>
	<br>
	<br>
    <!-- Form -->
    <div class="mx-auto" style="width:500px">
    <div class="card" style="width: 30rem;">
  <div class="card-header" style="text-align: center;">
    Update Data 
  </div>
  <div class="card-body">
  <?php echo form_open_multipart('admin/update');?>
		<table style="margin:20px auto;">
    <?php foreach ($user as $p) { ?>
			<tr>
                <input type="hidden" name="id" value="<?php echo $p->id_pendaftar?>">
				<td>Nama</td>
				<td><input type="text" name="nama" placeholder="<?php echo $p->nama?>"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim" placeholder="<?php echo $p->nim?>"></td>
			</tr>
            <tr>
				<td>Email</td>
				<td><input type="text" name="email" placeholder="<?php echo $p->email?>"></td>
			</tr>
			<tr>
				<td>kelas</td>
				<td><input type="text" name="kelas" placeholder="<?php echo $p->kelas?>"></td>
			</tr>
            <tr>
				<td>Angkatan</td>
				<td><input type="text" name="angkatan" placeholder="<?php echo $p->angkatan?>"></td>
			</tr>
            <tr>
				<td>Lomba</td>
				<td><select name="lomba">
                    <optgroup label="E-Sport">
                        <option value="mobile legends">Mobile Legends</option>
                        <option value="pubgm">PUBGM</option>
                    <optgroup label="Sport">
                        <option value="futsal">Futsal</option>
                        <option value="badminton">Badminton</option>
                    <optgroup label="Ui/Ux">
                        <option value="ui/ux">Ui/Ux</option>
                    <optgroup label="Poster">
                        <option value="poster">Poster</option>
                    <optgroup label="Film">
                        <option value="film">Lomba Film</option>
                    <optgroup label="Seminar">
                        <option value="seminar nasional">Seminar Nasional</option>
                    <optgroup label="Workshop">
                        <option value="workshop">Workshop</option>
                    <optgroup label="Festival Musik">
                        <option value="festival musik">Festival Musik</option>
                </select> </td>
			</tr>
            <tr>
				<td>Pembayaran</td>
				<td><input type="text" name="pembayaran" placeholder="<?php echo $p->pembayaran?>"></td>
			</tr>
            <tr>
            <td><img src="<?php echo base_url();?>assets/bukti/<?php echo $p->foto;?>" alt="" srcset="" width="100" height="120"></td>
            </tr>
			<tr>
				<td></td>
				<td><input class="btn btn-primary" type="submit" name="submit" value="Submit">
                <a class="btn btn-secondary" href="<?php echo base_url(). 'admin/index'?>">Kembali</a></td>
			</tr>
            <?php } ?>
		</table>
        <?php echo form_close(); ?>
  </div>
  </div>

</body>
</html>