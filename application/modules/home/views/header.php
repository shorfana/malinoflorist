<header class="header yolo-header-style-10">
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
                    <a href="<?php echo getSetting()->ig_link?>">
                      <i style="margin-left: 15px" class="fa fa-instagram"></i> <?php echo getSetting()->ig_title?>
                    </a>
                    <a href="<?php echo getSetting()->fb_link?>">
                      <i style="margin-left: 15px" class="fa fa-facebook"></i> <?php echo getSetting()->fb_title?>
                    </a>
                    <a href="#"><i style="margin-left: 15px" class="fa fa-whatsapp"></i> Hubungi Kami <?php echo getSetting()->whatsapp?></a>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
        <div class="mobile-menu">
          <div class="col-3 text-left"><a href="#primary-menu"><i class="fa fa-bars"></i></a></div>
          <div class="col-3 text-center">
            <div class="logo">
          <h1><a href="<?php echo base_url() ?>home"><img src="<?php echo base_url() ?>assets-front/images/logo/BungaPlaza-Logo.jpeg" alt="logo" height="150px" width="100px"/></a></h1>
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
              <div class="shopping-cart-wrapper header-customize-item with-price">
                <div class="widget_shopping_cart_content">
                  <div class="widget_shopping_cart_icon"><i class="wicon fa fa-shopping-bag"></i><span class="total">0</span></div>
                  <div class="cart_list_wrapper">
                    <div class="scroll-wrapper cart_list product_list_widget scrollbar-inner">
                      <ul class="cart_list product_list_widget scrollbar-inner scroll-content">
                        <li class="empty">
                          <h4>An empty cart</h4>
                          <p>You have no item in your shopping cart</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-logo">
          <h1><a href="<?php echo base_url() ?>home"><img src="<?php echo base_url() ?>assets-front/images/logo/BungaPlaza-Logo.jpeg" alt="logo" height="250px" width="200px"/></a></h1>
        </div>
        <div class="header-bottom">
          <div class="container">
            <div class="main-nav-wrapper">
              <div class="header-left">
                <nav id="primary-menu" class="main-nav">
                  <ul class="nav">
                    <li class=""><a href="<?php echo base_url() ?>home">Home</a></li>
                    <!-- <li class="menu-item menu-blog"><a href="<?php echo base_url() ?>home/product">Bunga Papan</a>
                      <ul class="sub-menu">
                        <li><a href="<?php echo base_url() ?>home/product">Happy Wedding</a></li>
                        <li><a href="<?php echo base_url() ?>home/product">Congratulations</a></li>
                        <li><a href="<?php echo base_url() ?>home/product">Turut Berduka Cita</a></li>
                      </ul>
                    </li> -->
                    <?php
                        $this->load->helper('navbar');
                        foreach (getCatWithSub() as $catsub ):?>
                      <li class="menu-item menu-blog"><a href="#"><?php echo $catsub->name?></a>
                        <ul class="sub-menu">
                          <?php
                          $catSubName = $catsub->name;
                          $csName = getSub($catSubName);
                          foreach ($csName as $csn):?>
                            <li><a href="<?php echo base_url() ?>home/category/<?php echo $csn->slug;?>"><?php echo $csn->name;?></a></li>
                          <?php endforeach;
                          ?>
                        </ul>
                      </li>



                    <?php endforeach;?>
                    <?php foreach (getCatOnly() as $cat ):?>
                      <li class="menu-item menu-project"><a href="<?php echo base_url() ?>home/<?php echo $cat->slug?>"><?php echo $cat->name?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </nav>
                <!-- .header-main-nav-->
              </div>

              <div class="header-right">
                <div class="search-button-wrapper header-customize-item style-default">
                  <div class="icon-search-menu"><i class="wicon fa fa-search"></i></div>
                  <div class="yolo-search-wrapper">
                    <input placeholder="Enter keyword to search" type="search"/>
                    <button class="search"><i class="fa fa-search"></i></button>
                    <button class="close"><i class="pe-7s-close"></i></button>
                  </div>
                </div>
                <div class="shopping-cart-wrapper header-customize-item with-price">
                  <div class="widget_shopping_cart_content">
                    <div class="widget_shopping_cart_icon"><i class="wicon fa fa-shopping-bag"></i><span class="total">0</span></div>
                    <div class="cart_list_wrapper">
                      <div class="scroll-wrapper cart_list product_list_widget scrollbar-inner">
                        <ul class="cart_list product_list_widget scrollbar-inner scroll-content">
                          <li class="empty">
                            <h4>An empty cart</h4>
                            <p>You have no item in your shopping cart</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="header-customize-item canvas-menu-toggle-wrapper"></div>
              </div>
            </div>

          </div>
        </div>
      </header>
