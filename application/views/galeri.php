<!DOCTYPE html>
<html lang="en">
<head>
    <!-- panggil favicon -->
    <link href=" <?php base_url() ?>../assets/img/logo/himatif.png" rel="icon" />
    
    <meta charset="UTF-8">
    <title>Himatif UPB</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .galeri-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .kegiatan-box {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: 0.3s;
        }

        .kegiatan-box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .kegiatan-content {
            padding: 15px;
        }

        .kegiatan-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .kegiatan-desc {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }

        .kegiatan-time {
            font-size: 12px;
            color: #888;
        }

        .kegiatan-box:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>

<!-- panggil header -->
<?php $this->load->view('template/header'); ?>

<h1>Galeri Kegiatan HIMATIF</h1>

<div class="galeri-container">
    <!-- Kegiatan 1 -->
    <div class="kegiatan-box">
        <img src="<?php echo base_url('assets/img/proker/pelantikan.jpg'); ?>" alt="pelantikan">
        <div class="kegiatan-content">
            <div class="kegiatan-title">Pelantikan</div>
            <div class="kegiatan-desc">Pelantikan Ormawa serentak yang diadakan oleh Fakultas Teknik Universitas Pelita Bangsa.</div>
            <div class="kegiatan-time">Maret 2025</div>
        </div>
    </div>

    <!-- Kegiatan 2 -->
    <div class="kegiatan-box">
        <img src="<?php echo base_url('assets/img/proker/himaber.jpg'); ?>" alt="himaber">
        <div class="kegiatan-content">
            <div class="kegiatan-title">Himatif Berkah Ramadhan</div>
            <div class="kegiatan-desc">Program kerja departemen hubin hubeks.</div>
            <div class="kegiatan-time">April 2025</div>
        </div>
    </div>

    <!-- Kegiatan 3 -->
    <div class="kegiatan-box">
        <img src="<?php echo base_url('assets/img/proker/itbc25.jpg'); ?>" alt="itbc25">
        <div class="kegiatan-content">
            <div class="kegiatan-title">IT Bootcamp</div>
            <div class="kegiatan-desc">Program kerja departemen pengembangan organisasi.</div>
            <div class="kegiatan-time">Mei 2025</div>
        </div>
    </div>
    
    <!-- Kegiatan 4 -->
    <div class="kegiatan-box">
        <img src="<?php echo base_url('assets/img/proker/himnec.jpg'); ?>" alt="himnec">
        <div class="kegiatan-content">
            <div class="kegiatan-title">Himatif Network Class</div>
            <div class="kegiatan-desc">Program kerja departemen penelitian dan pengembangan.</div>
            <div class="kegiatan-time">Juni 2025</div>
        </div>
    </div>
    <!-- Tambahkan lebih banyak kegiatan sesuai kebutuhan -->
</div>

<!-- panggil footer -->
 <?php $this->load->view('template/footer'); ?>
</body>
</html>
