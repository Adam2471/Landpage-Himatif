<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="SPA Example" />
    <meta name="keywords" content="HTML, CSS, JavaScript" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo base_url() ?>assets/img/logo/itfastlogo.png" type="image/gif" sizes="16x16" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />
    <title>IT FAST # 2</title>
    <nav class="as-nav as-container">
        <a href="#" class="as-nav__logo"> IT FAST # 2</a>

        <div class="as-nav__menu" id="nav-menu">
            <ul class="as-nav__list">
                <li class="as-nav__item">
                    <a href="<?php echo base_url() . 'himatif/index' ?>" class="as-nav__link">Home HIMATIF</a>
                </li>
                <li class="as-nav__item">
                    <a href="<?php echo base_url() . 'himatif/itfast_2' ?>" class="as-nav__link">Lomba</a>
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
    <div class="row m-0">
        <?php
        if (isset($sudah_terdaftar)) {
        ?>
            <div class="alert alert-warning text-center mx-auto w-100">
                <?= $sudah_terdaftar ?>
            </div>
        <?php
        }
        ?>
        <div class="col-md-6 mx-auto mt-3">
            <div class="card">
                <div class="card-header text-center">
                <?php
                    if (!isset($sudah_terdaftar)) {
                    ?>
                        <h2 class="my-3">Berhasil Mendaftar Seminar Nasional</h2>
                    <?php
                    } else {
                    ?>
                        <h2 class="text-danger my-auto">Pendaftaran Gagal!</h2>
                    <?php
                    }
                    ?>
                    
                </div>
                <div class="card-body text-center">
                    <?php
                    if (!isset($sudah_terdaftar)) {
                    ?>
                        <h4>Selamat anda berhasil mendaftar seminar nasional dengan biodata sebagai berikut: </h4>
                    <?php
                    } else {
                    ?>
                        <h4 class="text-danger"><?= $sudah_terdaftar ?></h4>
                    <?php
                    }
                    ?>
                    <table class="table text-left w-75 mx-auto table-bordered my-4">
                        <thead>
                            <tr class="bg-dark text-white">
                                <th>#</th>
                                <th>Biodata</th>
                            </tr>
                        </thead>
                        <tr>
                            <th>Nama</th>
                            <td><?= $nama ?></td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td><?= $nim ?></td>
                        </tr>
                        <tr>
                            <th>No Handphone</th>
                            <td><?= $no_hp ?></td>
                        </tr>
                        <tr>
                            <th>Asal Instansi</th>
                            <td><?= $asal ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kegiatan</th>
                            <td><?= $kegiatan ?></td>
                        </tr>
                    </table>
                    <h5>Untuk info lebih lanjut silahkan klik tombol dibawah ini untuk masuk grup whatsapp</h5>
                    <a href="https://chat.whatsapp.com/EySrhiaCcd3LcIkX2jei6a" class="btn btn-success my-3" target="_blank"><i class="fa-brands fa-whatsapp"></i> Grup SEMNAS OFFLINE </a>
                    <a href="https://chat.whatsapp.com/LGqLPTcPUktFMP4isumcsQ" class="btn btn-success my-3" target="_blank"><i class="fa-brands fa-whatsapp"></i> Grup SEMNAS ONLINE</a>
                    <a href="<?= base_url() ?>himatif/seminar_nasional" class="d-block">Kembali ke halaman daftar</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/d00fc238f0.js" crossorigin="anonymous"></script>

</body>

</html>