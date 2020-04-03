
<div class="container">

  <div class="panel">
    <div class="panel-body">

      <section class="content-header">
        <h1>
          Produk
          <small>Data Produk</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <section class="content">
        <div class="row">
          <section class="col-lg-12">
            <div class="box box-info">

              <div class="box-header">
                <h3 class="box-title">Produk</h3>
                <a href="<?php echo base_url('index.php/products/tambah'); ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> &nbsp Tambah Produk Baru</a>              
              </div>
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped" id="table-datatable">
                    <thead>
                      <tr>
                        <th width="1%">NO</th>
                        <th>NAMA PRODUK</th>
                        <th>HARGA</th>
                        <th width="15%">FOTO</th>
                        <th width="10%">OPSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($products as $product):
                        ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $product->name ?></td>
                          <td><?php echo $product->harga ?></td>
                          <td>
                            <center>
                            <img src="<?php echo base_url()?>./assets/img/shop/<?php echo $product->foto; ?>" width="150px" height="150px" alt="">
                            </center>
                          </td>
                          <td>                        
                            <a class="btn btn-warning btn-sm" href="<?php echo base_url('index.php/products/edit/'.$product->product_id) ?>"><i class="fa fa-cog"></i></a>
                            <a class="btn btn-danger btn-sm" href="<?php echo base_url('index.php/products/delete/'.$product->product_id) ?>"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </section>
        </div>
          
      </section>

    </div>
  </div>
</div>

