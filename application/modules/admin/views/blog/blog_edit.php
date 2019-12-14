<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit blog</h4>
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
              <label for="example-text-input" class="col-sm-2 col-form-label">Judul Blog</label>
              <div class="col-sm-10">
                <input type="text" name="title" class="form-control" value="<?php echo $dataedit->title?>" required>
              </div>
              </div>
            <!-- <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">slug</label>
              <div class="col-sm-10">
                <input type="text" name="slug" class="form-control" value="<?php echo $dataedit->slug?>">
              </div>
              </div> -->
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Teks</label>
              <div class="col-sm-10">
                <textarea name="text" class="form-control summernote" rows="8" cols="80"><?php echo $dataedit->text?></textarea>
              </div>
              </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Gambar</label>
              <div class="col-sm-10">
                  <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url().'xfile/blog/'.$dataedit->image?>" name="image">
              </div>
              </div>
						<!-- <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">created_on</label>
              <div class="col-sm-10">
                <input type="text" name="created_on" class="form-control" value="<?php echo $dataedit->created_on?>">
              </div>
              </div> -->
						<!-- <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">updated_on</label>
              <div class="col-sm-10">
                <input type="text" name="updated_on" class="form-control" value="<?php echo $dataedit->updated_on?>">
              </div>
              </div> -->
						<!-- <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">user_id</label>
              <div class="col-sm-10">
                <input type="text" name="user_id" class="form-control" value="<?php echo $dataedit->user_id?>">
              </div>
              </div> -->

        </div>
        <input type="hidden" id="deleteFiles" name="deleteFiles">
        <div class="col-12">
          <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
        </div>
      </form>
      </div>
    </section>
