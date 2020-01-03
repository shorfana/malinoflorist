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
                  <div class="entry-thumbnail"><a href="<?php echo base_url().'blog'.$b->slug?>" class="entry-thumbnail_overlay">
                    <?php if ($b->image!=null) {?>
                      <img src="<?php echo base_url().'xfile/blog/'.$b->image ?>" alt="blog" width="420" height="280" class="img-responsive"/></a>
                    <?php } ?>
                  </div>
                </div>
                <div class="entry-content-wrap">
                  <div class="entry-detail">
                    <h3 class="entry-title"><a href="<?php echo base_url().'blog/'.$b->slug?>"><?php echo $b->title?></a></h3>
                    <div class="entry-post-meta-wrap">
                      <ul class="entry-meta">
                        <li class="entry-meta-author"><i class="fa fa-pencil-square-o p-color"></i><a href="#">admin</a></li>
                        <li class="entry-meta-date"><i class="fa fa-clock-o p-color"></i>
                          <?php //echo $b->created_on;
                          $updateBlog = $b->updated_on;
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
                    <div class="entry-excerpt blog-margin">
                      <p><?php $string = $b->text;
                            if (strlen($string) > 100) {
                              $trimstring =  substr_replace($string, "...", 100);
                            } elseif(strlen($string) <=100) {
                              $trimstring = $string;
                            }
                            echo $trimstring;
                        ?>
                      </p>
                    </div>
                    <a href="<?php echo base_url().'blog/'.$b->slug?>"class="btn-readmore"><span class="span-text">Read more</span></a>
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
