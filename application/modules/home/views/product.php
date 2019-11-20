<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
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
  <body class="products products-grid-4-columns">
    <div id="preloaderKDZ"></div>
    <div class="yolo-site">
      <?php $this->load->view('header'); ?>
      <div id="example-wrapper">
        <div class="div-box mb-45">
          <div class="banner-subpage">
            <figure><img src="<?php echo base_url() ?>assets-front/images/background/bg-banner.jpg" alt="bg-banner"/></figure>
            <div class="banner-subpage-content">
              <h2>Hand Bouquet</h2>
              <!-- <?php var_dump($subcategory);?> -->
              <!-- <div class="desc">
                <p>Home</p>
                <p>Products Grid 4 Columns</p>
              </div> -->
            </div>
          </div>
        </div>
        <div class="div-box mb">
          <div class="container">
            <div data-js-module="filtering-demo" class="big-demo go-wide">
              <div class="filter-button-group button-group js-radio-button-group container">
                <button data-filter="*" class="button is-checked">Semua</button>
                <button data-filter=".featured" class="button">Produk Terbaru</button>
                <button data-filter=".indoor" class="button">Paling Banyak Dilihat</button>
              </div>
              <ul class="grid shortcode-product-wrap product-begreen columns-4">
                <?php
                if (isset($subcategory)) {
                  foreach ($subcategory as $p) :
                  ?>
                  <li data-category="outdoor" class="element-item product-item-wrap product-style_1 featured indoor new seeds">
                    <div class="product-item-inner">
                      <div class="product-thumb">
                        <div class="product-flash-wrap"></div>
                        <div class="product-thumb-primary">
                          <img src="<?php echo base_url() ?>xfile/product/<?php echo $p->image1 ?>" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                        </div>
                        <a href="../product_detail/<?php echo $p->slug?>" class="product-link"><div class="product-hover-sign"><hr/><hr/></div></a>
                        <div class="product-info">
                          <a href="#"><h3><?php echo $p->name?></h3></a>
                          <span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">Rp. </span><?php echo number_format($p->price)?></span></span>
                        </div>
                        <!-- <div class="product-actions">
                          <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                            <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                          </div>
                          <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                        </div> -->
                      </div>
                    </div>
                  </li>
                  <?php
                  endforeach;
                }elseif (isset($category)) {
                  foreach ($category as $p) :
                  ?>
                  <li data-category="outdoor" class="element-item product-item-wrap product-style_1 featured indoor new seeds">
                    <div class="product-item-inner">
                      <div class="product-thumb">
                        <div class="product-flash-wrap"></div>
                        <div class="product-thumb-primary">
                          <img src="<?php echo base_url() ?>xfile/product/<?php echo $p->image1 ?>" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                        </div>
                        <a href="../product_detail/<?php echo $p->slug?>" class="product-link"><div class="product-hover-sign"><hr/><hr/></div></a>
                        <div class="product-info">
                          <a href="#"><h3><?php echo $p->name?></h3></a>
                          <span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">Rp. </span><?php echo number_format($p->price)?></span></span>
                        </div>
                        <!-- <div class="product-actions">
                          <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                            <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                          </div>
                          <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                        </div> -->
                      </div>
                    </div>
                  </li>
                  <?php
                  endforeach;
                }

                ?>
                <!-- <li data-category="outdoor" class="element-item product-item-wrap product-style_1 featured indoor new seeds">
                  <div class="product-item-inner">
                    <div class="product-thumb">
                      <div class="product-flash-wrap"></div>
                      <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-1.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                        <div class="product-hover-sign">
                          <hr/>
                          <hr/>
                        </div></a>
                      <div class="product-info">
                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="#">
                          <h3>The Hot Holiday Naked Cactus</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>55.00</span></span>
                      </div>
                      <div class="product-actions">
                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                          <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                        </div>
                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li data-category="pots" class="element-item product-item-wrap product-style_1 indoor outdoor pots seeds">
                  <div class="product-item-inner">
                    <div class="product-thumb">
                      <div class="product-flash-wrap"></div>
                      <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-2.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                        <div class="product-hover-sign">
                          <hr/>
                          <hr/>
                        </div></a>
                      <div class="product-info">
                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="#">
                          <h3>Cactus quaerat volupta</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>40.00</span></span>
                      </div>
                      <div class="product-actions">
                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                          <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                        </div>
                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li data-category="seeds" class="element-item product-item-wrap product-style_1 featured indoor pots">
                  <div class="product-item-inner">
                    <div class="product-thumb">
                      <div class="product-flash-wrap"></div>
                      <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-3.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                        <div class="product-hover-sign">
                          <hr/>
                          <hr/>
                        </div></a>
                      <div class="product-info">
                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><a href="#">
                          <h3>The Tall Terrarium Plant</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>52.00</span></span>
                      </div>
                      <div class="product-actions">
                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                          <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                        </div>
                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li data-category="outdoor" class="element-item product-item-wrap product-style_1 indoor new pots">
                  <div class="product-item-inner">
                    <div class="product-thumb">
                      <div class="product-flash-wrap"><span class="on-new product-flash">New</span></div>
                      <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-4.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                        <div class="product-hover-sign">
                          <hr/>
                          <hr/>
                        </div></a>
                      <div class="product-info">
                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="#">
                          <h3>The Calvert with Light Plants</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>42.00</span></span>
                      </div>
                      <div class="product-actions">
                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                          <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                        </div>
                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li data-category="pots" class="element-item product-item-wrap product-style_1 featured pots seeds">
                  <div class="product-item-inner">
                    <div class="product-thumb">
                      <div class="product-flash-wrap"></div>
                      <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-5.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                        <div class="product-hover-sign">
                          <hr/>
                          <hr/>
                        </div></a>
                      <div class="product-info">
                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="#">
                          <h3>The Calvert with Succulents</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>33.00</span></span>
                      </div>
                      <div class="product-actions">
                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                          <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                        </div>
                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li data-category="indoor" class="element-item product-item-wrap product-style_1 indoor outdoor pots">
                  <div class="product-item-inner">
                    <div class="product-thumb">
                      <div class="product-flash-wrap"></div>
                      <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-6.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                        <div class="product-hover-sign">
                          <hr/>
                          <hr/>
                        </div></a>
                      <div class="product-info">
                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="#">
                          <h3>The Succulent Collection</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>44.00</span></span>
                      </div>
                      <div class="product-actions">
                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                          <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                        </div>
                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li data-category="seeds" class="element-item product-item-wrap product-style_1 outdoor pots">
                  <div class="product-item-inner">
                    <div class="product-thumb">
                      <div class="product-flash-wrap"><span class="on-new product-flash">18.56%</span></div>
                      <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-7.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                        <div class="product-hover-sign">
                          <hr/>
                          <hr/>
                        </div></a>
                      <div class="product-info">
                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><a href="#">
                          <h3>The Ezra with Low Light Plants</h3></a><span class="price">
                          <del><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>49.00</span></del><ins><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>40.00</span></ins></span>
                      </div>
                      <div class="product-actions">
                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                          <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                        </div>
                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li data-category="indoor" class="element-item product-item-wrap product-style_1 indoor featured">
                  <div class="product-item-inner">
                    <div class="product-thumb">
                      <div class="product-flash-wrap"><span class="on-new product-flash">Sold</span></div>
                      <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-8.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                        <div class="product-hover-sign">
                          <hr/>
                          <hr/>
                        </div></a>
                      <div class="product-info">
                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="#">
                          <h3>The Tall Terrarium Plant Collection</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>40.00</span></span>
                      </div>
                      <div class="product-actions">
                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                          <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                        </div>
                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li data-category="pots" class="element-item product-item-wrap product-style_1 featured pots seeds">
                  <div class="product-item-inner">
                    <div class="product-thumb">
                      <div class="product-flash-wrap"></div>
                      <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-9.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                        <div class="product-hover-sign">
                          <hr/>
                          <hr/>
                        </div></a>
                      <div class="product-info">
                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="#">
                          <h3>The Calvert with Succulents</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>33.00</span></span>
                      </div>
                      <div class="product-actions">
                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                          <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                        </div>
                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li data-category="indoor" class="element-item product-item-wrap product-style_1 indoor outdoor pots">
                  <div class="product-item-inner">
                    <div class="product-thumb">
                      <div class="product-flash-wrap"></div>
                      <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-10.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                        <div class="product-hover-sign">
                          <hr/>
                          <hr/>
                        </div></a>
                      <div class="product-info">
                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="#">
                          <h3>The Succulent Collection</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>44.00</span></span>
                      </div>
                      <div class="product-actions">
                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                          <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                        </div>
                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li data-category="seeds" class="element-item product-item-wrap product-style_1 outdoor pots">
                  <div class="product-item-inner">
                    <div class="product-thumb">
                      <div class="product-flash-wrap"><span class="on-new product-flash">18.56%</span></div>
                      <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-11.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                        <div class="product-hover-sign">
                          <hr/>
                          <hr/>
                        </div></a>
                      <div class="product-info">
                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><a href="#">
                          <h3>The Ezra with Low Light Plants</h3></a><span class="price">
                          <del><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>49.00</span></del><ins><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>40.00</span></ins></span>
                      </div>
                      <div class="product-actions">
                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                          <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                        </div>
                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li data-category="indoor" class="element-item product-item-wrap product-style_1 indoor featured">
                  <div class="product-item-inner">
                    <div class="product-thumb">
                      <div class="product-flash-wrap"><span class="on-new product-flash">Sold</span></div>
                      <div class="product-thumb-primary"><img src="<?php echo base_url() ?>assets-front/images/demo/product-12.jpg" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="#" class="product-link">
                        <div class="product-hover-sign">
                          <hr/>
                          <hr/>
                        </div></a>
                      <div class="product-info">
                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="#">
                          <h3>The Tall Terrarium Plant Collection</h3></a><span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>40.00</span></span>
                      </div>
                      <div class="product-actions">
                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                          <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                        </div>
                        <div class="add-to-cart-wrap"><a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                      </div>
                    </div>
                  </div>
                </li> -->
              </ul>
            </div>
            <!-- <p class="button-product text-center mt-20"><a class="btn btn-15">Load more</a></p> -->
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
