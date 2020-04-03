<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard Admin - PASTRYKU</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/assets/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/assets/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/assets/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets1/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

 

</head>
<body class="skin-blue" style="background: #d7d7d7">



  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url('index.php/admin/home_admin'); ?>">PASTRYKU</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url('index.php/admin/home_admin'); ?>"><i class="fa fa-dashboard"></i> <span>DASHBOARD</span> <span class="sr-only">(current)</span></a></li>
          <li>
                <a href="<?php echo base_url('index.php/products/tampil'); ?>">
                  <i class="fa fa-gift"></i> <span>DATA PRODUK</span>
                </a>
              </li>

          <li>
            <a href="#">
              <i class="fa fa-retweet"></i> <span>TRANSAKSI / PESANAN</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-file"></i> <span>LAPORAN PENJUALAN</span>
            </a>
          </li> 
          <li>
            <a href="#">
              <i class="fa fa-sign-out"></i> <span>LOGOUT</span>
            </a>
          </li>
        </ul>

        
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


