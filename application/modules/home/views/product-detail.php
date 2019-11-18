<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets-front/images/icon/favicon.png" type="image/x-icon">

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
  <body class="product single-product">
    <div id="preloaderKDZ"></div>
    <div class="yolo-site">
    <?php $this->load->view('header'); ?>
      <div id="example-wrapper">
        <div class="div-box">
          <div class="banner-subpage">
            <figure><img src="<?php echo base_url() ?>assets-front/images/background/bg-banner.jpg" alt="bg-banner"/></figure>
            <div class="banner-subpage-content">
              <h2>Hand Bouquet</h2>
              <!-- <?php var_dump($show_detail);die;?> -->
            </div>
          </div>
        </div>
        <div class="div-box mb mt">
          <div class="container">
            <div class="row">
              <div class="col-md-5">
                <div class="single-product-slider">
                  <div id="sync1" class="owl-carousel owl-template">
                    <div class="item">
                      <figure><img src="<?php echo base_url() ?>assets-front/images/demo/product-5.jpg" alt="slide" width="1080" height="768"/></figure>
                    </div>
                    <div class="item">
                      <figure><img src="<?php echo base_url() ?>assets-front/images/demo/product-2.jpg" alt="slide" width="1080" height="768"/></figure>
                    </div>
                    <div class="item">
                      <figure><img src="<?php echo base_url() ?>assets-front/images/demo/product-3.jpg" alt="slide" width="1080" height="768"/></figure>
                    </div>
                    <div class="item">
                      <figure><img src="<?php echo base_url() ?>assets-front/images/demo/product-4.jpg" alt="slide" width="1080" height="768"/></figure>
                    </div>
                  </div>
                  <div id="sync2" class="owl-carousel owl-template">
                    <div class="item">
                      <figure><img src="<?php echo base_url() ?>assets-front/images/demo/product-5-b.jpg" alt="slide" width="180" height="130"/></figure>
                    </div>
                    <div class="item">
                      <figure><img src="<?php echo base_url() ?>assets-front/images/demo/product-2-b.jpg" alt="slide" width="180" height="130"/></figure>
                    </div>
                    <div class="item">
                      <figure><img src="<?php echo base_url() ?>assets-front/images/demo/product-3-b.jpg" alt="slide" width="180" height="130"/></figure>
                    </div>
                    <div class="item">
                      <figure><img src="<?php echo base_url() ?>assets-front/images/demo/product-4-b.jpg" alt="slide" width="180" height="130"/></figure>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="single-product-content">
                  <div class="summary-product entry-summary">
                    <h2 class="product_title mb-45">Hand Bouquet Fresh Krisan White</h2>
                    <div>
                      <p class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">Rp.</span> 150.000</span></p>
                    </div>
                    <div class="product-single-short-description">
                      <label>Deskripsi: </label>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                    </div>
                    <div class="product_meta" style="margin-top:10px;">
                      <span class="product-stock-status-wrapper">
                        <label>Size:</label><p>0 x 0 M</p>
                      </span>
                    </div>
                    <p style="margin-top:25px;"><a href="#" class="btn btn-1">Pesan Sekarang</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="div-box mb">
          <div class="container">
            <div class="title-style title-style-2 text-center mb-20">
              <h2>Related Projects </h2>
            </div>
            <div data-number="4" data-margin="0" data-loop="no" data-navcontrol="yes" class="shortcode-product-wrap product-begreen begreen-owl-carousel">
              <div class="product-item-wrap product-style_1">
                <div class="product-item-inner">
                  <div class="product-thumb">
                    <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-7.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                      <div class="product-hover-sign">
                        <hr/>
                        <hr/>
                      </div></a>
                    <div class="product-info">
                        <h3>The Ezra with Low Light Plants</h3></a><span class="price">
                        <span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>40.00</span></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item-wrap product-style_1">
                <div class="product-item-inner">
                  <div class="product-thumb">
                    <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-8.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                      <div class="product-hover-sign">
                        <hr/>
                        <hr/>
                      </div></a>
                    <div class="product-info">
                        <h3>The Tall Terrarium Plant Collection</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>40.00</span></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item-wrap product-style_1">
                <div class="product-item-inner">
                  <div class="product-thumb">
                    <div class="product-flash-wrap"></div>
                    <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-9.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                      <div class="product-hover-sign">
                        <hr/>
                        <hr/>
                      </div></a>
                    <div class="product-info">
                        <h3>The Calvert with Succulents</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>33.00</span></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item-wrap product-style_1">
                <div class="product-item-inner">
                  <div class="product-thumb">
                    <div class="product-flash-wrap"></div>
                    <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-10.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                      <div class="product-hover-sign">
                        <hr/>
                        <hr/>
                      </div></a>
                    <div class="product-info">
                        <h3>The Succulent Collection</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>44.00</span></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item-wrap product-style_1">
                <div class="product-item-inner">
                  <div class="product-thumb">
                    <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-11.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                      <div class="product-hover-sign">
                        <hr/>
                        <hr/>
                      </div></a>
                    <div class="product-info">
                        <h3>The Ezra with Low Light Plants</h3></a><span class="price">
                        <del><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>49.00</span></del><ins><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>40.00</span></ins></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php $this->load->view('footer'); ?>

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
