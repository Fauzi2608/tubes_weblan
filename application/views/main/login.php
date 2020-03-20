<!DOCTYPE html>  
  <html lang="en">  
  <section class="banner_area">
            <div class="container">
                <div class="banner_text">
                    <h3>Login</h3>
                </div>
            </div>
        </section>  
  <head>  
   <title>Login</title>  
   <meta charset="utf-8">  
   <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
  
     
   <style type="text/css">  
    .form-box{  
     max-width: 500px;  
     position: relative;  
     margin: 5% auto;  
    }  
   </style>  
  </head>  
  <body>  
   <div class="wrapper">  
    <div class="container">  
     <div class="row">  
      <div class="form-box">  
       <div class="panel panel-primary">  
        <div class="panel-heading text-center">  
         <h3>Login</h3>  
        </div>  
        <div class="panel-body">  
        <div class="row">  
          <div class="col-sm-12">  
             <?php echo $this->session->flashdata('msg'); ?>  
          </div>  
         </div>  
         <form action="<?php echo base_url('index.php/user/check_login') ;?>" method="post">  
          <div class="form-group">  
                  <label class="control-label" for="pswd">Email</label>  
                    <div>  
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">  
                      <span class="text-danger"><?php echo form_error('email'); ?></span>  
                    </div>  
                </div>  
                <div class="form-group">  
                  <label class="control-label" for="pswd">Password</label>  
                    <div>  
                      <input type="password" class="form-control" id="pswd" name="password" placeholder="Password" required="">  
                      <span class="text-danger"><?php echo form_error('password'); ?></span>  
                    </div>  
                </div>  
                <div class="form-group">   
                  <div class="row">  
                    <div class="col-sm-offset-5 col-sm-3 btn-submit">  
                      <button type="submit" class="btn btn-success">Login</button>  
                    </div>  
                  </div>  
                </div>  
         </form>  
        </div>  
        <div class="panel-footer text-center">  
         <p><a href="<?php echo base_url('index.php/main/registration')?>"> Don't Have an Account? REGISTER</a></p>   
        </div>  
       </div>  
      </div>  
     </div>  
    </div>  
   </div>  
    
     
  </body>  
  </html>