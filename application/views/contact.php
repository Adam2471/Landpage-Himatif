<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="SPA Example" />
  <meta name="keywords" content="HTML, CSS, JavaScript" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="<?php echo base_url() ?>assets/img/logo/iconfast5.png" type="image/gif" sizes="16x16" />
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />
  <title>FAST#5</title>
  <nav class="as-nav as-container">
    <a href="<?php echo base_url() . 'himatif/itfast_2' ?>" class="as-nav__logo">FAST#5</a>
    <div class="as-nav__menu" id="nav-menu">
      <ul class="as-nav__list">
        <li class="as-nav__item">
          <a href="<?php echo base_url() . 'himatif/index' ?>" class="as-nav__link">Home Himatif</a>
        </li>
        <li class="as-nav__item">
          <a href="<?php echo base_url() . 'himatif/itfast_2' ?>" class="as-nav__link">Lomba</a>
        </li>

        <li>
          <a href="#partner" class="as-nav__link">Contact</a>
        </li>
      </ul>
    </div>

    <div class="as-nav__toggle" id="nav-toggle">
      <i class="bx bx-menu"></i>
    </div>
  </nav>
</head>

<body>

  <!-- <table class="table">
    <thead style="background-color: #04AA6D; color: white; padding: 8px;">
      <tr style="text-align: center;">
        <th scope="col">No</th>
        <th scope="col">Daftar Contact Person Lomba</th>
        <th scope="col">Nama</th>
        <th scope="col">No whatsapp</th>
      </tr>
    </thead> -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover align-middle">
      <thead class="table-header">
        <tr class="text-center">
          <th>No</th>
          <th>Perlombaan</th>
          <th>Nama</th>
          <th>No WhatsApp</th>
        </tr>
      </thead>
      <tbody>
        <tr style="text-align: center;">
          <th scope="row" style="text-align: center;">1</th>
          <td>Mikrotik Competition</td>
          <td>Adam Mubarok</td>
          <td><!-- <a href="https://api.whatsapp.com/send?phone=6282359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang SEMINAR NASIONAL FAST UPB">0823-5906-8891</a>-->
            <a href="https://api.whatsapp.com/send?phone=6289506047143&text=Hi%20Kak%20Adam%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20Konfigurasi%20Mikrotik%20FAST%20UPB%20%235"
              target="_blank">
              0895-0604-7143</a>
          </td>

        </tr>
        <tr style="text-align: center;">
          <th scope="row" style="text-align: center;">1</th>
          <td>Ngoding Cepat Tepat</td>
          <td>Radjikin Septiawan</td>
          <td><!-- <a href="https://api.whatsapp.com/send?phone=6282359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang SEMINAR NASIONAL FAST UPB">0823-5906-8891</a>-->
            <a href="https://api.whatsapp.com/send?phone=6285880528744&text=Hi%20Kak%20Aji%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20Ngoding%20cepat%20tepat%20FAST%20UPB%20%235"
              target="_blank">
              0858-8052-8744</a>
          </td>
        </tr>
        <tr style="text-align: center;">
          <th scope="row" style="text-align: center;">1</th>
          <td>Seminar Nasional</td>
          <td>Rafi Suswidia</td>
          <td><!-- <a href="https://api.whatsapp.com/send?phone=6282359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang SEMINAR NASIONAL FAST UPB">0823-5906-8891</a>-->
            <a href="https://api.whatsapp.com/send?phone=6281953312126&text=Hi%20Kak%20Rafi%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20Semnas%20FAST%20UPB%20%235"
              target="_blank">
              0819-5331-2126</a>
          </td>
        </tr>
        <tr style="text-align: center;">
          <th scope="row">2</th>
          <td>IoT Competition</td>
          <td>Ari Cakra</td>
          <td><!-- <a href="https://api.whatsapp.com/send?phone=6282359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang IOT  FAST UPB">0823-5906-8891</a></td> -->
            <a href="https://api.whatsapp.com/send?phone=6289665733153&text=Hi%20Kak%20Ari%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20IoT%20FAST%20UPB%20%235"
              target="_blank">
              0896-6573-3153</a>
          </td>
        </tr>
        <tr style="text-align: center;">
          <th scope="row">3</th>
          <td>UI/UX Competition</td>
          <td>Zizantara</td>
          <td><a href="https://api.whatsapp.com/send?phone=6282240000710&text=Hi%20Kak%20Zizan%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20UI%20UX%20FAST%20UPB%20%235"
              target="_blank">
              0822-4000-0710</a>
            <!-- <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang UI/UX Competition FAST UPB">0823-5906-8891</a></td> -->
        </tr>
        <tr style="text-align: center;">
          <th scope="row">3</th>
          <td>Photography Competition</td>
          <td>Youvanda</td>
          <td><!-- <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang UI/UX Competition FAST UPB">0823-5906-8891</a></td> -->
            <a href="https://api.whatsapp.com/send?phone=6289617770937&text=Hi%20Kak%20Youvanda%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20Photography%20FAST%20UPB%20%235"
              target="_blank">
              0896-1777-0937</a>
          </td>
        </tr>
        <!-- <tr style="text-align: center;">
        <th scope="row">4</th>
        <td>Short Movie</td>
        <td>Anggi dan Risma</td>
        <td><a href="https://api.whatsapp.com/send?phone=6285353985886&text=Hi kak Anggi, Saya ingin bertanya nih tentang Short Movie FAST UPB">0853-5398-5886</a> || 
            <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang Short Movie FAST UPB">0823-5906-8891</a></td>
      </tr> -->
        <tr style="text-align: center;">
          <th scope="row">5</th>
          <td>Mobile Legend Tournament</td>
          <td>Bagus Sanjaya</td>
          <td><!-- <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang  Mobile Legend Tournament FAST UPB">0823-5906-8891</a></td> -->
            <a href="https://api.whatsapp.com/send?phone=6281617587624&text=Hi%20Kak%20Bagus%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20Mobile%20Legend%20FAST%20UPB%20%235"
              target="_blank">
              0816-1758-7624</a>
          </td>
        </tr>
        <!-- <tr style="text-align: center;">
        <th scope="row">6</th>
        <td>PUBG Mobile Tournament</td>
        <td>Zikri dan Risma</td>
        <td><a href="https://api.whatsapp.com/send?phone=6289636802874&text=Hi kak Dzikri, Saya ingin bertanya nih tentang Mobile Legend Tournament FAST UPB">0896-3680-2874</a> || 
            <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang  Mobile Legend Tournament FAST UPB">0823-5906-8891</a></td>
      </tr> -->
        <tr style="text-align: center;">
          <th scope="row">7</th>
          <td>Badminton</td>
          <td>Dwi Okta</td>
          <td><!-- <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang  Badminton Tournament FAST UPB">0823-5906-8891</a></td> -->
            <a href="https://api.whatsapp.com/send?phone=6285819282822&text=Hi%20Kak%20Okta%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20Badminton%20FAST%20UPB%20%235"
              target="_blank">
              0858-1928-2822</a>
          </td>
        </tr>

        <tr style="text-align: center;">
          <th scope="row">8</th>
          <td>Futsal</td>
          <td>Gilang Febriansyah</td>
          <td><!-- <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang  Badminton Tournament FAST UPB">0823-5906-8891</a></td> -->
            <a href="https://api.whatsapp.com/send?phone=6289626842218&text=Hi%20Kak%20Gilang%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20lomba%20Futsal%20FAST%20UPB%20%235"
              target="_blank">
              0896-2684-2218</a>
          </td>
        </tr>
        <!-- <tr style="text-align: center;">
        <th scope="row">9</th>
        <td>Poster</td>
        <td>Dinda dan Risma</td>
        <td><a href="https://api.whatsapp.com/send?phone=6289512735024&text=Hi kak Dinda, Saya ingin bertanya nih tentang Poster Competition FAST UPB">0895-1273-5024</a> || 
            <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang  Poster Competition FAST UPB">0823-5906-8891</a></td>
      </tr> -->
        <tr style="text-align: center;">
          <th scope="row">10</th>
          <td>Sponsorship</td>
          <td>Husni Kurniawan</td>
          <td>
            <a href="https://api.whatsapp.com/send?phone=62895333958552&text=Hi%20Kak%20Husni%2C%20Saya%20ingin%20bertanya%20nih%20tentang%20Sponsorship%20FAST%20UPB%20%235"
              target="_blank">
              0895-3339-58552</a>
        </tr>
      </tbody>
    </table>
    <!-- baru -->
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const navToggle = document.getElementById("nav-toggle");
        const navMenu = document.getElementById("nav-menu");

        if (navToggle && navMenu) {
          navToggle.addEventListener("click", () => {
            navMenu.classList.toggle("show-menu");
          });
        }
      });
    </script>

</body>