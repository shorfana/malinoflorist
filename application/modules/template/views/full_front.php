<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php if(isset($title)){echo $title;}else{echo "Plaza Bunga";} ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets-front/images/logo/BungaPlaza-Logo.jpeg" alt="logo" type="image/x-icon">

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
    <?php if(isset($css)){$this->load->view($css);} ?>
    <style media="screen">
    .logo-footer {
      height: 150px;
    }
    @media only screen and (max-width: 760px) {
      .logo-footer {
        height: 100px;
      }
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')

    -->
  </head>
  <?php if(isset($product)){ ?>
    <body class="product single-product">
  <?php }else{ ?>
    <body class="home creative-agency-home">
  <?php } ?>
    <div id="preloaderKDZ"></div>
    <div class="yolo-site">
      <header class="header yolo-header-style-1">
        <?php
            $this->load->helper('navbar');
            $this->load->helper('dbs');
        ?>
              <div class="yolo-top-bar">
                <div class="container">
                  <div class="row">
                    <div class="top-sidebar top-bar-left col-md-4">
                      <aside id="text-11" class="widget widget_text">
                        <div class="textwidget">
                          <div>Welcome to Plaza Bunga - Toko Bunga Makassar</div>
                        </div>
                      </aside>
                    </div>
                    <div class="top-sidebar top-bar-right col-md-8">
                      <aside id="text-6" class="widget widget_text">
                        <div class="textwidget">
                          <a href="<?php echo "https://".getSetting()->ig_link?>">
                            <i style="margin-left: 15px" class="fa fa-instagram"></i> <?php echo getSetting()->ig_title?>
                          </a>
                          <a href="<?php echo "https://".getSetting()->fb_link?>">
                            <i style="margin-left: 15px" class="fa fa-facebook"></i> <?php echo getSetting()->fb_title?>
                          </a>
                          <a href="#"><i style="margin-left: 15px" class="fa fa-whatsapp"></i> Hubungi Kami <?php echo getSetting()->whatsapp?></a>
                        </div>
                      </aside>
                    </div>
                  </div>
                </div>
              </div>
              <div class="yolo-header-top yolo-header-top-style-1">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="header-logo">
                  <h1><a href="index.html"><img src="<?php echo base_url() ?>assets-front/images/logo/BungaPlaza-Logo.jpeg" alt="logo" width="100"/></a></h1>
                </div>
              </div>
              <div class="col-md-8">
                <div class="header-customize header-customize-right">
                  <div class="custom-text-wrapper header-customize-item">Plaza Bunga</div>
                  <div class="custom-text-wrapper header-customize-item"><i class="fa fa-truck"></i>Makassar Sulawesi Selatan, Indonesia</div>

                </div>
              </div>
            </div>
          </div>
        </div>
              <div class="mobile-menu">
                <div class="col-3 text-left"><a href="#primary-menu"><i class="fa fa-bars"></i></a></div>
                <div class="col-3 text-center">
                  <div class="logo">
                <h1><a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets-front/images/logo/BungaPlaza-Logo.jpeg" alt="logo" height="150px" width="100px"/></a></h1>
                  </div>
                </div>
                <div class="col-3 text-right">
                  <div class="header-right">
                    <div class="search-button-wrapper header-customize-item style-default">
                      <div class="icon-search-menu"><i class="wicon fa fa-search"></i></div>
                      <div class="yolo-search-wrapper">
                        <input id="search-ajax" placeholder="Enter keyword to search" type="search"/>
                        <button class="search"><i class="fa fa-search"></i></button>
                        <button class="close"><i class="pe-7s-close"></i></button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="header-bottom">
          <div class="container">

            <div class="main-nav-wrapper">
              <div class="header-left">
                <nav id="primary-menu" class="main-nav">
                  <ul class="nav">
                    <li class=""><a href="<?php echo base_url() ?>">Home</a></li>
                    <!-- <li class="menu-item menu-blog"><a href="<?php echo base_url() ?>home/product">Bunga Papan</a>
                      <ul class="sub-menu">
                        <li><a href="<?php echo base_url() ?>home/product">Happy Wedding</a></li>
                        <li><a href="<?php echo base_url() ?>home/product">Congratulations</a></li>
                        <li><a href="<?php echo base_url() ?>home/product">Turut Berduka Cita</a></li>
                      </ul>
                    </li> -->
                    <?php
                        foreach (getCatWithSub() as $catsub ):?>
                      <li class="menu-item menu-blog"><a href="#"><?php echo $catsub->name?></a>
                        <ul class="sub-menu">
                          <?php
                          $catSubName = $catsub->name;
                          $csName = getSub($catSubName);
                          foreach ($csName as $csn):?>
                            <li><a href="<?php echo base_url().$catsub->slug.'/'. $csn->slug;?>"><?php echo $csn->name;?></a></li>
                          <?php endforeach;
                          ?>
                        </ul>
                      </li>
                    <?php endforeach;?>
                    <?php foreach (getCatOnly() as $cat ):?>
                      <li class="menu-item menu-project"><a href="<?php echo base_url().$cat->slug?>"><?php echo $cat->name?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </nav>
                <!-- .header-main-nav-->
              </div>

              <div class="header-right">
                <ul class="header-customize-item header-social-profile-wrapper">
                  <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-skype"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
            </header>

      <div id="example-wrapper">
        <!-- Replace Body Disini -->
        <?php if(isset($content)){$this->load->view($content);} ?>
        <!-- Replace Body Disini -->

        <div class="div-box mb" style="margin-top: 50px;">
          <div class="home-7-contact-me">
            <div class="container">
              <div class="row">
              <div class="col-md-3 col-sm-12">
                <center>
                    <img src="<?php echo base_url() ?>assets-front/images/logo/BungaPlaza-Logo.jpeg" class="logo-footer" alt="logo"/>
                  </center>
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
                <p class="copyright">Plazabunga © 2019 Copyright, All Right Reserved Developed by <a href="#">Kostlab</a></p>
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
    <?php if(isset($js)){$this->load->view($js);} ?>

  </body>
</html>
