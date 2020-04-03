<div class="container">

  <div class="panel">
    <div class="panel-body">

      <section class="content-header">
        <h1>
          Produk
          <small>Tambah Produk Baru</small>
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
                <h3 class="box-title">Tambah Produk</h3>
                <a href="<?php echo base_url('index.php/products/tampil'); ?>" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a> 
              </div>
              <div class="box-body">

                <form action="<?php base_url('products/tambah') ?>" method="post" enctype="multipart/form-data">
                    <?php if ($this->session->flashdata('success')): ?>
                      <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                      </div>
                    <?php endif; ?>

                  <div class="form-group">
                    <label>Nama Produk</label>
                    <div class="row">
                      <div class="col-lg-4">
                       <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" type="text" name="name" placeholder="nama produk" />
                          <div class="invalid-feedback">
                            <?php echo form_error('name') ?>
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Harga</label>
                    <div class="row">
                      <div class="col-lg-4">
                          <input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>" type="text" name="harga" placeholder="harga produk" />
                            <div class="invalid-feedback">
                              <?php echo form_error('harga') ?>
                            </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Foto </label>
                    <input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" type="file" name="foto" />
                      <div class="invalid-feedback">
                        <?php echo form_error('foto') ?>
                      </div>
                  </div>

                  <div class="form-group">
                    <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                  </div>

                </form>

              </div>

            </div>
          </section>
        </div>
      </section>

    </div>
  </div>
</div>