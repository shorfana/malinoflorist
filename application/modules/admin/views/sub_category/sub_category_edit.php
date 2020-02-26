<?php if($this->session->flashdata('message')) {
      $flashMessage=$this->session->flashdata('message');
    echo "<script>alert('$flashMessage')</script>";
    } ?>
    <section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit sub_category</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">id</label>
              <div class="col-sm-10">
                <input type="text" name="id" class="form-control" placeholder="" value="<?php echo $dataedit->id?>" readonly>
              </div>
            </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" value="<?php echo $dataedit->name?>">
              </div>
              </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Pilih Kategori</label>
              <div class="col-sm-10">
                <select class="form-control" name="category_id" id="category_id">
                  <?php
                     echo "<option value='".$selected->category_id."'>".$selected->category_name."</option>";
                     foreach ($not_selected as $n ):?>
                      <option value=<?php echo $n->id?>><?php echo $n->name?></option>
                  <?php endforeach;?>
							    </select>
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
    </section>
