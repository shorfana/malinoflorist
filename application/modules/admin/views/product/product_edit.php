<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit product</h4>
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
              <label for="example-text-input" class="col-sm-2 col-form-label">description</label>
              <div class="col-sm-10">
                <input type="text" name="description" class="form-control" value="<?php echo $dataedit->description?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">price</label>
              <div class="col-sm-10">
                <input type="text" name="price" class="form-control" value="<?php echo $dataedit->price?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">size</label>
              <div class="col-sm-10">
                <input type="text" name="size" class="form-control" value="<?php echo $dataedit->size?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">image</label>
              <div class="col-sm-10">
                <input type="text" name="image" class="form-control" value="<?php echo $dataedit->image?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">category_id</label>
              <div class="col-sm-10">
                <input type="text" name="category_id" class="form-control" value="<?php echo $dataedit->category_id?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">subcategory_id</label>
              <div class="col-sm-10">
                <input type="text" name="subcategory_id" class="form-control" value="<?php echo $dataedit->subcategory_id?>">
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
