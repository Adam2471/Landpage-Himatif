<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content="SPA Example" />
		<meta name="keywords" content="HTML, CSS, JavaScript" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo base_url() ?>assets/img/logo/itfastlogo.png" type="image/gif" sizes="16x16" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<link
			href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style2.css" />

		<title>IT FAST # 2</title>
	</head>

	<body>
		<header class="as-header" id="header">
			<nav class="as-nav as-container">
				<a href="#" class="as-nav__logo"> HI FAST # 2</a>

				<div class="as-nav__menu" id="nav-menu">
					<ul class="as-nav__list">
						<li class="as-nav__item">
							<a href="<?php echo base_url(). 'Himatif/index'?>" class="as-nav__link"
								>Home HIMATIF</a
							>
						</li>
						<li class="as-nav__item">
							<a href="#rangkaiankegiatan" class="as-nav__link" >Lomba</a>
						</li>
						<li class="as-nav__item">
							<a href="#partner" class="as-nav__link">Sponsorship</a>
						</li>
                        <li class="as-nav__item">
							<a href="#partner" class="as-nav__link"> Media Partner</a>
						</li>
						<li class="as-nav__item">
							<a href="<?php echo base_url(). 'himatif/contact'?>" class="as-nav__link"> Contact</a>
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
							Hallo semuanya, FAST UPB 2022 (Festival Ajang Sinergisitas Teknologi Universitas Pelita Bangsa) yang merupakan acara tahunan HIMATIF - Univ. Pelita Bangsa. FAST UPB 2022 mengusung tema "Improve your skills with technology and creative economy" , adapun kegiatan yang ada didalam FAST UPB tahun ini diantaranya Lomba Futsal, Badminton, Film, E-Sport, Seminar Nasional, Workshop, Bazar dan Festival Musik. Kegiatan ini dimulai pada 13 Agustus - 18 september 2022
						</p>
                        <br>
						<i class="bi bi-file-pdf-fill">
						<a href="https://drive.google.com/file/d/16tsRv6rj-BcVsWckjWut6GeIfL7AHmz4/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: large;">Download Guide Book</a>
						</i>
                       
						
					</div>

					<img
						src="<?php echo base_url() ?>assets/img/logo/FASTUPB.png"
						loading="lazy"
						class="as-hero__img"
						alt="hero"
					/>
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
						<!-- Lorem ipsum dolor sit amet ore impedit magnam, voluptatibus iusto
						cupiditate.
					</p> -->
					<div class="as-grid">
					    <article class="as-grid__card">
							
							<div class="as-grid__card-wrapper">
								<h3 class="as-grid__title" style = "text-align:center">Sport Competition</h3>
								<img
									src="<?php echo base_url() ?>assets/img/logo/sportt.png"
									class="as-grid__image"
									loading="lazy"
									alt="contoh"
								/>
								<p class="as-grid__description" style = "text-align:center">
								 <b>“Real Strength is Teamwork”</b>

								</p>
								<br>
								<br>
								<i class="bi bi-calendar-week-fill"></i>	01-14 Agustus</i>
								</br>
								</br>
								<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
								
								<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/1PCXLn6APDhyNqyXLR2MbmI0BSaLVtc-M/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								</i>
								<br>
								<br>
								<p class="as-grid__description">Contact Person:</p>
								<td class="as-grid__description"><a class="bi bi-telephone-fill as-grid__description " href="https://api.whatsapp.com/send?phone=6285779545469&text=Hi kak Romdhon, Saya ingin bertanya nih tentang Sport Competition FAST UPB"> 0857-7954-5469(Romdhon)</a>
								</br>
								<!--<div class="as-grid__button-wrapper">-->
								<!--	<a href="<?php echo base_url().'himatif/lomba_sport'?>" class="as-grid__button">Daftar</a>-->
								<!--</div>-->
							</div>
						</article>
						<article class="as-grid__card">
						    
							<div class="as-grid__card-wrapper">
								<h3 class="as-grid__title" style = "text-align:center">E-sport Competition</h3>
	
								
								<img
									src="<?php echo base_url() ?>assets/img/logo/MLClosed.jpeg"
									class="as-grid__image"
									loading="lazy"
									alt="contoh"
								/>
								<p class="as-grid__description" style = "text-align:center">
								<b>“Survival With Your Technologies ”</b>
								</p>
								<br>
								<br>
								<i class="bi bi-calendar-week-fill"></i>	03-20 Agustus</i>
								</br>
								</br>
								<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
								
								<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/1PCXLn6APDhyNqyXLR2MbmI0BSaLVtc-M/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								</i>
								<br>
								<br>
								<p class="as-grid__description">Contact Person:</p>
								<td class="as-grid__description"><a class="bi bi-telephone-fill as-grid__description " href="https://api.whatsapp.com/send?phone=6289636802874&text=Hi kak Dzikri, Saya ingin bertanya nih tentang E-sport Competition FAST UPB"> 0896-3680-2874(Dzikri)</a>
								</br>
								<!--<div class="as-grid__button-wrapper">-->
								<!--	<a href="<?php echo base_url().'himatif/lomba_esport'?>" class="as-grid__button" >Daftar</a>-->
								<!--</div>-->
							</div>
						</article>
						
						<article class="as-grid__card">
							
							<div class="as-grid__card-wrapper">
								<h3 class="as-grid__title" style="text-align:center">IOT Competition</h3>
								<img
									src="<?php echo base_url() ?>assets/img/logo/NewIOT.jpeg"
									class="as-grid__image"
									loading="lazy"
									alt="contoh"
								/>

								<p class="as-grid__description " style="text-align:center">
								<b>“Internet of Things for create smart innovation in the economic”</b>
								</p>
								<br>
								
								<i class="bi bi-calendar-week-fill"></i> 11 juni 2022</i>
								</br>
								</br>
								<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
								
								<i class="bi bi-file-pdf-fill">
									<a href="https://drive.google.com/file/d/1riHeHrORZ5a0Uj17InUxng63P-OG16dD/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
									</i>
									<br>
									<br>

								<p class="as-grid__description ">Silahkan Download File Tamplate Proposal IOT dan Surat Keaslian Karya:
								<a  href="<?php echo base_url().'assets/doc/teamplateproposal.pdf'?>"><p class="as-grid__description bi bi-file-pdf-fill" >TeamplateProposal.pdf</p></a>
								
								<a href="<?php echo base_url().'assets/doc/orisinilIOT.pdf'?>"><p class="as-grid__description bi bi-file-pdf-fill">SuratPeryataanKeaslianKarya.pdf<p></p></a>
								</p>
								<br>
								<br>
								<p class="as-grid__description">Contact Person:</p>
								<td class="as-grid__description "><a class="bi bi-telephone-fill as-grid__description " href="https://api.whatsapp.com/send?phone=62895326388827&text=Hi kak Dzikri, Saya ingin bertanya nih tentang IOT Competition FAST UPB"> 0895-3263-88827(Linda)</a>
								
								<!--<div class="as-grid__button-wrapper">-->
								<!--	<a href="<?php echo base_url().'himatif/lomba_iot'?>" class="as-grid__button">Daftar</a>-->
								<!--</div>-->
							</div>
						</article>
						<article class="as-grid__card">
							
							<div class="as-grid__card-wrapper">
								<h3 class="as-grid__title" style = "text-align:center">UI/UX Competition</h3>
								<img
									src="<?php echo base_url() ?>assets/img/logo/uiuxclosed.jpeg"
									class="as-grid__image"
									loading="lazy"
									alt="contoh"
								/>
								<p class="as-grid__description" style = "text-align:center">
								<b>“Implementation of Digital Technologies for Inclusive Future.”</b>
								</p>
								<br>
								<br>
								<i class="bi bi-calendar-week-fill"></i>	08-21 Agustus</i>
								<br>
								<br>
								<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
								<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/1Kt4lSiiIeMWEnpWtAMXzG_K-2ACOzkAq/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								</i>
								<br>
								<br>
								<p class="as-grid__description ">Silahkan Download File Tamplate Proposal UI/UX dan Surat Keaslian Karya:
								<a  href="<?php echo base_url().'assets/doc/teamplateproposalUIUX.pdf'?>"><p class="as-grid__description bi bi-file-pdf-fill" >TeamplateProposal.pdf</p></a>
								
								<a href="<?php echo base_url().'assets/doc/orisinilUIUX.pdf'?>"><p class="as-grid__description bi bi-file-pdf-fill">SuratPeryataanKeaslianKarya.pdf<p></p></a>
								</p>
								<br>
								<br>
								<p class="as-grid__description">Contact Person:</p>
								<td class="as-grid__description"><a class="bi bi-telephone-fill as-grid__description " href="https://api.whatsapp.com/send?phone=6282239715799&text=Hi kak Rino, Saya ingin bertanya nih tentang UI/UX Competition FAST UPB"> 0822-3971-5799(Rino)</a>
								<!--<div class="as-grid__button-wrapper">-->
								<!--	<a href="<?php echo base_url().'himatif/lomba_uiux'?>" class="as-grid__button">Daftar</a>-->
								<!--</div>-->
							</div>
						</article>
						<article class="as-grid__card">
							
							<div class="as-grid__card-wrapper">
								<h3 class="as-grid__title" style = "text-align:center">Poster Competition</h3>
								<img
									src="<?php echo base_url() ?>assets/img/logo/posterclosed.jpeg"
									class="as-grid__image"
									loading="lazy"
									alt="contoh"
								/>
								<p class="as-grid__description" style = "text-align:center">
								<b>“Menjadikan Ekonomi Kreatif Sebagai Budaya Bangsa ditengah Kemajuan Teknologi”</b>
								</p>
								<br>
								<i class="bi bi-calendar-week-fill"></i>	08-21 Agustus</i>
								<br>
								<br>
								<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
								<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/15gNCpLuiwDKrKTiRi89vsV0Mw5sBdPJ2/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								</i>
								<br>
								<br>
								<p class="as-grid__description ">Silahkan Download File Surat Keaslian Karya:
								<a href="<?php echo base_url().'assets/doc/Karya Orisinil Poster.pdf'?>"><p class="as-grid__description bi bi-file-pdf-fill">SuratPeryataanKeaslianKarya.pdf<p></p></a>
								</p>
								<br>
								<br>
								
								<p class="as-grid__description">Contact Person:</p>
								<td class="as-grid__description"><a class="bi bi-telephone-fill as-grid__description " href="https://api.whatsapp.com/send?phone=6289512735024&text=Hi kak Dinda, Saya ingin bertanya nih tentang Poster Competition FAST UPB"> 0895-1273-5024(Dinda)</a>
								<!--<div class="as-grid__button-wrapper">-->
								<!--	<a href="<?php echo base_url().'himatif/lomba_poster'?>" class="as-grid__button">Daftar</a>-->
								<!--</div>-->
							</div>
						</article>
						<article class="as-grid__card">
							
							<div class="as-grid__card-wrapper">
								<h3 class="as-grid__title" style = "text-align:center">Short Film Competition</h3>
								<img
									src="<?php echo base_url() ?>assets/img/logo/shortmovieclosed.jpeg"
									class="as-grid__image"
									loading="lazy"
									alt="contoh"
								/>
								<p class="as-grid__description" style = "text-align:center">
								<b>“Rise Up Tech Economic In Pandemic”</b>
								</p>
								<br>
								<br>
								<br>
								<i class="bi bi-calendar-week-fill"></i>	08-21 Agustus</i>
								<br>
								<br>
								<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
								<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/19pT8mdGJT4x435RRI05fVYxQ7KF2p5hb/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								<br>
								<br>
								<p class="as-grid__description ">Silahkan Download File Surat Keaslian Karya:		
								<a href="<?php echo base_url().'assets/doc/orisinilUIUX.pdf'?>"><p class="as-grid__description bi bi-file-pdf-fill">SuratPeryataanKeaslianKarya.pdf<p></p></a>
								</p>
								<br>
								<br>
								<p class="as-grid__description">Contact Person:</p>
								<td class="as-grid__description"><a class="bi bi-telephone-fill as-grid__description " href="https://api.whatsapp.com/send?phone=6285353985886&text=Hi kak Anggi, Saya ingin bertanya nih tentang Short Movie Competition FAST UPB"> 0853-5398-5886(Anggi)</a>
								</i>
								<!--<div class="as-grid__button-wrapper">-->
								<!--	<a href="<?php echo base_url().'himatif/lomba_film'?>" class="as-grid__button">Daftar</a>-->
								<!--</div>-->
							</div>
						</article>
						<article class="as-grid__card">
							
							<div class="as-grid__card-wrapper">
								<h3 class="as-grid__title" style = "text-align:center">Workshop</h3>
								<img
									src="<?php echo base_url() ?>assets/img/logo/ClosedWorkshop.jpeg"
									class="as-grid__image"
									loading="lazy"
									alt="contoh"
								/>
								<p class="as-grid__description" style = "text-align:center">
								<b>“Networking & Programming”</b>

								</p>
								<br>
								<br>
								<br>
								<i class="bi bi-calendar-week-fill"></i> 03 September 2022</i>
								
								<br>
								<br>
								<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
								<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/19pT8mdGJT4x435RRI05fVYxQ7KF2p5hb/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								</i>
								<br>
								<br>
								<p class="as-grid__description">Contact Person:</p>
								<td class="as-grid__description"><a class="bi bi-telephone-fill as-grid__description " href="https://api.whatsapp.com/send?phone=62895320030852&text=Hi kak Fajar, Saya ingin bertanya nih tentang Workshop  FAST UPB"> 0895-3200-30852(Fajar)</a>
								</i>
								<br>
								<br>
								<div class="as-grid__button-wrapper">
									<!--<a href="<?php echo base_url().'himatif/workshop'?>" class="as-grid__button">Daftar</a>-->
								</div>
							</div>
						</article>	
						<article class="as-grid__card">
							
							<div class="as-grid__card-wrapper">
								<h3 class="as-grid__title" style = "text-align:center">SEMINAR NASIONAL</h3>
								<img
									src="<?php echo base_url() ?>assets/img/logo/closedSEMNAS.jpeg"
									class="as-grid__image"
									loading="lazy"
									alt="contoh"
								/>
								<p class="as-grid__description" style = "text-align:center">
								<b>“Optimalisasi Teknologi Untuk Menciptakan Strategi Reparasi Ekonomi Kreatif
								Di Masa Kontraksi Pandemi Covid - 19.”</b>

								</p>
								<br>
								<i class="bi bi-calendar-week-fill"></i> 11 september 2022</i>
								<br>
								<br>
								<p class="as-grid__description">Untuk melihat Syarat ketentuan berlaku silahkan dowload <b>GuideBook :</b></p>
								<i class="bi bi-file-pdf-fill">
								<a href="https://drive.google.com/file/d/1aZAgAsDkVaLROEh5qTKKC4BBdkWiuQjU/view?usp=sharing" style="border-radius: 5px; background-color: whitesmoke; font-size: small;">Download</a>
								</i>
								<br>
								<br>
								<p class="as-grid__description">Contact Person:</p>
								<td class="as-grid__description"><a class="bi bi-telephone-fill as-grid__description " href="https://api.whatsapp.com/send?phone=6285896654071&text=Hi kak Mita, Saya ingin bertanya nih tentang Seminar  FAST UPB"> 0858-9665-4071(Mita)</a>
								</i>
								<br>

								<!--<div class="as-grid__button-wrapper">-->
								<!--	<a href="<?php echo base_url().'himatif/seminar_nasional'?>" class="as-grid__button">Daftar</a>-->
								<!--</div>-->
							</div>
						</article>
						
						<article class="as-grid__card">
							<div class="as-grid__card-wrapper">
								<h3 class="as-grid__title" style = "text-align:center">Festival Musik</h3>
								<img
									src="<?php echo base_url() ?>assets/img/logo/festifal.jpeg"
									class="as-grid__image"
									loading="lazy"
									alt="contoh"
								/>
							
								<br>
								<br>
								
								<i class="bi bi-calendar-week-fill">    Minggu, 02 Oktober 2022</i>
								<br>
								<i class="bi bi-geo-alt">   Universitas Pelita Bangsa</i>
								<br>
								<i class="bi bi-clock"> 14.00 WIB - Selesai</i>
								</br>
					
								<p class="as-grid__description" </p>
								<div class="as-grid__button-wrapper" style = "text-align:center">
									<a href="https://www.loket.com/event/hi-fastupb" class="as-grid__button">Buy Ticket HI-FAST</a>
								</div>
								
								<p class="as-grid__description" style = "text-align:center">
									<b>OPEN REGISTRASI PANGGUNG MUSIK</b>
								</p>
								<P>Yuuk yang memiliki Band musik/ Solo/ Team musik </P>
								<i class="bi bi-ticket-perforated">  Only : Rp. 150.000,-/Tim </i>
								<br>
								<br>
								<p class="as-grid__description" style = "text-align:center">
									<b>OPEN REGISTRASI BAZAR</b>
								</p>
								<p>Punya Usaha atau kalian UMKM? Yuk Kenalkan Produk usaha kalian dan ikut Bazaar bersama FAST UPB 2022</p>
								
								<i class="bi bi-ticket-perforated">  Only : Rp.250.000,-  /Stand </i>
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

								
								<div class="as-grid__button-wrapper" style = "text-align:center">
									<a href="<?php echo base_url().'himatif/lomba_sport'?>" class="as-grid__button">Daftar</a>
								</div>
				
								
								<br>
								<div class="as-grid__button-wrapper">
									<!-- <a href="<?php echo base_url().'himatif/festival_musik'?>" class="as-grid__button">Daftar</a> -->
								</div>
							</div>
						</article>
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
								alt="contoh"
							/>
						</li>
						<li class="as-flex__item">
							<img
								src="<?php echo base_url() ?>assets/img/logo/dicoding1.png"
								class="as-flex__image"
								alt="contoh"
							/>
						</li>
						<li class="as-flex__item">
							<img
								src="<?php echo base_url() ?>assets/img/logo/ttk1.png"
								class="as-flex__image"
								alt="contoh"
							/>
						</li>
						<li class="as-flex__item">
							<img
								src="<?php echo base_url() ?>assets/img/logo/zero1.png"
								class="as-flex__image"
								alt="contoh"
							/>
						</li>
			
						<li class="as-flex__item">
							<img
								src="<?php echo base_url() ?>assets/img/logo/hero1.png"
								class="as-flex__image"
								alt="contoh"
							/>
						</li>
						<li class="as-flex__item">
							<img
								class="as-flex__image"
								alt=""
							/>
						</li>
						<li class="as-flex__item">
							<img
								class="as-flex__image"
								alt=""
							/>
						</li>
						<li class="as-flex__item">
							<img
								class="as-flex__image"
								alt=""
							/>
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
								alt="terkenal"
							/>
						</li>
						<li class="as-flex__item">
							<img
								src="<?php echo base_url() ?>assets/img/logo/cb.png"
								class="as-flex__image"
								alt="cb"
							/>
						</li>
						<li class="as-flex__item">
							<img
								src="<?php echo base_url() ?>assets/img/logo/guecikarang.png"
								class="as-flex__image"
								alt="guecikarang"
							/>
						</li>
						<li class="as-flex__item">
							<img
								src="<?php echo base_url() ?>assets/img/logo/dikti.png"
								class="as-flex__image"
								alt="dikti"
							/>
						</li>
						<li class="as-flex__item">
							<img
								class="as-flex__image"
								alt=""
							/>
						</li>
						<li class="as-flex__item">
							<img
								class="as-flex__image"
								alt=""
							/>
						</li>
						<li class="as-flex__item">
							<img
								class="as-flex__image"
								alt=""
							/>
						</li>
						<li class="as-flex__item">
							<img
								class="as-flex__image"
								alt=""
							/>
						</li>
						<li class="as-flex__item">
							<img
								src="<?php echo base_url() ?>assets/img/logo/POJOKAMPUS.png"
								class="as-flex__image"
								alt="pojokkampus"
							/>
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
						<a href="https://www.instagram.com/fastupb/" class="as-footer__social" aria-label="socmed"
							><i class="bx bxl-instagram"></i
						></a>
						<!-- <a href="#" class="as-footer__social" aria-label="socmed"
							><i class="bx bxl-twitter"></i
						></a> -->
						<a href="https://www.youtube.com/channel/UC7SGrlmtAaBh2XTPpSO2Gfg" class="as-footer__social" aria-label="socmed"
							><i class="bx bxl-youtube"></i
						></a>
					</div>

					<div class="as-footer__content">
						<a href="<?php echo base_url(). 'Himatif/contact' ?>" class="as-footer__link">List Contact Person Event</a>
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
