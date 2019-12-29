<?php
// $s = "alalo";
// $res = "he".substr($s,1);
// echo $res;
  $wa1 = substr($noWA->whatsapp, 0, 2);
  $wa2 = substr($noWA->whatsapp, 0, 3);
  $nomorWA = $noWA->whatsapp;
  if (($wa1!='62')&&($wa1=='08')) {
    $whatsapp  = '62'.substr($nomorWA,1);
  }elseif (($wa2=='+62')) {
    $whatsapp  = ''.substr($nomorWA,1);
  };
?>

<div class="div-box">
  <div class="banner-subpage">
    <figure><img src="<?php echo base_url() ?>assets-front/images/background/bg-banner.jpg" alt="bg-banner"/></figure>
    <div class="banner-subpage-content">
      <h2>Hand Bouquet</h2>

    </div>
  </div>
</div>
  <div class="div-box mb mt">
          <div class="container">
            <div class="row">
              <div class="col-md-5">
                <div class="single-product-slider">
                  <div id="sync1" class="owl-carousel owl-template">

                    <?php if ($detail->image1!=null) { ?>
                        <div class="item"><figure><img src='<?php echo base_url().'xfile/product/'.$detail->image1 ?>' alt="slide" width="1080" height="768"/></figure></div>
                    <?php }; if ($detail->image2!=null) { ?>
                        <div class="item"><figure><img src='<?php echo base_url().'xfile/product/'.$detail->image2 ?>' alt="slide" width="1080" height="768"/></figure></div>
                    <?php }; if ($detail->image3!=null) { ?>
                        <div class="item"><figure><img src='<?php echo base_url().'xfile/product/'.$detail->image3 ?>' alt="slide" width="1080" height="768"/></figure></div>
                    <?php }; if ($detail->image4!=null) { ?>
                        <div class="item"><figure><img src='<?php echo base_url().'xfile/product/'.$detail->image4 ?>' alt="slide" width="1080" height="768"/></figure></div>
                    <?php }?>

                  </div>
                  <div id="sync2" class="owl-carousel owl-template">
                      <?php if ($detail->image1!=null) {
                        echo '<div class="item"><figure><img src='.base_url().'xfile/product/'.$detail->image1.' alt="slide" width="180" height="130"/></figure></div>';
                      };?>
                      <?php if ($detail->image2!=null) {
                        echo '<div class="item"><figure><img src='.base_url().'xfile/product/'.$detail->image2.' alt="slide" width="180" height="130"/></figure></div>';
                      };?>
                      <?php if ($detail->image3!=null) {
                        echo '<div class="item"><figure><img src='.base_url().'xfile/product/'.$detail->image3.' alt="slide" width="180" height="130"/></figure></div>';
                      };?>
                      <?php if ($detail->image4!=null) {
                        echo '<div class="item"><figure><img src='.base_url().'xfile/product/'.$detail->image4.' alt="slide" width="180" height="130"/></figure></div>';
                      };?>
                    </div>
                  </div>
                </div>
              <div class="col-md-7">
                <div class="single-product-content">
                  <div class="summary-product entry-summary">
                    <h2 class="product_title mb-45"><?php echo strtoupper($detail->name);?></h2>
                    <div>
                      <p class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">Rp.</span> <?php echo number_format($detail->price)?></span></p>
                    </div>
                    <div class="product-single-short-description">
                      <p><?php echo $detail->description?></p>
                    </div>
                    <form class="cart" style="margin-left: -11px;">
                      <a href="<?php echo "https://api.whatsapp.com/send?phone=".$whatsapp."&text=Hallo%20Plaza%20Bunga,%20Saya%20ingin%20memesan%20".($detail->name)."%20Yang%20Berharga%20Rp.%20".number_format($detail->price).'%20Link :'.base_url().'product/'.$detail->slug?>" class="btn btn-1 single_add_to_cart_button button alt">PESAN SEKARANG</a>
                    </form>

                    <div class="product_meta">
                      <span class="product-stock-status-wrapper">
                        <label>Ukuran:</label><span class="product-stock-status in-stock"><?php echo $detail->size;?></span>
                      </span>
                        <span class="posted_in">
                        <label>Kategori:</label><a href="#"><?php echo $detail->category?></a></span>
                        <span class="tagged_as">
                        <label>Tag:</label><a href="#">PlazaBunga. </a>
                        </span>
                    </div>
                    <div class="social-share-wrap">
                      <label><i class="fa fa-share-alt"></i>Share:</label>
                      <ul class="social-share">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<div class="div-box mb">
  <div class="container">
    <div class="title-style title-style-2 text-center mb-20">
      <h2>Produk Terkait </h2>
    </div>
    <?php //var_dump($other);?>
    <div data-number="4" data-margin="0" data-loop="no" data-navcontrol="yes" class="shortcode-product-wrap product-begreen begreen-owl-carousel">

      <?php foreach ($other as $o): ?>
      <div class="product-item-wrap product-style_1">
        <div class="product-item-inner">
          <div class="product-thumb">
            <div class="product-thumb-primary"><img src="<?php echo base_url() ?>xfile/product/<?php echo $o->image1?>" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div>
            <a href="<?php echo base_url()?>product/<?php echo $o->slug?>" class="product-link"><div class="product-hover-sign"><hr/><hr/></div></a>
            <div class="product-info">
                <h3><?php echo $o->name?></h3></a><span class="price">
                <span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">Rp.</span><?php echo number_format($o->price)?></span></span>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach;?>
    </div>
  </div>
</div>
