<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Plaza Bunga</title>
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
  <body class="home creative-agency-home">
    <div id="preloaderKDZ"></div>
    <div class="yolo-site">
      <?php $this->load->view('header'); ?>
      <div id="example-wrapper">
        <div class="div-box">
          <div class="slider-home slider-home-7">
            <div data-number="1" data-margin="100" data-loop="yes" data-navcontrol="no" data-dots="yes" class="begreen-owl-carousel">

              <div class="slider-2">
                <div class="slider-content slider-2-content">
                  <div class="slider-content-center">
                    <!-- <h2>WARNAI HARI ANDA</h2> -->
                    <h3>Warnai Hari Anda</h3>
                    <div class="desc">"Berbagai koleksi bunga hias bisa Anda pilih sebagai<br> hiasan interior rumah atau kantor" </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="div-box">
          <div class="home-7-looking bg-base-2 color-fff font-24">
            <div class="container mt-20 mb-20">
              <p class="mt-20 mb-20"><b>LOOKING FOR A QUALITY AND AFFORDABLE </b>PLANT?<a href="#" class="btn btn-14">GET A QUOTE</a></p>
            </div>
          </div>
        </div>
        <div class="div-box" style="margin-top: 25px;">
          <div class="home-2-outdoor">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="shortcode-product-wrap product-begreen columns-2">
                    <?php foreach ($bunga_papan as $k): ?>
                      <div class="product-item-wrap product-style_1">
                        <div class="product-item-inner">
                          <div class="product-thumb">
                            <div class="product-flash-wrap"></div>
                            <div class="product-thumb-primary"><img src="<?= base_url() ?>xfile/product/<?php echo $k->image1 ?>" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                              <a href="<?php echo base_url()?>home/product/product_detail/<?php echo $k->slug?>" class="product-link">
                                <div class="product-hover-sign">
                                  <hr/>
                                  <hr/>
                                </div>
                              </a>
                            <div class="product-info">
                              <a href="asdasd.php"><h3><?php echo $k->name ?></h3></a>
                              <span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">Rp </span><?php echo number_format($k->price) ?></span></span>
                            </div>
                            <div class="product-actions">
                              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                              </div>
                              <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="banner-shortcode-wrap style_4">
                    <div class="banner-content title_left">
                      <h3 class="banner-title title_left">Bunga Papan</h3><span class="banner-label label_left">Bright light plant</span><img src="<?php echo base_url() ?>assets-front/images/demo/banner3-h4.jpg" alt="Outdoor"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="div-box" style="margin-top: 25px;">
          <div class="home-2-indoor">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="banner-shortcode-wrap style_4">
                    <div class="banner-content title_right">
                      <h3 class="banner-title title_left">Hand Bouquet</h3><span class="banner-label label_left">Bright light plant</span><img src="<?php echo base_url() ?>assets-front/images/demo/banner3-h4.jpg" alt="Outdoor"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="shortcode-product-wrap product-begreen columns-2">
                     <?php foreach ($hand_bouquet as $k): ?>
                       <div class="product-item-wrap product-style_1">
                         <div class="product-item-inner">
                           <div class="product-thumb">
                             <!-- <div class="product-flash-wrap"><span class="on-new product-flash">New</span></div> -->
                             <div class="product-thumb-primary"><img src="<?= base_url() ?>xfile/product/<?php echo $k->image1 ?>" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                             <a href="<?php echo base_url()?>home/product/product_detail/<?php echo $k->slug?>" class="product-link">
                               <div class="product-hover-sign">
                                 <hr/>
                                 <hr/>
                               </div></a>
                             <div class="product-info">
                               <a href="#"><h3><?php echo $k->name ?></h3></a>
                               <span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">Rp </span><?php echo number_format($k->price) ?></span></span>
                             </div>
                             <div class="product-actions">
                               <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                 <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                               </div>
                               <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                             </div>
                           </div>
                         </div>
                       </div>
                     <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="div-box" style="margin-top: 25px;">
          <div class="home-2-outdoor">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="shortcode-product-wrap product-begreen columns-2">
                    <?php foreach ($table_flower as $k): ?>
                      <div class="product-item-wrap product-style_1">
                        <div class="product-item-inner">
                          <div class="product-thumb">
                            <div class="product-flash-wrap"></div>
                            <div class="product-thumb-primary"><img src="<?= base_url() ?>xfile/product/<?php echo $k->image1 ?>" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                              <a href="<?php echo base_url()?>home/product/product_detail/<?php echo $k->slug?>" class="product-link">
                                <div class="product-hover-sign">
                                  <hr/>
                                  <hr/>
                                </div>
                              </a>
                            <div class="product-info">
                              <a href="asdasd.php"><h3><?php echo $k->name ?></h3></a>
                              <span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">Rp </span><?php echo number_format($k->price) ?></span></span>
                            </div>
                            <div class="product-actions">
                              <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                              </div>
                              <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="banner-shortcode-wrap style_4">
                    <div class="banner-content title_left">
                      <h3 class="banner-title title_left">Bunga Papan</h3><span class="banner-label label_left">Bright light plant</span><img src="<?php echo base_url() ?>assets-front/images/demo/banner3-h4.jpg" alt="Outdoor"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="div-box mt mb">
          <div class="home-3-our-services">
            <div class="container">
              <div class="home-3-our-services-content text-center">
                <h2 class="title-style title-style-1 mb-45"><span class="title-left">Mengapa </span><span class="title-right">Plaza Bunga?</span></h2>
              </div>
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="style_4 icon-box-shortcode-wrap">
                    <div class="icon-box-container">
                      <div class="icon-wrap">
                        <div class="icon-main bg-1f2a37"><span class="fa fa-truck color-fff"></span></div>
                      </div>
                      <div class="icon-content">
                        <div class="icon-title"> Gratis Ongkir </div>
                        <p class="icon-description">Gratis pengiriman di berikan kepada pelanggan untuk area Makassar.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="style_4 icon-box-shortcode-wrap">
                    <div class="icon-box-container">
                      <div class="icon-wrap">
                        <div class="icon-main bg-1f2a37"><span class="fa fa-list color-fff"></span></div>
                      </div>
                      <div class="icon-content">
                        <div class="icon-title"> Bebas Custom </div>
                        <p class="icon-description">Plaza Bunga memprioritaskan Design Produk yang Elegan dan Menarik.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="style_4 icon-box-shortcode-wrap">
                    <div class="icon-box-container">
                      <div class="icon-wrap">
                        <div class="icon-main bg-1f2a37"><span class="fa fa-phone color-fff"></span></div>
                      </div>
                      <div class="icon-content">
                        <div class="icon-title"> Layanan Konsultasi </div>
                        <p class="icon-description">Konsultasi perawatan Tanaman Anda agar tetap dalam kondisi optimal.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="div-box testimonial-carousel mt mb">
          <div class="container">
            <h2 class="title-style title-style-1 text-center mb"><span class="title-left">Test</span><span class="title-right">imonials</span></h2>
            <div data-number="3" data-margin="0" data-loop="yes" data-navcontrol="yes" class="begreen-owl-carousel">
              <?php foreach ($testimoni as $t) :?>
                <div class="yolo-testimonial testimonial-carousel-6">
                  <div class="testimonials testimonial-list">
                    <div class="testimonial-item">
                      <div class="testimonial-image">
                        <?php if ($t->image!=null) {
                          echo '<img src='.base_url().'xfile/testimoni/'.$t->image.' alt="testimonial-Img2" width="345" height="345" class="attachment-post-thumbnail size-post-thumbnail wp-post-image"/>';
                        }else{echo '<img src='.base_url().'xfile/no-pic.jpg alt="testimonial-Img2" width="345" height="345" class="attachment-post-thumbnail size-post-thumbnail wp-post-image"/>';
                        }?>
                      </div>
                      <div class="testimonial-content"><i class="fa fa-quote-right"></i>
                        <p class="testimonial-excerpt"><?php echo $t->description; ?></p>
                        <div class="testimonial-title"><?php echo $t->name; ?></div>
                        <div class="testimonial-position"><?php echo $t->title; ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>

              <div class="yolo-testimonial testimonial-carousel-6">
                <div class="testimonials testimonial-list">
                  <div class="testimonial-item">
                    <div class="testimonial-image"><img src="<?php echo base_url() ?>assets-front/images/demo/testimonial-Img1.jpg" alt="testimonial-Img2" width="345" height="345" class="attachment-post-thumbnail size-post-thumbnail wp-post-image"/></div>
                    <div class="testimonial-content"><i class="fa fa-quote-right"></i>
                      <p class="testimonial-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>
                      <div class="testimonial-title">Helen Barbara</div>
                      <div class="testimonial-position">Designer</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="yolo-testimonial testimonial-carousel-6">
                <div class="testimonials testimonial-list">
                  <div class="testimonial-item">
                    <div class="testimonial-image"><img src="<?php echo base_url() ?>assets-front/images/demo/testimonial-Img4.jpg" alt="testimonial-Img2" width="345" height="345" class="attachment-post-thumbnail size-post-thumbnail wp-post-image"/></div>
                    <div class="testimonial-content"><i class="fa fa-quote-right"></i>
                      <p class="testimonial-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>
                      <div class="testimonial-title">Helen Barbara</div>
                      <div class="testimonial-position">Designer</div>
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
