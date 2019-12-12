<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <meta charset="UTF-8">
    <title>404 Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon-->
    <link rel="shortcut icon" href="images/icon/favicon.png" type="image/x-icon">

    <!-- Web Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Pacifico%7CSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;amp;subset=latin-ext,vietnamese" rel="stylesheet">

    <!-- Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets-front/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets-front/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets-front/libs/animate/animated.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets-front/libs/owl.carousel.min/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets-front/libs/jquery.mmenu.all/jquery.mmenu.all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets-front/libs/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets-front/libs/direction/css/noJS.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets-front/libs/prettyphoto-master/css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets-front/libs/slick-sider/slick.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets-front/libs/countdown-timer/css/demo.css">

    <!-- Template CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets-front/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets-front/css/home.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')

    -->
  </head>
  <body class="page page-404">
    <div id="preloaderKDZ"></div>
    <div class="yolo-site">
      <?php $this->load->view('header'); ?>
      <div id="example-wrapper">
        <div class="div-box">
          <figure class="img-404"><img src="<?PHP echo base_url()?>assets-front/images/demo/page-404.jpg" alt=""/><a href="<?php echo base_url()?>" class="return-home">Please return to homepage			</a></figure>
        </div>

        <div class="div-box mb" style="margin-top: 50px;">
          <div class="home-7-contact-me">
            <div class="container">
              <div class="row">
              <div class="col-md-3 col-sm-12">
                    <img src="<?php echo base_url() ?>assets-front/images/logo/BungaPlaza-logo.jpeg" alt="logo" height="180px"/>
                  </div>
                <div class="col-md-3 col-sm-12">
                  <div class="home-6-contact-me-form">
                    <h3>Peta Situs</h3>
                    <a href="<?php echo base_url()?>about"> <p>Tentang Plaza Bunga</p></a>
                    <a href="<?php echo base_url()?>hubungi-kami"><p>Hubungi Kami</p></a>
                    <a href="<?php echo base_url()?>blog"> <p>Blog</p></a>
                    <a href="<?php echo base_url()?>karir-dan-lowongan"><p>Karir & Lowongan</p></a>
                  </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="home-6-contact-me-form">
                      <h3>FAQ Customer</h3>
                      <a href="<?php echo base_url()?>cara-belanja"> <p>Cara Berbelanja</p></a>
                      <a href="<?php echo base_url()?>kebijakan-transaksi"> <p>Kebijakan Transaksi</p></a>
                      <a href="<?php echo base_url()?>metode-pembayaran"> <p>Metode Pembayaran</p></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="home-6-contact-me-form">
                      <h3>CV. Plaza Bunga</h3>
                      <p><?php echo getSetting()->address; ?>
                         <br>Telpon : <?php echo getSetting()->phone;?>
                         <br>Email : <?php echo getSetting()->email;?>
                      </p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="div-box">
          <footer id="yolo-footer-wrapper">
            <div class="yolo-footer-wrapper footer-3">
              <div class="footer-col">
                <p class="copyright">BeGreen © Yolo 2016 Copyright, All Right Reserved 2016 Designed by <a href="#">Yolo</a></p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- .mv-site-->



    <div class="popup-wrapper">
    </div>
    <!-- .popup-wrapper-->
    <div class="click-back-top-body">
      <button type="button" class="sn-btn sn-btn-style-17 sn-back-to-top fixed-right-bottom"><i class="btn-icon fa fa-angle-up"></i></button>
    </div>

    <!-- Vendor jQuery-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/animate/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/jquery.mmenu.all/jquery.mmenu.all.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/jquery-appear/jquery.appear.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/jquery-countto/jquery.countTo.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/direction/js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/direction/js/modernizr.custom.97074.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/isotope/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/isotope/fit-columns.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/isotope/isotope-docs.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/mansory/mansory.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/prettyphoto-master/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/slick-sider/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/countdown-timer/js/jquery.final-countdown.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/countdown-timer/js/kinetic.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/libs/owl.carousel.min/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets-front/js/main.js"></script>
  </body>
</html>
