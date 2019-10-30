<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit transaksi</h4>
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
              <label for="example-text-input" class="col-sm-2 col-form-label">no_invoice</label>
              <div class="col-sm-10">
                <input type="text" name="no_invoice" class="form-control" value="<?php echo $dataedit->no_invoice?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">transaction_date</label>
              <div class="col-sm-10">
                <input type="text" name="transaction_date" class="form-control" value="<?php echo $dataedit->transaction_date?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">id_product</label>
              <div class="col-sm-10">
                <input type="text" name="id_product" class="form-control" value="<?php echo $dataedit->id_product?>">
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
