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
				<a href="<?php echo base_url(). 'himatif/itfast_2'?>" class="as-nav__logo"> IT FAST # 2</a>

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
    <div class="card" style="width: 45rem;">
  <div class="card-header" style="text-align: center;">
    
	<b>Short Movie Competition</b><p>“Rise Up Tech Economic In Pandemic”</p>
  </div>
  <div class="card-body">
  <form method='post' action='<?php echo base_url(). 'himatif/tambah_aksi_lomba_film'; ?>' enctype='multipart/form-data'>
		<table style="margin:40px auto;">
			<tr>
				<td>Nama Ketua Tim</td>
				<td><input type="text" name="nama_ketua"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
			<tr>
				<td>Nama Tim</td>
				<td><input type="text" name="nama_tim"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
			<tr>
				<td>Asal Kampus/Instansi</td>
				<td><input type="text" name="asal"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
			<tr>
				<td>No HP</td>
				<td><input type="text" name="no_tlp"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
			<tr>
				<td><input type="hidden" name="lomba" value="short movie"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
            <tr>
				<td>link Dokumen Pendukung</td>
				<td><input type="text" name="dokumen"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
			<tr>
				<td>Bukti Pembayaran</td>
				<td><input type="file" name="foto"></td>
			</tr>
			</tr>
			<td colspan="2"><p style="font-size:10px;" ><b>Note :</b> Masukan hasil karya orisinil dan ktm dalam bentuk zip/rar lalu diupload ke google drive dan sertakan link google drive ke Link Dokumen Pendukung</p></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-success" name="submit" value="Submit"></td>
			</tr>
		</table>
</form>
  </div>
  </div>

</body>
</html>