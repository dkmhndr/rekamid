
<!DOCTYPE html>
<html  >
<head>
  <link rel="shortcut icon" href="<?= base_url(); ?>frontassets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Selamat Datang di Rekam.Id!</title>
  <link rel="stylesheet" href="<?= base_url(); ?>frontassets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="<?= base_url(); ?>frontassets/tether/tether.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>frontassets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>frontassets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>frontassets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>frontassets/animatecss/animate.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>frontassets/dropdown/css/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>frontassets/theme/css/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>frontassets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-rMQAT4Uskd" once="menu" id="menu2-0">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="#">REKAM.ID</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.html#features1-6">Layanan Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.html#services1-4">Daftar Produk</a>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="http://wa.me/6289665690003?text=<?= rawurlencode('Halo, saya mau menyewa kamera');?>"><span class="mbri-camera mbr-iconfont mbr-iconfont-btn"></span>
                    
                    Sewa Sekarang</a></div>
        </div>
    </nav>
</section>

<section class="engine"></section><section class="header1 cid-rMQB6VPdyV mbr-parallax-background" id="header16-1">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(255, 255, 255);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">SOBAD MISQUEEN CARI KAMERA? SEWAIN AJA!</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">Pinjam berbagai macam merek dan tipe kamera dengan harga terjangkau!</p>
                <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4" href="http://wa.me/6289665690003?text=<?= rawurlencode('Halo, saya mau menyewa kamera');?>">SEWA SEKARANG!</a></div>
            </div>
        </div>
    </div>

</section>

<section class="features1 cid-rMQDRCGLIo" id="features1-6">
    
    

    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-cash"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Harga Terjangkau</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Rekam.Id adalah situs sewa kamera termurah no.1 di Indonesia!</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-user"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">Bantuan Fotografer</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Pengen difotoin? Kami punya fotografer professional buat kamu!</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbri-responsive mbr-iconfont"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Mudah dan Cepat</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Cukup jaminkan KTP/ Kartu Pelajar. Tinggal pilih, kamera akan segera sampai ke tanganmu!</p>
                </div>
            </div>

            

        </div>

    </div>

</section>

<section class="services1 cid-rMQCLdZNvm" id="services1-4">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="row justify-content-center">
            <!--Titles-->
            <div class="title col-12">
                <h2 class="align-left pb-3 mbr-fonts-style display-1">
                    Produk Kami</h2>
                
            </div>

    <div class="row mb-4">
    <?php foreach ($kamera as $row): ?>
     <div class="col-md-4 mb-4 ">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img class="max-img" src="<?php echo base_url('upload/product/'.$row->gambar) ?>" alt="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-5">
                            <?= $row->merk; ?> <?= $row->tipe; ?>
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Status Ketersediaan : <?= $row->status; ?>
                        </p>
                        <!--Btn-->
                        <div class="mbr-section-btn align-left">
                            <a href="http://wa.me/6289665690003?text=<?= rawurlencode('Halo, saya mau menyewa kamera '.$row->merk.' '.$row->tipe.'. Bisa kita bertemu?');?>" class="btn btn-warning-outline display-4">
                                Rp <?= $row->harga; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    <?php endforeach;?>
        </div>

</section>


<section once="footers" class="cid-rMQKrgvE6N" id="footer6-9">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright <?= date('Y');?> Rekam.ID - All Rights Reserved || <a href="<?= base_url('auth');?>">Admin Login</a>
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="<?= base_url(''); ?>frontassets/web/assets/jquery/jquery.min.js"></script>
  <script src="<?= base_url(''); ?>frontassets/popper/popper.min.js"></script>
  <script src="<?= base_url(''); ?>frontassets/tether/tether.min.js"></script>
  <script src="<?= base_url(''); ?>frontassets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url(''); ?>frontassets/smoothscroll/smooth-scroll.js"></script>
  <script src="<?= base_url(''); ?>frontassets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="<?= base_url(''); ?>frontassets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="<?= base_url(''); ?>frontassets/parallax/jarallax.min.js"></script>
  <script src="<?= base_url(''); ?>frontassets/dropdown/js/nav-dropdown.js"></script>
  <script src="<?= base_url(''); ?>frontassets/dropdown/js/navbar-dropdown.js"></script>
  <script src="<?= base_url(''); ?>frontassets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>