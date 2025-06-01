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
        <a href="<?php echo base_url() . 'himatif/itfast_2' ?>" class="as-nav__logo"> IT FAST # 2</a>

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
    <!-- Form -->
    <!-- Edited by Reza Riyaldi __ zagojo.space -->
    <div class="row m-0 my-3">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header" style="text-align: center;">
                    <h3>Seminar Nasional</h3>
                    <p>“Optimalisasi Teknologi Untuk Menciptakan Strategi Reparasi Ekonomi Kreatif Di Masa Kontraksi Pandemi Covid - 19.”</p>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('himatif/seminar_nasional_aksi'); ?>
                    <div class="mb-3 row">
                        <label for="" class="col-md-4 col-form-label">Nama Lengkap</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-md-4 col-form-label">NIM</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="nim">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-md-4 col-form-label">No Handphone</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="no_tlp">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-md-4 col-form-label">Asal Kampus/Instansi</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="asal">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-md-4 col-form-label">Kegiatan</label>
                        <div class="col-md-8">
                            <select name="lomba" id="" class="form-control">
                                <option value="">- Pilih Kegiatan -</option>
                                <option value="seminar nasional">Seminar Nasional</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-md-4 col-form-label">KTM</label>
                        <div class="col-md-8">
                            <input type="file" name="foto" class="form-control-file">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="" class="col-md-4 col-form-label">Jenis Kegiatan</label>
                        <div class="col-md-8">
                            <select name="lomba" id="" class="form-control">
                                <option value="">- Pilih Jenis Kegiatan -</option>
                                <option value="Online">Online</option>
                                <option value="Offline">Offline</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-success w-50 d-block mx-auto" type="submit">Daftar</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>