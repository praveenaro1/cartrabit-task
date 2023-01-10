<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/admin/') ?>images/favicon.ico">

    <title>Service Track - Log in </title>
  
  <!-- Vendors Style-->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>css/vendors_css.css">
    
  <!-- Style-->  
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>css/skin_color.css"> 

</head>
  
<body class="hold-transition theme-primary bg-img" style="background-image: url(<?php echo base_url('assets/admin/') ?>images/auth-bg/bg-7.jpg)">
  
  <div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100"> 
      
      <div class="col-12">
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-5 col-md-5 col-12">
            <div class="bg-white rounded30 shadow-lg">
              <div class="content-top-agile p-20 pb-0">
                <h2 class="text-primary"><?php echo strtoupper(getSettings()->header); ?></h2>
                <p class="mb-0">Sign in to continue.</p>             
              </div>
              <style type="text/css">
                .alert{
                  margin: 10px 10% 0 10%;
                }
              </style>
              <?php echo $this->session->flashdata('login_msg'); ?>
              <div class="p-40">
                <?php echo form_open('LoginController/isValidAdminUser'); ?>
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                      </div>
                      <input type="text" class="form-control pl-15 bg-transparent" placeholder="Username" name="username">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                      </div>
                      <input type="password" class="form-control pl-15 bg-transparent" placeholder="Password" name="password" value="">
                    </div>
                  </div>
                    <div class="row">
                    <!-- <div class="col-6">
                      <div class="checkbox">
                      <input type="checkbox" id="basic_checkbox_1" >
                      <label for="basic_checkbox_1">Remember Me</label>
                      </div>
                    </div>                    
                    <div class="col-6">
                     <div class="fog-pwd text-right">
                      <a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                      </div>
                    </div> -->
                    <!-- /.col -->
                    <div class="col-12 text-center">
                      <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
                    </div>
                    <!-- /.col -->
                    </div>
                <?php echo form_close(); ?>
                <div class="text-center">
                  <p class="mt-15 mb-0">Don't have an account? <a href="auth_register.html" class="text-warning ml-5">Sign Up</a></p>
                </div>  
              </div>            
            </div>
            <!-- <div class="text-center">
              <p class="mt-20 text-white">- Sign With -</p>
              <p class="gap-items-2 mb-20">
                <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
              </p>  
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Vendor JS -->
  <script src="<?php echo base_url('assets/admin/') ?>js/vendors.min.js"></script>
  <script src="<?php echo base_url('assets/admin/') ?>js/pages/chat-popup.js"></script>
  <script src="<?php echo base_url('assets/admin/') ?>vendor_components/apexcharts-bundle/dist/apexcharts.min.js"></script>
    <script src="<?php echo base_url('assets/admin/') ?>icons/feather-icons/feather.min.js"></script>  

</body>
</html>
