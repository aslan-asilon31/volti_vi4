<?= $this->extend('templates/template_inventory') ?>

<?= $this->section('content') ?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Product List <i class="fa fa-star"></i> </h1>
          </div>
          <div class="col-sm-6 d-none d-sm-block">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sales</a></li>
              <li class="breadcrumb-item"><a href="#">Inventory</a></li>
              <li class="breadcrumb-item ">Product List</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content pb-3 ">

      
      <div class="btn-group btn-group-toggle mt-2 mb-2" data-toggle="buttons" style="outline: 1px solid purple;">
        <label class="btn btn-purple">
          <input type="radio" name="options" id="btn-card-table" autocomplete="off" checked> <i class="fa fa-list"></i>
        </label>
        <label class="btn btn-purple active">
          <input type="radio" name="options" id="btn-card-kanban" autocomplete="off" > <i class="fa fa-columns"></i>
        </label>
      </div>
      <div class="bg-white p-2">

        
        <div class="row" >
          <div class="col-lg-12">
            
            <div class="d-flex ">
              <div class="col-lg-4">
                <ul class="">
                  <li class="dropdown" style="list-style: none;list-style-type: none !important;border: 1px solid black;border-radius: 8px;">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Stock Quantity</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow  m-3 p-3">
                      <label>Stock Quantity Range</label>
                      <div class="d-flex">
                        <input placeholder=" min 0">
                        <input placeholder=" max 0">
                      </div>
                      <!-- checkbox -->
                      <div class="form-group clearfix mt-2">
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" id="checkboxPrimary1" checked>
                          <label for="checkboxPrimary1">
                            minimum stock
                          </label>
                        </div>
                      </div>
      
                      <div>
                        <a class="btn btn-sm bg-gray">Reset</a>
                        <a class="btn btn-sm bg-purple">Process</a>
                      </div>
      
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4">
                <div class="form-group ml-2 shadow-none" style="outline: none !important;order:1px solid #ccc !important;text-align:center;padding-top: 5px; height: 20px !important;margin-bottom: 10px;" >
                  <select class="form-control select2 no-outline shadow-none" style="outline: none !important;order:1px solid #ccc !important;width: 100%;padding-top: 5px;height:30px !important;">
                      <option selected="selected"  value="category-all" id="category-all"> Semua Kategori</option>
                      <option  value="food-fresh-long-lasting" id="food-fresh-long-lasting">Bahan makanan segar yang tahan lama</option>
                      <option  value="household-cleaning-product" id="household-cleaning-product">Produk kebersihan rumah tangga</option>
                      <option  value="daily-need-product" id="daily-need-product">Barang kebutuhan sehari-hari</option>
                      <option  value="soap-detergent-product" id="soap-detergent-product">Sabun dan deterjen</option>
                      <option  value="cigarette-tobacco-product" id="cigarette-tobacco-product">Rokok dan tembakau</option>
                      <option  value="candy-chocolate-product" id="candy-chocolate-product">Permen dan coklat</option>
                      <option  value="drink-product" id="">Minuman</option>
                      <option  value="dry-food-product" id="dry-food-product">Makanan kering</option>
                      <option  value="can-product" id="can-product">Makanan kaleng</option>
                  </select>
                </div>

              </div>
          </div>

          </div>
        </div>

        
        <div class="row" >
          <div class="col-lg-12 d-flex "  >
                <div class="col-lg-5 di-flex" >
                  <div class="form-group">
                    <div class="input-group">
                      <input type="date" class="form-control float-right" id="reservation" value="2024-07-01"> <span class="ml-2 mr-2 mt-1 ">To</span>
                      <input type="date" class="form-control float-right" id="" value="2024-07-30">

                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  
                </div>
                
                <div class="col-lg-2" style="width: 100%;">
                  <a href="./product-list-create.html" class="btn btn-purple bg-purple"> <i class="fa fa-plus"></i> New Product</a>
                </div>
                
                <div class="col-lg-6" style="width: 100%;">
                  <div class="form-group" >
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn bg-purple active">
                        <input type="radio" name="options" id="btn-all-tampil-menu" autocomplete="off" checked> Semua
                      </label>
                      <label class="btn bg-purple">
                        <input type="radio" name="options" id="btn-tampil-menu" autocomplete="off">Product
                      </label>
                      <label class="btn bg-purple">
                        <input type="radio" name="options" id="btn-tidak-tampil-menu" autocomplete="off"> Ingredients
                      </label>
                    </div>
                  </div>





                </div>





              </div>
              <!-- /.card-header -->
              <div class="card-body" id="card-table" style="overflow-x: auto; overflow-y: auto; max-height: 400px;">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SKU</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>On Hand</th>
                    <th>Incoming</th>
                    <th>Out</th>
                    <th>Produced</th>
                    <th>Sold</th>
                    <th>Wasted</th>
                    <th>In transit</th>
                    <th>Latest</th>
                    <th>Unit</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr id="tampil-menu">
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td> 
                      <a href="javascript:void(0)" class="btn btn-warning btn-sm text-white"><i class="fa fa-edit"></i></a> 
                      <a href="javascript:void(0)" class="btn bg-purple btn-sm"><i class="fa fa-boxes"></i></a> 
                      <a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> 
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>SKU</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th>On Hand</th>
                      <th>Incoming</th>
                      <th>Out</th>
                      <th>Produced</th>
                      <th>Sold</th>
                      <th>Wasted</th>
                      <th>In transit</th>
                      <th>Latest</th>
                      <th>Unit</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="card-body" id="card-kanban" style="overflow-x: auto; overflow-y: auto; max-height: 400px;">
                <div class="row bg-white" style="padding:3px">
                  <div class="col-12 col-sm-6 col-md-6" id="tampil-menu-kanban">
                    <div class="info-box">
                      <span class="info-box-icon bg-info elevation-1"><img src="<?= base_url('adminlte/dist/img/PRODUT-MASTER/klikindomaret.com/MAKANAN/BAHAN-MASAKAN/MAKANAN-POKOK/BERAS-DAN-TEPUNG/BR-BPAPA.png'); ?>" style="width:70px;height:60px;"></span>
    
                      <div class="info-box-content">
                        <span class="info-box-text"> Beras Premium Sania 5kg </span>
                        <span class="info-box-number">
                          Rp 270.000,00-
                        </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-12 col-sm-6 col-md-6" id="tidak-tampil-menu-kanban">
                    <div class="info-box mb-3">
                      <span class="info-box-icon bg-danger elevation-1"><img src="<?= base_url('adminlte/dist/img/PRODUT-MASTER\klikindomaret.com\KESEHATAN\ANTISEPTIK-DAN-SANITASI\TISSUE\TISSUE-KERING\TS-FTN.png'); ?>" style="width:70px;height:60px;"></span>
    
                      <div class="info-box-content">
                        <span class="info-box-text">Facial Tissue non parfume</span>
                        <span class="info-box-number">Rp 37.000,00-</span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
    
                  <!-- fix for small devices only -->
                  <div class="clearfix hidden-md-up"></div>
    
                </div>
                <!-- /.row -->
              </div>
          </div>
          <!-- /.card -->
        </div>

      </div>




      </div>



    </section>

<?= $this->endSection() ?>