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
							<a href="<?php echo base_url(). 'himatif/index'?>" class="as-nav__link"
								>Home HIMATIF</a
							>
						</li>
						<li class="as-nav__item">
							<a href="<?php echo base_url(). 'himatif/itfast_2'?>" class="as-nav__link">Lomba</a>
						</li>
						<li class="as-nav__item">
							<a href="#partner" class="as-nav__link">Sponsorship</a>
						</li>
                        <li class="as-nav__item">
							<a href="#partner" class="as-nav__link"> Media Partner</a>
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
    <div class="card" style="width: 35rem;">
  <div class="card-header" style="text-align: center;">
    
	<b>E-sport Competition</b><p>“Survival With Your Technologies ”</p>
  </div>
  <div class="card-body">
  <?php echo form_open_multipart('himatif/tambah_aksi_esport');?>
		<table style="margin:20px auto;">
			<tr>
				<td >Nama Tim </td>
				
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
			<tr>
				<td>No HP</td>
				<td><input type="text" name="no_telp"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
            <tr>
				<td>Lomba</td>
				<td> <select name="lomba">
                    <optgroup label="E-Sport Competiton">
                    <option value="Mobile Legend">Mobile Legend</option>
                    <option value="PUBG Mobile">PUBG Mobile</option>
                </select> </td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
            <tr>
				<td>Bukti Pembayaran</td>
			
				<td><input type="file" name="foto"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
			<tr>
			<td></td>
				<td><input type="submit" class="btn btn-success" name="submit" value="Submit"></td>
			</tr>
			<td></td>
		</table>
        <?php echo form_close(); ?>
  </div>
  </div>

</body>
</html>