<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit product</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">No</label>
                  <div class="col-sm-9">
                    <input type="text" name="id" class="form-control" placeholder="" value="<?php echo $dataedit->id?>" readonly>
                  </div>
                </div>
    						<div class="form-group row">
                  <label for="example-text-input" class="col-sm-3 col-form-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" value="<?php echo $dataedit->name?>">
                  </div>
                  </div>
    						<div class="form-group row">
                  <label for="example-text-input" class="col-sm-3 col-form-label">Deskripsi</label>
                  <div class="col-sm-9">
                    <input type="text" name="description" class="form-control" value="<?php echo $dataedit->description?>">
                  </div>
                  </div>
    						<div class="form-group row">
                  <label for="example-text-input" class="col-sm-3 col-form-label">Harga</label>
                  <div class="col-sm-9">
                    <input type="text" name="price" class="form-control" value="<?php echo $dataedit->price?>">
                  </div>
                  </div>
    						<div class="form-group row">
                  <label for="example-text-input" class="col-sm-3 col-form-label">Ukuran</label>
                  <div class="col-sm-9">
                    <input type="text" name="size" class="form-control" value="<?php echo $dataedit->size?>">
                  </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Kategori</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="category_id" id="id_category" required>
                            <option value="<?php echo $dataedit->category_id ?>"><?php echo $category_product->name ?></option>
                            <<?php foreach ($category_data as $d ): ?>
                              <option <?php echo $category_data_selected == $d->id ? 'selected="selected"' : '' ?>
                              value="<?php echo $d->id ?>"><?php echo $d->name ?></option>
                            <?php endforeach; ?>
                          </select>
                      </div>
                    </div>
                    <?php if ($dataedit->subcategory_id != null): ?>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Sub Kategori</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="subcategory_id" id="id_subcategory">
                                <option value="<?php echo $dataedit->subcategory_id ?>">Please Select</option>
                                <?php foreach ($sub_category_data as $d ): ?>
                                  <option <?php echo $sub_category_data_selected ? 'selected="selected"' : '' ?>
                                  class="<?php echo $d->category_id ?>"  value="<?php echo $d->id ?>"><?php echo $d->name ?></option>
                                <?php endforeach; ?>
                              </select>
                          </div>
                        </div>
                    <?php endif; ?>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="example-text-input" class="col-sm-3 col-form-label">Gambar 1</label>
                  <div class="col-sm-9">
                    <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url().'xfile/product/'.$dataedit->image1?>" name="image1">
                  </div>
                  </div>
    						<div class="form-group row">
                  <label for="example-text-input" class="col-sm-3 col-form-label">Gambar 2</label>
                  <div class="col-sm-9">
                    <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url().'xfile/product/'.$dataedit->image2?>" name="image2">
                  </div>
                  </div>
    						<div class="form-group row">
                  <label for="example-text-input" class="col-sm-3 col-form-label">Gambar 3</label>
                  <div class="col-sm-9">
                    <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url().'xfile/product/'.$dataedit->image3?>" name="image3">
                  </div>
                  </div>
    						<div class="form-group row">
                  <label for="example-text-input" class="col-sm-3 col-form-label">Gambar 4</label>
                  <div class="col-sm-9">
                    <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url().'xfile/product/'.$dataedit->image4?>" name="image4">
                  </div>
                  </div>
              </div>
            </div>

          <input type="hidden" id="deleteFiles" name="deleteFiles">
          <div class="col-12">
            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
             waves-light float-right">Simpan</button>
         </div>

        </form>

      </div>
      </div>
    </section>
        <script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.chained.min.js') ?>"></script>
        <script>
              $("#id_subcategory").chained("#id_category");
        </script>
