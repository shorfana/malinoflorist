<div class="div-box mb-45">
  <div class="banner-subpage">
    <figure><img src="<?php echo base_url() ?>assets-front/images/background/bg-banner.jpg" alt="bg-banner"/  style="position:static;"></figure>
    <div class="banner-subpage-content">
      <?php if (isset($subcategory)) {
        echo "<h2>".$contain_title->name."</h2>";
      }elseif (isset($category)) {
        echo "<h2>".$contain_title->name."</h2>";
      }?>
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
        $minimal_view = $minView->minimal_view;
        if (isset($subcategory)) {
          foreach ($subcategory as $p) :
            if ($p->product_show>=$minimal_view) {
              $productClass1 = "indoor new";
            }else {
              $productClass1 = "";
            }
            if ($p->tanggal<=14) {
              $productClass2 = "featured pots";
            }else {
              $productClass2 = "";
            }
          ?>
            <li data-category="outdoor" class="element-item product-item-wrap product-style_1 <?php echo $productClass1.' '.$productClass2?>seeds">
              <div class="product-item-inner">
                <div class="product-thumb">
                  <div class="product-flash-wrap"></div>
                  <div class="product-thumb-primary">
                    <img src="<?php echo base_url() ?>xfile/product/<?php echo $p->image1 ?>" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                  </div>
                  <a href="<?php echo base_url().'product/'.$p->slug?>" class="product-link"><div class="product-hover-sign"><hr/><hr/></div></a>
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
            if ($p->product_show>=$minimal_view) {
              $productClass1 = "indoor new";
            }else {
              $productClass1 = "";
            }
            if ($p->tanggal<=14) {
              $productClass2 = "featured pots";
            }else {
              $productClass2 = "";
            }
          ?>
              <li data-category="outdoor" class="element-item product-item-wrap product-style_1 <?php echo $productClass1.' '.$productClass2?> seeds">
                <div class="product-item-inner">
                  <div class="product-thumb">
                    <div class="product-flash-wrap"></div>
                    <div class="product-thumb-primary">
                      <img src="<?php echo base_url() ?>xfile/product/<?php echo $p->image1 ?>" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                    </div>
                    <a href="<?php echo base_url().'product/'.$p->slug?>" class="product-link"><div class="product-hover-sign"><hr/><hr/></div></a>
                    <div class="product-info">
                      <a href="#"><h3><?php echo $p->name?></h3></a>
                      <span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">Rp. </span><?php echo number_format($p->price)?></span></span>
                    </div>
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
        </li>
      </ul>
    </div> -->
    <!-- <p class="button-product text-center mt-20"><a class="btn btn-15">Load more</a></p> -->
  </div>
</div>


</div>
