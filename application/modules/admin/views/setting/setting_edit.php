<?php if($this->session->flashdata('message')) {
      $flashMessage=$this->session->flashdata('message');
    echo "<script>alert('$flashMessage')</script>";
    } ?>
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
              <label for="example-text-input" class="col-sm-2 col-form-label">No. Telepon</label>
              <div class="col-sm-10">
                <input type="text" name="phone" class="form-control" value="<?php echo $dataedit->phone?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Whatsapp</label>
              <div class="col-sm-10">
                <input type="text" name="whatsapp" class="form-control" value="<?php echo $dataedit->whatsapp?>" required>
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Nama Facebook</label>
              <div class="col-sm-10">
                <input type="text" name="fb_title" class="form-control" value="<?php echo $dataedit->fb_title?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Link Facebook</label>
              <div class="col-sm-10">
                <input type="text" name="fb_link" class="form-control" value="<?php echo $dataedit->fb_link?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Nama Instagram</label>
              <div class="col-sm-10">
                <input type="text" name="ig_title" class="form-control" value="<?php echo $dataedit->ig_title?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Link Instagram</label>
              <div class="col-sm-10">
                <input type="text" name="ig_link" class="form-control" value="<?php echo $dataedit->ig_link?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <input type="text" name="address" class="form-control" value="<?php echo $dataedit->address?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">E-Mail</label>
              <div class="col-sm-10">
                <input type="text" name="email" class="form-control" value="<?php echo $dataedit->email?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Quote</label>
              <div class="col-sm-10">
                <input type="text" name="quote" class="form-control" value="<?php echo $dataedit->quote?>">
              </div>
              </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Minimal Produk Dilihat</label>
              <div class="col-sm-10">
                <input type="number" name="minimal_view" class="form-control" value="<?php echo $dataedit->minimal_view?>">
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
