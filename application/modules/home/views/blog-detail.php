<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Blog Detail</title>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')

    -->
  </head>
  <body class="blog blog-detail">
    <div id="preloaderKDZ"></div>
    <div class="yolo-site">
    <?php $this->load->view('header'); ?>
      <div id="example-wrapper">
        <div class="div-box">
          <div class="banner-subpage">
            <figure><img src="<?php echo base_url() ?>assets-front/images/background/bg-banner.jpg" alt="bg-banner"/></figure>
            <div class="banner-subpage-content">
              <h2>Blog Detail</h2>
              <div class="desc">
                <p>Home </p>
                <p>Blog Detail</p>
              </div>
            </div>
          </div>
        </div>
        <div class="div-box mb mt">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="blog-wrap">
                  <div class="blog-inner blog-style-grid blog-paging-all">
                    <article class="post">
                      <div class="post-item">
                        <div class="entry-wrap">
                          <div class="entry-thumbnail-wrap">
                            <div data-number="1" data-margin="0" data-loop="yes" data-navcontrol="yes" class="begreen-owl-carousel">
                              <div>
                                <?php if ($blog_detail->image!=null) {?>
                                  <img src="<?php echo base_url().'xfile/blog/'.$blog_detail->image ?>" alt="blog" style="height:30%;width: 30%;" />
                                <?php }?>
                              </div>
                            </div>
                          </div>
                          <div class="entry-content-wrap">
                            <div class="entry-detail">
                              <h3 class="entry-title"><a href="#"><?php echo $blog_detail->title?></a></h3>
                              <div class="entry-post-meta-wrap">
                                <ul class="entry-meta">
                                  <li class="entry-meta-author"><i class="fa fa-pencil-square-o p-color"></i><a href="#">admin</a></li>
                                  <li class="entry-meta-date"><i class="fa fa-clock-o p-color"></i>
                                    <?php //echo $b->created_on;
                                    $updateBlog =$blog_detail->updated_on;
                                    $updateFormat = date("Y", strtotime($updateBlog));
                                    if ($updateFormat<2000) {
                                      echo date("d M, Y", strtotime($blog_detail->created_on));
                                    }else{
                                      echo date("d M, Y", strtotime($blog_detail->updated_on));
                                    }
                                    ?>
                                  </li>
                                  <!-- <li class="entry-meta-category"><i class="fa fa-folder-open p-color"></i><a href="#">Planter</a>, <a href="#">Tree</a></li>
                                  <li class="entry-meta-comment"><a href="#"><i class="fa fa-comments-o p-color"></i> 0 Comment</a></li> -->
                                </ul>
                              </div>
                              <div class="entry-excerpt">
                                <?php echo $blog_detail->text?>
                              </div>
                              <!-- <div class="entry-meta-tag-list">
                                <div class="entry-meta-tag">
                                  <label><i class="fa fa-tags"></i>Tags :</label><a href="#">Plant Care</a><a href="#">Plant Of The Month</a>
                                </div>
                                <div class="entry-meta-tag-right">
                                  <div class="social-share-wrap">
                                    <label><i class="fa fa-share-alt"></i>Share:</label>
                                    <ul class="social-share">
                                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                      <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                      <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="admin-deatil text-center">
                  <figure><img src="<?php echo base_url() ?>assets-front/images/demo/avartar-2.jpg" alt="avartar"/></figure>
                  <h2 class="mb-20"><a href="#">Admin</a></h2>
                  <!-- <p>Share a little biographical information to fill out your profile. This may be shown publicly.</p> -->
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
