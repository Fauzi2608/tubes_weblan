<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="<?php echo base_url(); ?>assets/img/logoutama.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Cake - Bakery</title>

        <!-- Icon css link -->
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/vendors/linearicons/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/vendors/flat-icon/flaticon.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="<?php echo base_url(); ?>assets/vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
        
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
<section class="banner_area">
            <div class="container">
                <div class="banner_text">
                    <h3>Login Admin</h3>
                </div>
            </div>
        </section>
        <br>
        <br>
<div class="container">
  <?php echo form_open('admin/login_admin'); ?>
     <div class="row justify-content-center">
         <div class="col-lg-4">
             
             <div class="form-group">
                 <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
             </div>
             <div class="form-group">
                 <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
             </div>
             <button type="submit" class="btn btn-primary btn-block">Login</button>
             
             <br>
                   <?php echo $this->session->flashdata('login_failed'); ?>
             
         </div>

        <h2></h2> 
     </div>

<?php echo form_close(); ?>
</div>