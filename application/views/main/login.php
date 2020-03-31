<section class="banner_area">
            <div class="container">
                <div class="banner_text">
                    <h3>Login</h3>
                </div>
            </div>
        </section>
        <br>
        <br>
<div class="container">
  <?php echo form_open('user/login'); ?>
     <div class="row justify-content-center">
         <div class="col-lg-4">
             
             <div class="form-group">
                 <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
             </div>
             <div class="form-group">
                 <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
             </div>
             <button type="submit" class="btn btn-primary btn-block">Login</button>
             <a href="<?php echo base_url('index.php/main/register')?>">don't have an account ?</a>
             <br>
                   <?php echo $this->session->flashdata('login_failed'); ?>
             
         </div>

        <h2></h2> 
     </div>

<?php echo form_close(); ?>
</div>