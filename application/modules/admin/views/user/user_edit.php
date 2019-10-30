<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit user</h4>
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
              <label for="example-text-input" class="col-sm-2 col-form-label">name</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" value="<?php echo $dataedit->name?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">username</label>
              <div class="col-sm-10">
                <input type="text" name="username" class="form-control" value="<?php echo $dataedit->username?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">password</label>
              <div class="col-sm-10">
                <input type="text" name="password" class="form-control" value="<?php echo $dataedit->password?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">email</label>
              <div class="col-sm-10">
                <input type="text" name="email" class="form-control" value="<?php echo $dataedit->email?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">phone</label>
              <div class="col-sm-10">
                <input type="text" name="phone" class="form-control" value="<?php echo $dataedit->phone?>">
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
