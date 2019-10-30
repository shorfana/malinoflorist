<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit upload</h4>
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
              <label for="example-text-input" class="col-sm-2 col-form-label">image1</label>
              <div class="col-sm-10">
                <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url().'xfile/banner/'.$dataedit->image1?>" name="image1">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">image2</label>
              <div class="col-sm-10">
                <input type="text" name="image2" class="form-control" value="<?php echo $dataedit->image2?>">
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
