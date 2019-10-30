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
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">description</label>
                <div class="col-sm-10">
                  <input type="text" name="description" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">price</label>
                <div class="col-sm-10">
                  <input type="text" name="price" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">size</label>
                <div class="col-sm-10">
                  <input type="text" name="size" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">image1</label>
                <div class="col-sm-10">
                  <input type="text" name="image1" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">image2</label>
                <div class="col-sm-10">
                  <input type="text" name="image2" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">image3</label>
                <div class="col-sm-10">
                  <input type="text" name="image3" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">image4</label>
                <div class="col-sm-10">
                  <input type="text" name="image4" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">category_id</label>
                <div class="col-sm-10">
                  <input type="text" name="category_id" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">subcategory_id</label>
                <div class="col-sm-10">
                  <input type="text" name="subcategory_id" class="form-control">
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