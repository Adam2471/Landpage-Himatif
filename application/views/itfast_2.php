<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="description" content="SPA Example" />
	<meta name="keywords" content="HTML, CSS, JavaScript" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- <link rel="icon" href="<?php echo base_url() ?>assets/img/logo/itfastlogo.png" type="image/gif" sizes="16x16" /> -->
	<link rel="icon" href="<?php echo base_url() ?>assets/img/logo/iconfast5.png" type="image/gif" sizes="16x16" alt="logo fast #5" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style2.css" />
	<title>FAST #5</title>
</head>

<body>
	<header class="as-header" id="header">
		<nav class="as-nav as-container">
			<a href="#" class="as-nav__logo">FAST#5</a>

			<div class="as-nav__menu" id="nav-menu">
				<ul class="as-nav__list">
					<li class="as-nav__item">
						<a href="<?php echo base_url() . 'Himatif/index' ?>" class="as-nav__link">Home HIMATIF</a>
					</li>
					<li class="as-nav__item">
						<a href="#rangkaiankegiatan" class="as-nav__link">Lomba</a>
					</li>
					<li class="as-nav__item">
						<a href="#partner" class="as-nav__link">Sponsorship</a>
					</li>
					<li class="as-nav__item">
						<a href="#partner" class="as-nav__link"> Media Partner</a>
					</li>
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
						tema "#", adapun kegiatan yang ada didalam FAST UPB tahun ini diantaranya adalah Lomba Konfigurasi Jaringan Dengan Mikrotik,
						UI UX Desain, Ngoding Cepat Tepat, IoT, photography, Kegiatan ini dilaksanakan pada 14 September 2025
					</p>
					<br>
					<i class="bi bi-file-pdf-fill">
						<!-- <a href="https://drive.google.com/file/d/16tsRv6rj-BcVsWckjWut6GeIfL7AHmz4/view?usp=sharing" 
						style="border-radius: 5px; background-color: whitesmoke; font-size: large;">Download Guide Book</a> ori -->
						<a href="#"
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
		<br>
		<br>
		<br>
		<br>
		<br>
		<section id="rangkaiankegiatan" class="as-section">
			<div class="as-container">
				<h2 class="as-section__title">Rangkaian Kegiatan</h2>
				<p class="as-section__description">
				<div class="as-grid">
					<!-- lomba 1 -->
					<article class="as-grid__card">
						<div class="as-grid__card-wrapper">
							<h3 class="as-grid__title" style="text-align:center">Badminton Competition</h3>
							<img src="<?php echo base_url() ?>assets/img/logo/badmin.jpg"
								class="as-grid__image" loading="lazy" alt="Pamflet badminton competition" />
							<p class="as-grid__description" style="text-align:center">
								<b>"Smash the Limits: A Sport of Teamwork and Glory"</b>
							</p>
							<br>
							<br>
							<i class="bi bi-calendar-week-fill"></i> 18-21 September 2025</i>
							</br>
							</br>
							<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
							<i class="bi bi-file-pdf-fill">
								<a href="#" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								<!-- <a href="https://drive.google.com/file/d/1PCXLn6APDhyNqyXLR2MbmI0BSaLVtc-M/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a> -->
							</i>
							<br>
							<br>
							<p class="as-grid__description">Contact Person:</p>
							<td class="as-grid__description">
								<a class="bi bi-telephone-fill as-grid__description"
									href="https://api.whatsapp.com/send?phone=6285819282822&text=Hi Kak Okta, 
								Saya ingin bertanya nih tentang Badminton Competition FAST UPB #5">
									085819282822(Dwi Okta)</a>
								</br>
						</div>
					</article>
					<!-- lomba 2 -->

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
									<!-- <a href="<?php echo base_url() . 'himatif/festival_musik' ?>" class="as-grid__button">Daftar</a> -->
				</div>
			</div>
			</article> -->
			</div>
			</div>
		</section>
		<!-- Sponsorship -->

		<section id="partner" class="as-section as-section-soft">
			<div class="as-container">
				<h2 class="as-section__title">Spoonshorship</h2>
				<p class="as-section__description">
					<!-- Lorem ipsum dolor sit amet ore impedit magnam, voluptatibus iusto
						cupiditate.
					</p> -->
				<ul class="as-flex">
					<li class="as-flex__item">
						<img
							src="<?php echo base_url() ?>assets/img/logo/md1.png"
							class="as-flex__image"
							alt="contoh" />
					</li>
					<li class="as-flex__item">
						<img
							src="<?php echo base_url() ?>assets/img/logo/dicoding1.png"
							class="as-flex__image"
							alt="contoh" />
					</li>
					<li class="as-flex__item">
						<img
							src="<?php echo base_url() ?>assets/img/logo/ttk1.png"
							class="as-flex__image"
							alt="contoh" />
					</li>
					<li class="as-flex__item">
						<img
							src="<?php echo base_url() ?>assets/img/logo/zero1.png"
							class="as-flex__image"
							alt="contoh" />
					</li>

					<li class="as-flex__item">
						<img
							src="<?php echo base_url() ?>assets/img/logo/hero1.png"
							class="as-flex__image"
							alt="contoh" />
					</li>
					<li class="as-flex__item">
						<img
							class="as-flex__image"
							alt="" />
					</li>
					<li class="as-flex__item">
						<img
							class="as-flex__image"
							alt="" />
					</li>
					<li class="as-flex__item">
						<img
							class="as-flex__image"
							alt="" />
					</li>

				</ul>
			</div>
		</section>
	</main>

	<!-- End Sponsorship -->


	<!-- Media Partner-->

	<section id="partner" class="as-section as-section-soft">
		<div class="as-container">
			<h2 class="as-section__title">Media Partner </h2>
			<p class="as-section__description">
				<!-- Lorem ipsum dolor sit amet ore impedit magnam, voluptatibus iusto
						cupiditate. -->
			</p>
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
						class="as-flex__image"
						alt="" />
				</li>
				<li class="as-flex__item">
					<img
						class="as-flex__image"
						alt="" />
				</li>
				<li class="as-flex__item">
					<img
						class="as-flex__image"
						alt="" />
				</li>
				<li class="as-flex__item">
					<img
						class="as-flex__image"
						alt="" />
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
	<br>
	<br>
	<br>

	<!-- End Media Partner -->


	<footer id="footer" class="as-section as-footer">
		<div class="as-container">
			<div class="as-footer__container">
				<div class="as-footer__content">
					<!-- <a href="#" class="as-footer__social" aria-label="socmed"
							><i class="bx bxl-facebook"></i
						></a> -->
					<a href="https://www.instagram.com/fastupb/" class="as-footer__social" aria-label="socmed"><i class="bx bxl-instagram"></i></a>
					<!-- <a href="#" class="as-footer__social" aria-label="socmed"
							><i class="bx bxl-twitter"></i
						></a> -->
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
			<p class="as-footer__copy">&#169; 2022 LITBANG</p>
		</div>
	</footer>

	<script src="<?php echo base_url() ?>assets/dist/js/app.js"></script>
</body>

</html>