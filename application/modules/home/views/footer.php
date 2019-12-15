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
<div class="div-box mb" style="margin-top: 50px;">
  <div class="home-7-contact-me">
    <div class="container">
      <div class="row">
      <div class="col-md-3 col-sm-12">
            <img src="<?php echo base_url() ?>assets-front/images/logo/BungaPlaza-Logo.jpeg" alt="logo" height="180px"/>
          </div>
        <div class="col-md-3 col-sm-12">
          <div class="home-6-contact-me-form">
            <h3>Peta Situs</h3>
            <a href="<?php echo base_url()?>about"> <p>Tentang Plaza Bunga</p></a>
            <a href="<?php echo base_url()?>hubungi-kami"><p>Hubungi Kami</p></a>
            <a href="<?php echo base_url()?>blog"> <p>Blog</p></a>
            <a href="<?php echo base_url()?>karir-dan-lowongan"><p>Karir & Lowongan</p></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="home-6-contact-me-form">
              <h3>FAQ Customer</h3>
              <a href="<?php echo base_url()?>cara-belanja"> <p>Cara Berbelanja</p></a>
              <a href="<?php echo base_url()?>kebijakan-transaksi"> <p>Kebijakan Transaksi</p></a>
              <a href="<?php echo base_url()?>metode-pembayaran"> <p>Metode Pembayaran</p></a>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="home-6-contact-me-form">
              <h3>CV. Plaza Bunga</h3>
              <p><?php echo getSetting()->address; ?>
                 <br>Telpon : <?php echo getSetting()->phone;?>
                 <br>Email : <?php echo getSetting()->email;?>
              </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="div-box">
  <footer id="yolo-footer-wrapper">
    <div class="yolo-footer-wrapper footer-3">
      <div class="footer-col">
        <p class="copyright">BeGreen © Yolo 2016 Copyright, All Right Reserved 2016 Designed by <a href="#">Yolo</a></p>
      </div>
    </div>
  </footer>
</div>
