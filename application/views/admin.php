<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Daftar Mahasiswa Yang Mengikuti Lomba</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('login/logout'); ?>" class="btn btn-success">Logout</a>
	<a href="<?php echo base_url('admin/edit_password'); ?>" class="btn btn-primary">Ubah Password</a>
	<div class="" style="margin-left:0px">
		<table class="mx-auto">
			<tr>
				<td>
					<div class="card" style="width: 18rem;">
						<img src="<?php echo base_url() . 'assets/img/logo/esport.png' ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Esport</h5>
							<p class="card-text">Daftar Mahasiswa Yang Mengikuti Lomba Esport</p>
							<a href="<?php echo base_url() . 'admin/lihat_esport' ?>" class="btn btn-primary">Lihat Peserta</a>
						</div>
					</div>
				</td>
				<td>
					<div class="card" style="width: 18rem;">
						<img src="<?php echo base_url() . 'assets/img/logo/festifal.jpeg' ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">HI FAST</h5>
							<p class="card-text">Daftar  Yang Mengikuti Kegiatan</p>
							<a href="<?php echo base_url() . 'admin/lihat_sport' ?>" class="btn btn-primary">Lihat Peserta</a>
						</div>
					</div>
				</td>

				<td>
					<div class="card" style="width: 18rem;">
						<img src="<?php echo base_url() . 'assets/img/logo/iot.png' ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">IoT</h5>
							<p class="card-text">Daftar Mahasiswa Yang Mengikuti Lomba IoT</p>
							<a href="<?php echo base_url() . 'admin/lihat_iot' ?>" class="btn btn-primary">Lihat Peserta</a>
						</div>
					</div>
				</td>

				<td>
					<div class="card" style="width: 18rem;">
						<img src="<?php echo base_url() . 'assets/img/logo/uiux.png' ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Ui/Ux</h5>
							<p class="card-text">Daftar Mahasiswa Yang Mengikuti Lomba Ui/Ux</p>
							<a href="<?php echo base_url() . 'admin/lihat_uiux' ?>" class="btn btn-primary">Lihat Peserta</a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="card" style="width: 18rem;">
						<img src="<?php echo base_url() . 'assets/img/logo/poster.png' ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Poster</h5>
							<p class="card-text">Daftar Mahasiswa Yang Mengikuti Lomba Poster</p>
							<a href="<?php echo base_url() . 'admin/lihat_poster' ?>" class="btn btn-primary">Lihat Peserta</a>
						</div>
					</div>
				</td>

				<td>
					<div class="card border:2px" style="width: 18rem;">
						<img src="<?php echo base_url() . 'assets/img/logo/film.png' ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Short Movie</h5>
							<p class="card-text">Daftar Mahasiswa Yang Mengikuti Lomba Short Movie</p>
							<a href="<?php echo base_url() . 'admin/lihat_film' ?>" class="btn btn-primary">Lihat Peserta</a>
						</div>
					</div>
				</td>

				<td>
					<div class="card" style="width: 18rem;">
						<img src="<?php echo base_url() . 'assets/img/logo/workshop.png' ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Workshop</h5>
							<p class="card-text">Daftar Mahasiswa Yang Mengikuti Lomba Workshop</p>
							<a href="<?php echo base_url() . 'admin/lihat_workshop' ?>" class="btn btn-primary">Lihat Peserta</a>
						</div>
					</div>
				</td>

				<td>
					<div class="card" style="width: 18rem;">
						<img src="<?php echo base_url() . 'assets/img/logo/semnas.png' ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Seminar Nasional</h5>
							<p class="card-text">Daftar Mahasiswa Yang Mengikuti Lomba Seminar Nasional</p>
							<a href="<?php echo base_url() . 'admin/lihat_semnas' ?>" class="btn btn-primary">Lihat Peserta</a>
						</div>
					</div>
				</td>
			</tr>
		</table>

</body>

</html>