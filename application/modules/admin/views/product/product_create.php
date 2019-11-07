<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea type="text" name="description" class="form-control"></textarea>
                  <!-- <input type="text" name="description" class="form-control"> -->
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                  <input type="number" name="price" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Ukuran</label>
                <div class="col-sm-10">
                  <input type="text" name="size" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Gambar 1</label>
                <div class="col-sm-10">
                  <input type="file" id="input-file-now-custom-1" class="dropify" name="image1">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Gambar 2</label>
                <div class="col-sm-10">
                  <input type="file" id="input-file-now-custom-1" class="dropify" name="image2">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Gambar 3</label>
                <div class="col-sm-10">
                  <input type="file" id="input-file-now-custom-1" class="dropify" name="image3">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Gambar 4</label>
                <div class="col-sm-10">
                  <input type="file" id="input-file-now-custom-1" class="dropify" name="image4">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                  <select class="form-control" name="category_id" id="id_category">
                      <option value="">Please Select</option>
                      <?php foreach ($category_data as $d ): ?>
                        <option <?php echo $category_data_selected == $d->id ? 'selected="selected"' : '' ?>
                        value="<?php echo $d->id ?>"><?php echo $d->name ?></option>
                      <?php endforeach; ?>
  							    </select>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Sub Kategori</label>
                <div class="col-sm-10">
                  <select class="form-control" name="subcategory_id" id="id_subcategory">
                      <option value="">Please Select</option>
                      <?php foreach ($sub_category_data as $d ): ?>
                        <option <?php echo $sub_category_data_selected ? 'selected="selected"' : '' ?>
                        class="<?php echo $d->category_id ?>"  value="<?php echo $d->id ?>"><?php echo $d->name ?></option>
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
        <script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.chained.min.js') ?>"></script>
        <script>
              $("#id_subcategory").chained("#id_category");
        </script>
