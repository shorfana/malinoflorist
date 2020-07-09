<section id="dashboard-analytics">
      <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="card bg-analytics text-white">
            <div class="card-content">
              <div class="card-body text-center">
                <img src="<?= base_url() ?>assets/images/elements/decore-left.png" class="img-left" alt="
                card-img-left">
                <img src="<?= base_url() ?>assets/images/elements/decore-right.png" class="img-right" alt="
                card-img-right">
                 <div class="avatar avatar-xl bg-primary shadow mt-0">
                    <div class="avatar-content">
                        <i class="feather icon-award white font-large-1"></i>
                    </div>
                </div>
                <div class="text-center">
                  <h1 class="mb-2 text-white">Halo Admin!,</h1>
                  <p class="m-auto w-75">Selamat datang di <strong>dashboard</strong> Plazabunga.<br>silakan akses fitur melalui sidebar</p>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-package text-warning font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1 mb-25"><?= $total_produk?></h2>
                    <p class="mb-0">Total Produk</p>
                </div>
                <div class="card-content">
                    <div id="orders-received-chart"></div>
                </div>
            </div>
          </div>
      </div>
      <div class="row">
        <!-- Tambah Konten Disini -->
      </div>
    </section>
    <section id="basic-datatable">
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header">
                         <h4 class="card-title">Data Produk</h4>
      		    		<a href="<?= site_url($module.'/product/create') ?>"><button type="button" class="btn btn-primary round waves-effect waves-light">
      	               	 Tambah Produk
      	              	</button>
                      </a>
                     </div>
                     <div class="card-content">

                         <div class="card-body card-dashboard">
                             <div class="table-responsive">
                                 <table class="table crudtable">
                                     <thead>
                                       <tr>
                                           <th>No</th>
                                           <th>Nama</th>
                                           <th>Deskripsi</th>
                                           <th>Harga</th>
                                           <th>Ukuran</th>
                                           <!-- <th>Kategori</th>
                                           <th>Sub Kategori</th> -->
                                           <th>aksi</th>
                                       </tr>
                                     </thead>
                                     <tbody></tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
    <!-- Dashboard Analytics end -->
    <div id="responsive-modal" class="modal fade" tabindex="-1" product="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                  <p id="modalMsg"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                    <a id="modalHref" href="#">
                    <button type="button" class="btn btn-danger waves-effect waves-light">Ya!</button>
                    </a>
                </div>
            </div>
        </div>
    </div>