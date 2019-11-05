<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Jasa Pengiriman</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                  <input type="file" id="input-file-now-custom-1" class="dropify" name="image">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">user_id</label>
                <div class="col-sm-10">
                  <input type="text" name="user_id" value="<?php echo $this->session->userdata('id_user'); ?>" class="form-control" readonly>
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
