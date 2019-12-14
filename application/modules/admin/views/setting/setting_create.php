<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">No. Telepon</label>
                <div class="col-sm-10">
                  <input type="text" name="phone" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Whatsapp</label>
                <div class="col-sm-10">
                  <input type="text" name="whatsapp" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Facebook</label>
                <div class="col-sm-10">
                  <input type="text" name="fb_title" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Link Facebook</label>
                <div class="col-sm-10">
                  <input type="text" name="fb_link" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Instagram</label>
                <div class="col-sm-10">
                  <input type="text" name="ig_title" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Link Instagram</label>
                <div class="col-sm-10">
                  <input type="text" name="ig_link" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" name="address" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">E-Mail</label>
                <div class="col-sm-10">
                  <input type="text" name="email" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Quote</label>
                <div class="col-sm-10">
                  <input type="text" name="quote" class="form-control">
                </div>
              </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Minimal Produk Dilihat</label>
                <div class="col-sm-10">
                  <input type="number" name="minimal_view" class="form-control">
                </div>
              </div>
</div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
        </div>
      </form>
      </div>
    </section>
