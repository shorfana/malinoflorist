<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">name</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" required autofocus>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                  <input type="text" name="username" class="form-control" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                  <input type="password" name="password" class="form-control" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" required>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">phone</label>
                <div class="col-sm-10">
                  <input type="number" name="phone" class="form-control" required>
                </div>
              </div>
</div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
           <a href="<?php echo base_url().'admin/user'?>" type="button" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Kembali</a>
        </div>
      </form>
      </div>
    </section>
