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
            <article class="post blog-article">
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
