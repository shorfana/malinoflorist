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
      <p class="mt-20 mb-20"><b>SAATNYA CIPTAKAN MOMENMU</b></p>
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
                    <div class="product-thumb-primary"><img src="<?= base_url() ?>xfile/product/<?php echo $k->image1 ?>" alt="product1" style="width: 100%;height: 250px;object-fit: cover;" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                      <a href="<?php echo base_url()?>product/<?php echo $k->slug?>" class="product-link">
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
              <a href="<?= base_url() ?>bunga-papan"><h3 class="banner-title title_left">Bunga Papan</h3><span class="banner-label label_left">More Product</span><img src="<?php echo base_url() ?>xfile/banner1.jpg" alt="Outdoor"/></a>
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
              <a href="<?= base_url() ?>hand-bouquet"><h3 class="banner-title title_left">Hand Bouquet</h3><span class="banner-label label_left">More Product</span><img src="<?php echo base_url() ?>xfile/banner2.jpg" alt="Outdoor"/></a>
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
                     <div class="product-thumb-primary"><img src="<?= base_url() ?>xfile/product/<?php echo $k->image1 ?>" alt="product1" style="width: 100%;height: 250px;object-fit: cover;" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                     <a href="<?php echo base_url()?>product/<?php echo $k->slug?>" class="product-link">
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
<!-- <div class="div-box" style="margin-top: 25px;">
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
                    <div class="product-thumb-primary"><img src="<?= base_url() ?>xfile/product/<?php echo $k->image1 ?>" alt="product1" style="width: 100%;height: 250px;object-fit: cover;" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
                      <a href="<?php echo base_url()?>product/<?php echo $k->slug?>" class="product-link">
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
              <a href="<?= base_url() ?>table-flower"><h3 class="banner-title title_left">Table Flower</h3><span class="banner-label label_left">More Product</span><img src="<?php echo base_url() ?>xfile/banner1.jpg" alt="Outdoor"/></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
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
<?php if(sizeof($testimoni)!=0){ ?>
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
                  echo '<img src='.base_url().'xfile/testimoni/'.$t->image.' alt="testimonial-Img2" width="345" height="345" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" style="object-fit:cover;height:100%"/>';
                }else{echo '<img src='.base_url().'xfile/no-pic.jpg alt="testimonial-Img2" width="345" height="345" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" style="object-fit:cover;height:100%"/>';
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
    </div>
  </div>
</div>
<?php } ?>
<div class="div-box">
    <div class="slider-clients">
      <div class="container">
        <div class="col-md-6">
          <h3 align="center">Jasa Pengiriman</h3>
            <div align="center" style="margin-top: 50px;" data-number="3"  data-margin="10" data-loop="no" data-navcontrol="yes"  class="begreen-owl-carousel">
                <?php foreach ($shipping as $s) :?>
                  <div><img src="<?php echo base_url().'xfile/shipping/'.$s->image ?>" style="width: 100px; height: 50px;" alt="<?php echo $s->name?>"/></div>
                <?php endforeach;?>
              </div>
        </div>
        <div class="col-md-6">
            <h3 align="center">Bank Transfer</h3>
            <div align="center" style="margin-top: 50px;" data-number="3"  data-margin="10" data-loop="no" data-navcontrol="yes"  class="begreen-owl-carousel">
                <?php foreach ($bank  as $b) :?>
                  <div><img src="<?php echo base_url().'xfile/bank/'.$b->image ?>" style="width: 100px; height: 50px;" alt="<?php echo $b->name?>"/></div>
                <?php endforeach;?>
              </div>
        </div>

      </div>
    </div>
  </div>
