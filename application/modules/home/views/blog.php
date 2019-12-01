<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Blog Masonry</title>
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
  <body class="blog blog-masonry">
    <div id="preloaderKDZ"></div>
    <div class="yolo-site">
    <?php $this->load->view('header'); ?>
      <div id="example-wrapper">
        <div class="div-box">
          <div class="banner-subpage">
            <figure><img src="<?php echo base_url() ?>assets-front/images/background/bg-banner.jpg" alt="bg-banner"/></figure>
            <div class="banner-subpage-content">
              <h2>Blog Masonry</h2>
              <div class="desc">
                <p>Home </p>
                <p>Blog Masonry</p>
              </div>
            </div>
          </div>
        </div>
        <div class="div-box mb mt">
          <div class="container">
            <div class="blog-wrap">
              <div class="blog-inner blog-style-grid blog-paging-all blog-col-3">

                <!-- <article class="post">
                  <div class="post-item">
                    <div class="entry-wrap">
                      <div class="entry-thumbnail-wrap">
                        <div class="entry-thumbnail"><a href="#" class="entry-thumbnail_overlay"><img src="<?php echo base_url() ?>assets-front/images/demo/blog2-300x203.jpg" alt="blog" width="420" height="280" class="img-responsive"/></a><a href="https://vimeo.com/24487172" data-rel="prettyPhoto[gallery2]" class="prettyPhoto"><i class="fa fa-play-circle"></i></a></div>
                      </div>
                      <div class="entry-content-wrap">
                        <div class="entry-detail">
                          <h3 class="entry-title"><a href="<?php echo base_url()?>home/blog_detail">Plants Of The Month: Sanseivier</a></h3>
                          <div class="entry-post-meta-wrap">
                            <ul class="entry-meta">
                              <li class="entry-meta-author"><i class="fa fa-pencil-square-o p-color"></i><a href="#">admin</a></li>
                              <li class="entry-meta-date"><i class="fa fa-clock-o p-color"></i><a href="#"> July 15, 2016 </a></li>
                              <li class="entry-meta-category"><i class="fa fa-folder-open p-color"></i><a href="#">Planter</a>, <a href="#">Tree</a></li>
                              <li class="entry-meta-comment"><a href="#"><i class="fa fa-comments-o p-color"></i> 0 Comment</a></li>
                            </ul>
                          </div>
                          <div class="entry-excerpt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>
                          </div>
                          <div class="entry-meta-tag">
                            <label><i class="fa fa-tags"></i>Tags :</label><a href="#">Plant Care</a><a href="#">Plant Of The Month</a>
                          </div><a href="<?php echo base_url()?>home/blog_detail" class="btn-readmore"><span class="span-text">Read more</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </article> -->
                <?php foreach ($blog as $b):?>
                  <article class="post">
                    <div class="post-item">
                      <div class="entry-wrap">
                        <div class="entry-thumbnail-wrap">
                          <div class="entry-thumbnail"><a href="<?php echo base_url().'home/blog/blog_detail/'.$b->slug?>" class="entry-thumbnail_overlay">
                            <?php if ($b->image!=null) {?>
                              <img src="<?php echo base_url().'xfile/blog/'.$b->image ?>" alt="blog" width="420" height="280" class="img-responsive"/></a>
                            <?php }
                              //else{?>
                              <!-- <img src="<?php echo base_url().'xfile/no-pic.jpg' ?>" alt="blog" width="420" height="280" class="img-responsive"/></a> -->
                            <?php //}?>
                            <!-- <a href="<?php echo base_url().'xfile/blog/'.$b->image ?>" data-rel="prettyPhoto[gallery1]" class="prettyPhoto"><i class="fa fa-arrows-alt"></i></a> -->
                          </div>
                        </div>
                        <div class="entry-content-wrap">
                          <div class="entry-detail">
                            <h3 class="entry-title"><a href="<?php echo base_url().'home/blog/blog_detail/'.$b->slug?>"><?php echo $b->title?></a></h3>
                            <div class="entry-post-meta-wrap">
                              <ul class="entry-meta">
                                <li class="entry-meta-author"><i class="fa fa-pencil-square-o p-color"></i><a href="#">admin</a></li>
                                <li class="entry-meta-date"><i class="fa fa-clock-o p-color"></i>
                                  <?php //echo $b->created_on;
                                  $updateBlog =$b->updated_on;
                                  $updateFormat = date("Y", strtotime($updateBlog));
                                  if ($updateFormat<2000) {
                                    echo date("d M, Y", strtotime($b->created_on));
                                  }else{
                                    echo date("d M, Y", strtotime($b->updated_on));
                                  }
                                  ?>
                                </li>
                                <!-- <li class="entry-meta-category"><i class="fa fa-folder-open p-color"></i><a href="#">Planter</a>, <a href="#">Tree</a></li> -->
                                <!-- <li class="entry-meta-comment"><a href="#"><i class="fa fa-comments-o p-color"></i> 0 Comment</a></li> -->
                              </ul>
                            </div>
                            <div class="entry-excerpt">
                              <p><?php $string = $b->text;
                                    if (strlen($string) > 100) {
                                      $trimstring = substr($string, 0, 100). ' ...</a>';
                                    } else {
                                      $trimstring = $string;
                                    }
                                    echo $trimstring;
                                ?>
                              </p>
                            </div>
                            <!-- <div class="entry-meta-tag">
                              <label><i class="fa fa-tags"></i>Tags :</label><a href="#">Plant Care</a><a href="#">Plant Of The Month</a>
                            </div> -->
                            <a href="<?php echo base_url().'home/blog/blog_detail/'.$b->slug?>"class="btn-readmore"><span class="span-text">Read more</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                <?php endforeach;?>
              </div>
            </div>
            <!-- <p class="button-product text-center mt-20"> <a class="btn btn-15">Load more</a></p> -->
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
