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
                  <input type="text" name="name" class="form-control">
                </div>
              </div>
						<!-- <div class="form-group row">
                <label class="col-sm-2 col-form-label">slug</label>
                <div class="col-sm-10">
                  <input type="text" name="slug" class="form-control">
                </div>
              </div> -->
						<!-- <div class="form-group row">
                <label class="col-sm-2 col-form-label">category_id</label>
                <div class="col-sm-10">
                  <input type="text" name="category_id" class="form-control">
                </div>
              </div> -->
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nama Kategori</label>
              <div class="col-sm-10">
                <select class="form-control" name="category_id" id="category_id">
                    <option value="">Please Select</option>
                    <?php foreach ($data_category as $d ): ?>
                      <option value="<?php echo $d->id ?>"><?php echo $d->slug ?></option>
                    <?php endforeach; ?>
							    </select>
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
