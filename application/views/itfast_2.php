<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="description" content="SPA Example" />
	<meta name="keywords" content="HTML, CSS, JavaScript" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- ini di komen <link rel="icon" href="<?php echo base_url() ?>assets/img/logo/itfastlogo.png" type="image/gif" sizes="16x16" />  -->
	<link rel="icon" href="<?php echo base_url() ?>assets/img/logo/iconfast5.png" type="image/gif" sizes="16x16" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app.css" />
	<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style2.css" /> -->
	<title>FAST #5</title>
</head>

<body>
	<header class="as-header" id="header">
		<nav class="as-nav as-container">
			<a href="#" class="as-nav__logo">FAST#5</a>

			<!-- Tombol Hamburger -->
			<!-- <button class="navbar-toggler d-lg-none" type="button"
				data-bs-toggle="collapse"
				data-bs-target="#asNavbar"
				aria-controls="asNavbar"
				aria-expanded="false"
				aria-label="Toggle navigation">
				
				<span class="navbar-toggler-icon"></span>
			</button> -->

			<div class="as-nav__menu" id="nav-menu">
				<ul class="as-nav__list">
					<li class="as-nav__item">
						<a href="<?php echo base_url() . 'Himatif/index' ?>" class="as-nav__link">Home HIMATIF</a>
					</li>
					<li class="as-nav__item">
						<a href="#rangkaiankegiatan" class="as-nav__link">Lomba</a>
					</li>
					<li class="as-nav__item">
						<a href="#sponsor" class="as-nav__link">Sponsorship & Media Partner</a>
					</li>
					<!-- <li class="as-nav__item">
						<a href="#partner" class="as-nav__link">Media Partner</a>
					</li> -->
					<li class="as-nav__item">
						<a href="<?php echo base_url() . 'himatif/contact' ?>" class="as-nav__link"> Contact</a>
					</li>
				</ul>
			</div>

			<div class="as-nav__toggle" id="nav-toggle">
				<i class="bx bx-menu"></i>
			</div>
		</nav>
	</header>


	<main class="as-main">
		<section id="home" class="as-hero">
			<div class="as-hero__container as-container">
				<div class="as-hero__data">
					<p class="as-hero__title">Hallo Sahabat HIMATIF</p>
					<p class="" style="text-align: justify;">
						Hallo semuanya, FAST UPB 2025 (Festival Ajang Sinergisitas Teknologi Universitas Pelita Bangsa)
						yang merupakan acara tahunan HIMATIF - Univ. Pelita Bangsa. FAST UPB 2025 mengusung
						tema "Connect and Create Innovation for a Smarter World", banyak kegiatan menarik nya lhoo.. 
						untuk lebih detailnya silahkan download guide book yang tertera.
					</p>
					<br>
					<i class="bi bi-file-pdf-fill">
						<!-- <a href="https://drive.google.com/file/d/16tsRv6rj-BcVsWckjWut6GeIfL7AHmz4/view?usp=sharing" 
						style="border-radius: 5px; background-color: whitesmoke; font-size: large;">Download Guide Book</a> ori -->
						<a href="https://drive.google.com/file/d/1dQkzQDoh8Sj6o_8hAV-8WIFpJPG4FYXU/view?usp=sharing"
							style="border-radius: 5px; background-color: whitesmoke; font-size: large;">Download Guide Book</a>
					</i>


				</div>

				<img
					src="<?php echo base_url() ?>assets/img/logo/fast5.jpg"
					loading="lazy"
					class="as-hero__img"
					alt="logo fast #5" />
			</div>
		</section>
		<!-- <br>
		<br>
		<br>
		<br>
		<br> -->
		<section id="itfast" class="as-section">
			<div class="as-container">
				<h2 class="as-section__title">Rangkaian Kegiatan IT FAST #5</h2>
				<p class="as-section__description">
				<div class="as-grid">

					<!-- it fast start -->
					<!-- lomba 1 -->
					<article class="as-grid__card">
						<div class="as-grid__card-wrapper">
							<h3 class="as-grid__title" style="text-align:center">Mikrotik Competition</h3>
							<img src="<?php echo base_url() ?>assets/img/proker/mikrotik25.jpg"
								class="as-grid__image" loading="lazy" alt="Pamflet lomba mikrotik" />
							<p class="as-grid__description" style="text-align:center">
								<b>"Smart and secure Network Configuration With Mikrotik"</b>
							</p>

							<i class="bi bi-calendar-week-fill"></i> 21 September 2025

							<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
							<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/1oIS2buYnnVcEFJzr4O6-Cw2q29GEl3CW/view?usp=sharing"
									style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								<!-- <a href="https://drive.google.com/file/d/1PCXLn6APDhyNqyXLR2MbmI0BSaLVtc-M/view?usp=sharing" 
								 style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a> -->
							</i>
							<br>
							<br>
							<p class="as-grid__description">Contact Person:</p>
							<td class="as-grid__description">
								<a class="bi bi-telephone-fill as-grid__description"
									href="https://api.whatsapp.com/send?phone=6289506047143&text=Hi%20Kak%20Adam%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20Konfigurasi%20Mikrotik%20FAST%20UPB%20%235"
									target="_blank">
									0895-0604-7143 (Adam Mubarok)
								</a>
								</br>
						</div>
					</article>
					<!-- lomba 2 -->
					<article class="as-grid__card">
						<div class="as-grid__card-wrapper">
							<h3 class="as-grid__title" style="text-align:center">Ngoding Cepat Tepat</h3>
							<img src="<?php echo base_url() ?>assets/img/proker/nct25.jpg"
								class="as-grid__image" loading="lazy" alt="Pamflet ngoding cepat tepat" />
							<p class="as-grid__description" style="text-align:center">
								<b>"Flexibillity Code for Smart Solutions"</b>
							</p>

							<i class="bi bi-calendar-week-fill"></i> 21 September 2025</i>

							<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
							<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/1bPu2aiJXKeKAPY2uInvvHNeGzfswl9Vr/view?usp=drivesdk"
									style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								<!-- <a href="https://drive.google.com/file/d/1PCXLn6APDhyNqyXLR2MbmI0BSaLVtc-M/view?usp=sharing" 
								 style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a> -->
							</i>
							<br>
							<br>
							<p class="as-grid__description">Contact Person:</p>
							<td class="as-grid__description">
								<!-- <a class="bi bi-telephone-fill as-grid__description"
									href="https://api.whatsapp.com/send?phone=+6285880528744&text=Hi%Kak%Aji, 
								Saya ingin bertanya nih tentang lomba Ngoding cepat tepat FAST UPB #5">
									085880528744(Radjikin Septiawan)</a> -->
								<a class="bi bi-telephone-fill as-grid__description"
									href="https://api.whatsapp.com/send?phone=6285880528744&text=Hi%20Kak%20Aji%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20Ngoding%20cepat%20tepat%20FAST%20UPB%20%235"
									target="_blank">
									085880528744 (Radjikin Septiawan)
								</a>

								</br>
						</div>
					</article>
					<!-- lomba 3 -->
					<article class="as-grid__card">
						<div class="as-grid__card-wrapper">
							<h3 class="as-grid__title" style="text-align:center">UI UX Design</h3>
							<img src="<?php echo base_url() ?>assets/img/proker/uiux25.jpg"
								class="as-grid__image" loading="lazy" alt="Pamflet UI UX" />
							<p class="as-grid__description" style="text-align:center">
								<b>"Digital Transformation: Integrating Humans, Technology And Data"</b>
							</p>

							<i class="bi bi-calendar-week-fill"></i> 21 September 2025</i>

							<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
							<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/1dQkzQDoh8Sj6o_8hAV-8WIFpJPG4FYXU/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								<!-- <a href="https://drive.google.com/file/d/1PCXLn6APDhyNqyXLR2MbmI0BSaLVtc-M/view?usp=sharing" 
								 style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a> -->
							</i>
							<br>
							<br>
							<p class="as-grid__description">Contact Person:</p>
							<td class="as-grid__description">
								<a class="bi bi-telephone-fill as-grid__description"
									href="https://api.whatsapp.com/send?phone=6282240000710&text=Hi%20Kak%20Zizan%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20UI%20UX%20FAST%20UPB%20%235"
									target="_blank">
									082240000710(Zizantara)</a>
								</br>
						</div>
					</article>
					<!-- lomba 4 -->
					<article class="as-grid__card">
						<div class="as-grid__card-wrapper">
							<h3 class="as-grid__title" style="text-align:center">IoT Competition</h3>
							<img src="<?php echo base_url() ?>assets/img/proker/iot25.jpg"
								class="as-grid__image" loading="lazy" alt="Pamflet lomba IoT" />
							<p class="as-grid__description" style="text-align:center">
								<b>"Smart Living With IoT: Inovasi Otomatisasi Untuk Kehidupan Sehari hari"</b>
							</p>

							<i class="bi bi-calendar-week-fill"></i> 21 September 2025</i>

							<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
							<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/1dQkzQDoh8Sj6o_8hAV-8WIFpJPG4FYXU/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								<!-- <a href="https://drive.google.com/file/d/1PCXLn6APDhyNqyXLR2MbmI0BSaLVtc-M/view?usp=sharing" 
								 style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a> -->
							</i>
							<br>
							<br>
							<p class="as-grid__description">Contact Person:</p>
							<td class="as-grid__description">
								<a class="bi bi-telephone-fill as-grid__description"
									href="https://api.whatsapp.com/send?phone=6289665733153&text=Hi%20Kak%20Ari%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20IoT%20FAST%20UPB%20%235"
									target="_blank">
									089665733153(Ari Cakra)</a>
								</br>
						</div>
					</article>
					<!-- lomba 5 -->
					<article class="as-grid__card">
						<div class="as-grid__card-wrapper">
							<h3 class="as-grid__title" style="text-align:center">Photography Competition</h3>
							<img src="<?php echo base_url() ?>assets/img/proker/fg25.jpg"
								class="as-grid__image" loading="lazy" alt="Pamflet lomba photography" />
							<p class="as-grid__description" style="text-align:center">
								<b>"Waktu Yang Membisu, Lensa Yang Bersuara"</b>
							</p>

							<i class="bi bi-calendar-week-fill"></i> 21 September 2025</i>

							<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
							<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/1dQkzQDoh8Sj6o_8hAV-8WIFpJPG4FYXU/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								<!-- <a href="https://drive.google.com/file/d/1PCXLn6APDhyNqyXLR2MbmI0BSaLVtc-M/view?usp=sharing" 
								 style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a> -->
							</i>
							<br>
							<br>
							<p class="as-grid__description">Contact Person:</p>
							<td class="as-grid__description">
								<a class="bi bi-telephone-fill as-grid__description"
									href="https://api.whatsapp.com/send?phone=6289617770937&text=Hi%20Kak%20Youvanda%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20Photography%20FAST%20UPB%20%235"
									target="_blank">
									089617770937(Youvanda)</a>
								</br>
						</div>
					</article>
				</div>
				</article>
			</div>
			</div>
		</section>
		<!-- it fast end -->

		<!-- himscope start -->
		<section id="himscope" class="as-section">
			<div class="as-container">
				<h2 class="as-section__title">Rangkaian Kegiatan HIMSCOPE #5</h2>
				<p class="as-section__description">
				<div class="as-grid">

					<!-- lomba 1 -->
					<article class="as-grid__card">
						<div class="as-grid__card-wrapper">
							<h3 class="as-grid__title" style="text-align:center">Badminton Competition</h3>
							<img src="<?php echo base_url() ?>assets/img/proker/badmin25.jpg"
								class="as-grid__image" loading="lazy" alt="Pamflet badminton competition" />
							<p class="as-grid__description" style="text-align:center">
								<b>"Smash the Limits: A Sport of Teamwork and Glory"</b>
							</p>

							<i class="bi bi-calendar-week-fill"></i> 25-28 September 2025</i>

							<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
							<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/1oPdmDsxWDy0bjnEsk_IMEfhc5t3lSXB0/view?usp=drivesdk"
									style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								<!-- <a href="https://drive.google.com/file/d/1PCXLn6APDhyNqyXLR2MbmI0BSaLVtc-M/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a> -->
							</i>
							<br>
							<br>
							<p class="as-grid__description">Contact Person:</p>
							<td class="as-grid__description">
								<a class="bi bi-telephone-fill as-grid__description"
									href="https://api.whatsapp.com/send?phone=6285819282822&text=Hi%20Kak%20Okta%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20Badminton%20FAST%20UPB%20%235"
									target="_blank">
									085819282822(Dwi Okta)</a>
								</br>
						</div>
					</article>
					<!-- lomba 2 -->
					<article class="as-grid__card">
						<div class="as-grid__card-wrapper">
							<h3 class="as-grid__title" style="text-align:center">Futsal Competition</h3>
							<img src="<?php echo base_url() ?>assets/img/proker/futsal25.jpg"
								class="as-grid__image" loading="lazy" alt="Pamflet Futsal competition" />
							<p class="as-grid__description" style="text-align:center">
								<b>"Unite In The Game, Achive In The Match"</b>
							</p>

							<i class="bi bi-calendar-week-fill"></i> 04-05 Oktober 2025</i>

							<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
							<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/1dQkzQDoh8Sj6o_8hAV-8WIFpJPG4FYXU/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								<!-- <a href="https://drive.google.com/file/d/1PCXLn6APDhyNqyXLR2MbmI0BSaLVtc-M/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a> -->
							</i>
							<br>
							<br>
							<p class="as-grid__description">Contact Person:</p>
							<td class="as-grid__description">
								<a class="bi bi-telephone-fill as-grid__description"
									href="https://api.whatsapp.com/send?phone=6289626842218&text=Hi%20Kak%20Gilang%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20Futsal%20FAST%20UPB%20%235"
									target="_blank">
									089626842218 (Gilang)</a>
								</br>
						</div>
					</article>

					<!-- lomba 3 -->
					<article class="as-grid__card">
						<div class="as-grid__card-wrapper">
							<h3 class="as-grid__title" style="text-align:center">ML Competition</h3>
							<img src="<?php echo base_url() ?>assets/img/proker/ml25.jpg"
								class="as-grid__image" loading="lazy" alt="Pamflet Futsal competition" />
							<p class="as-grid__description" style="text-align:center">
								<b>"Battle Of Titans"</b>
							</p>

							<i class="bi bi-calendar-week-fill"></i> 11-12 Oktober 2025</i>

							<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
							<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/1dQkzQDoh8Sj6o_8hAV-8WIFpJPG4FYXU/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								<!-- <a href="https://drive.google.com/file/d/1PCXLn6APDhyNqyXLR2MbmI0BSaLVtc-M/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a> -->
							</i>
							<br>
							<br>
							<p class="as-grid__description">Contact Person:</p>
							<td class="as-grid__description">
								<a class="bi bi-telephone-fill as-grid__description"
									href="https://api.whatsapp.com/send?phone=6281617587624&text=Hi%20Kak%20Bagus%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20Mobile%20Legend%20FAST%20UPB%20%235"
									target="_blank">
									081617587624(Bagus)</a>
								</br>
						</div>
					</article>
					<!-- himscope end -->

					<!-- original layout -->
					<!-- <article class="as-grid__card">
						<div class="as-grid__card-wrapper">
							<h3 class="as-grid__title" style="text-align:center">Festival Musik</h3>
							<img
								src="<?php echo base_url() ?>assets/img/logo/festifal.jpeg"
								class="as-grid__image"
								loading="lazy"
								alt="contoh" />

							<br>
							<br>

							<i class="bi bi-calendar-week-fill"> Minggu, 02 Oktober 2022</i>
							<br>
							<i class="bi bi-geo-alt"> Universitas Pelita Bangsa</i>
							<br>
							<i class="bi bi-clock"> 14.00 WIB - Selesai</i>
							</br>

							<p class="as-grid__description" </p>
							<div class="as-grid__button-wrapper" style="text-align:center">
								<a href="https://www.loket.com/event/hi-fastupb" class="as-grid__button">Buy Ticket HI-FAST</a>
							</div>

							<p class="as-grid__description" style="text-align:center">
								<b>OPEN REGISTRASI PANGGUNG MUSIK</b>
							</p>
							<P>Yuuk yang memiliki Band musik/ Solo/ Team musik </P>
							<i class="bi bi-ticket-perforated"> Only : Rp. 150.000,-/Tim </i>
							<br>
							<br>
							<p class="as-grid__description" style="text-align:center">
								<b>OPEN REGISTRASI BAZAR</b>
							</p>
							<p>Punya Usaha atau kalian UMKM? Yuk Kenalkan Produk usaha kalian dan ikut Bazaar bersama FAST UPB 2022</p>

							<i class="bi bi-ticket-perforated"> Only : Rp.250.000,- /Stand </i>
							</br>
							<i class="bi bi-pin-angle-fill"> 2,5 x 2,5 Meter(Ukuran stand)</i>
							</br>
							<i class="bi bi-pin-map-fill"> Universitas Pelita Bangsa</i>
							</br>
							</br>
							<p>Metode Pembayaran</p>
							<i class="bi bi-credit-card-2-back"> Bank KEB Hana bank 17428761493 An Nabila Nurmiftahul Janah</i>
							</br>
							</br>
							<i class="bi bi-credit-card-2-back"> Dana 085725271791 An Septya Noer Anggraeni</i>
							</br>
							</br>
							<p>Silahkan klik daftar untuk open registrasi Bazar dan Panggung Musik</p>
							<p class="as-grid__description">Contact Person:</p>
							<td class="as-grid__description"><a class="bi bi-telephone-fill as-grid__description " href="https://api.whatsapp.com/send?phone=6282359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang Open Panggung dan Bazar ">0823-5906-8891(Risma)</a>
								</i>

								</br>
								<i class="bi bi-instagram">
									<a href="https://www.instagram.com/fastupb/" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">@himatif_pb</a>
								</i>
								<br>


								<div class="as-grid__button-wrapper" style="text-align:center">
									<a href="<?php echo base_url() . 'himatif/lomba_sport' ?>" class="as-grid__button">Daftar</a>
								</div>


								<br>
								<div class="as-grid__button-wrapper">
								<a href="<?php echo base_url() . 'himatif/festival_musik' ?>" class="as-grid__button">Daftar</a>
				</div>
			</div>
			</article> -->
				</div>
			</div>
		</section>

		<!-- start Sponsorship-->
		<section id="sponsor" class="as-section as-section-soft">
			<div class="as-container">
				<h2 class="as-section__title">Spoonshorship</h2>
				<p class="as-section__description">
				<ul class="as-flex">
					<!-- <li class="as-flex__item">
						<img src="<?php echo base_url() ?>assets/img/logo/md1.png"
							class="as-flex__image" alt="md1" />
					</li>
					<li class="as-flex__item">
						<img src="<?php echo base_url() ?>assets/img/logo/dicoding1.png"
							class="as-flex__image" alt="dicoding" />
					</li> -->
					<li class="as-flex__item">
						<img src="<?php echo base_url() ?>assets/img/logo/logo_sariroti.png"
							class="as-flex__image" alt="sariroti" />
					</li>
					<li class="as-flex__item">
						<img src="<?php echo base_url() ?>assets/img/logo/zero1.png"
							class="as-flex__image" alt="zero" />
					</li>
					<li class="as-flex__item">
						<img src="<?php echo base_url() ?>assets/img/logo/hero1.png"
							class="as-flex__image" alt="hero" />
					</li>
				</ul>
			</div>
		</section>
	</main>
	<!-- End Sponsorship -->

	<!-- start Media Partner-->
	<section id="partner" class="as-section as-section-soft">
		<div class="as-container">
			<h2 class="as-section__title">Media Partner </h2>
			<p class="as-section__description"></p>
			<ul class="as-flex">
				<li class="as-flex__item">
					<img
						src="<?php echo base_url() ?>assets/img/logo/terkenal1.png"
						class="as-flex__image"
						alt="terkenal" />
				</li>
				<li class="as-flex__item">
					<img
						src="<?php echo base_url() ?>assets/img/logo/cb.png"
						class="as-flex__image"
						alt="cb" />
				</li>
				<li class="as-flex__item">
					<img
						src="<?php echo base_url() ?>assets/img/logo/guecikarang.png"
						class="as-flex__image"
						alt="guecikarang" />
				</li>
				<li class="as-flex__item">
					<img
						src="<?php echo base_url() ?>assets/img/logo/dikti.png"
						class="as-flex__image"
						alt="dikti" />
				</li>
				<li class="as-flex__item">
					<img
						src="<?php echo base_url() ?>assets/img/logo/POJOKAMPUS.png"
						class="as-flex__image"
						alt="pojokkampus" />
				</li>
			</ul>
		</div>
	</section>
	</main>
	<!-- <br> -->
	<!-- <br> -->
	<!-- <br> -->

	<!-- End Media Partner -->


	<footer id="footer" class="as-section as-footer">
		<div class="as-container">
			<div class="as-footer__container">
				<div class="as-footer__content">
					<a href="https://www.instagram.com/himscope.fastupb?igsh=MWpmOXY5NXJnc2tl" class="as-footer__social" aria-label="socmed"><i class="bx bxl-instagram"></i></a>
					<a href="https://www.youtube.com/channel/UC7SGrlmtAaBh2XTPpSO2Gfg" class="as-footer__social" aria-label="socmed"><i class="bx bxl-youtube"></i></a>
				</div>

				<div class="as-footer__content">
					<a href="<?php echo base_url() . 'Himatif/contact' ?>" class="as-footer__link">List Contact Person Event</a>
				</div>

				<div class="as-footer__content">
					<a href="#" class="as-footer__link">Syarat & Ketentuan</a>
				</div>

				<div class="as-footer__content">
					<a href="#" class="as-footer__link">Kebijakan Privasi</a>
				</div>
			</div>
			<!-- <p class="as-footer__copy">&#169; Himatif <?php echo date('Y'); ?> Dept Litbang</p> -->
			<p class="as-footer__copy">© Himatif <span id="year"></span>Dept Litbang</p>

			<script>
				document.getElementById("year").textContent = new Date().getFullYear();
			</script>

			<script>
				const navMenu = document.getElementById("nav-menu");
				const navToggle = document.getElementById("nav-toggle");

				if (navToggle && navMenu) {
					navToggle.addEventListener("click", () => {
						navMenu.classList.toggle("show-menu");
					});
				}
			</script>


		</div>
	</footer>
	<script src="<?php echo base_url() ?>assets/dist/js/app.js"></script>
	<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>