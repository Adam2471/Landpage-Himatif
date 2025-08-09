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
        <th >No</th>
        <th>Daftar Contact Person Lomba</th>
        <th>Nama</th>
        <th>No WhatsApp</th>
      </tr>
    </thead>
    <tbody>
      <tr style="text-align: center;">
        <th scope="row" style="text-align: center;">1</th>
        <td>Seminar Nasional</td>
        <td>Mita dan Risma</td>
        <td><a href="https://api.whatsapp.com/send?phone=6285896654071&text=Hi kak Mita, Saya ingin bertanya nih tentang SEMINAR NASIONAL FAST UPB">0858-9665-4071</a> || 
            <a href="https://api.whatsapp.com/send?phone=6282359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang SEMINAR NASIONAL FAST UPB">0823-5906-8891</a></td>
      </tr>
      <tr style="text-align: center;">
        <th scope="row">2</th>
        <td>IoT Competition</td>
        <td>Linda dan Risma</td>
        <td><a href="https://api.whatsapp.com/send?phone=62895326388827&text=Hi kak Linda, Saya ingin bertanya nih tentang IOT FAST UPB">0895-3263-88827</a> || 
            <a href="https://api.whatsapp.com/send?phone=6282359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang IOT  FAST UPB">0823-5906-8891</a></td>
      </tr>
      <tr style="text-align: center;">
        <th scope="row">3</th>
        <td>UI/UX Competition</td>
        <td>Rino dan Risma</td>
        <td><a href="https://api.whatsapp.com/send?phone=6282239715799&text=Hi kak Rino, Saya ingin bertanya nih tentang UI/UX Competition FAST UPB">0822-3971-5799</a> || 
            <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang UI/UX Competition FAST UPB">0823-5906-8891</a></td>
      </tr>
      <tr style="text-align: center;">
        <th scope="row">4</th>
        <td>Short Movie</td>
        <td>Anggi dan Risma</td>
        <td><a href="https://api.whatsapp.com/send?phone=6285353985886&text=Hi kak Anggi, Saya ingin bertanya nih tentang Short Movie FAST UPB">0853-5398-5886</a> || 
            <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang Short Movie FAST UPB">0823-5906-8891</a></td>
      </tr>
      <tr style="text-align: center;">
        <th scope="row">5</th>
        <td>Mobile Legend Tournament</td>
        <td>Zikri dan Risma</td>
        <td><a href="https://api.whatsapp.com/send?phone=6289636802874&text=Hi kak Dzikri, Saya ingin bertanya nih tentang Mobile Legend Tournament FAST UPB">0896-3680-2874</a> || 
            <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang  Mobile Legend Tournament FAST UPB">0823-5906-8891</a></td>
      </tr>
      <tr style="text-align: center;">
        <th scope="row">6</th>
        <td>PUBG Mobile Tournament</td>
        <td>Zikri dan Risma</td>
        <td><a href="https://api.whatsapp.com/send?phone=6289636802874&text=Hi kak Dzikri, Saya ingin bertanya nih tentang Mobile Legend Tournament FAST UPB">0896-3680-2874</a> || 
            <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang  Mobile Legend Tournament FAST UPB">0823-5906-8891</a></td>
      </tr>
      <tr style="text-align: center;">
        <th scope="row">7</th>
        <td>Badminton</td>
        <td>Romdhon dan Risma</td>
        <td><a href="https://api.whatsapp.com/send?phone=6285779545469&text=Hi kak Romdhon, Saya ingin bertanya nih tentang Badminton Tournament FAST UPB">0857-7954-5469</a> || 
            <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang  Badminton Tournament FAST UPB">0823-5906-8891</a></td>
      </tr>

      <tr style="text-align: center;">
        <th scope="row">8</th>
        <td>Futsal</td>
        <td>Romdhon dan Risma</td>
        <td><a href="https://api.whatsapp.com/send?phone=6285779545469&text=Hi kak Romdhon, Saya ingin bertanya nih tentang Badminton Tournament FAST UPB">0857-7954-5469</a> || 
            <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang  Badminton Tournament FAST UPB">0823-5906-8891</a></td>
      </tr>
      <tr style="text-align: center;">
        <th scope="row">9</th>
        <td>Poster</td>
        <td>Dinda dan Risma</td>
        <td><a href="https://api.whatsapp.com/send?phone=6289512735024&text=Hi kak Dinda, Saya ingin bertanya nih tentang Poster Competition FAST UPB">0895-1273-5024</a> || 
            <a href="https://api.whatsapp.com/send?phone=628359068891&text=Hi kak Risma, Saya ingin bertanya nih tentang  Poster Competition FAST UPB">0823-5906-8891</a></td>
      </tr>
      <tr style="text-align: center;">
        <th scope="row">10</th>
        <td>Sponsorship</td>
        <td>Ramdhan</td>
        <td><a href="https://api.whatsapp.com/send?phone=6287775365921&text=Hi kak Ramdhan, Saya ingin bertanya nih tentang Sponsorship dan Media Partner FAST UPB">0877-7536-5921</a>
      </tr>
    </tbody>
  </table>
</body>