<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit setting</h4>
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
              <label for="example-text-input" class="col-sm-2 col-form-label">phone</label>
              <div class="col-sm-10">
                <input type="text" name="phone" class="form-control" value="<?php echo $dataedit->phone?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">whatsapp</label>
              <div class="col-sm-10">
                <input type="text" name="whatsapp" class="form-control" value="<?php echo $dataedit->whatsapp?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">fb_title</label>
              <div class="col-sm-10">
                <input type="text" name="fb_title" class="form-control" value="<?php echo $dataedit->fb_title?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">fb_link</label>
              <div class="col-sm-10">
                <input type="text" name="fb_link" class="form-control" value="<?php echo $dataedit->fb_link?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">ig_title</label>
              <div class="col-sm-10">
                <input type="text" name="ig_title" class="form-control" value="<?php echo $dataedit->ig_title?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">ig_link</label>
              <div class="col-sm-10">
                <input type="text" name="ig_link" class="form-control" value="<?php echo $dataedit->ig_link?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">address</label>
              <div class="col-sm-10">
                <input type="text" name="address" class="form-control" value="<?php echo $dataedit->address?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">email</label>
              <div class="col-sm-10">
                <input type="text" name="email" class="form-control" value="<?php echo $dataedit->email?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">quote</label>
              <div class="col-sm-10">
                <input type="text" name="quote" class="form-control" value="<?php echo $dataedit->quote?>">
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
