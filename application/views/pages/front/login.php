<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Login</title>      

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      <link rel="stylesheet" href="<?php echo base_url('assets/front/assets/') ?>themes/yoga_home1/assets/cache/theme-7dc9dc.css" type="text/css" media="all">

<script src=
        "https://www.google.com/recaptcha/api.js" async defer>
    </script>
<section>
   <div class="container">
      <div class="row" style="margin-bottom: 50px;">
         <div id="content-wrapper" class="right-column col-xs-12 col-sm-7" style="box-shadow: rgb(14 30 37 / 12%) 0px 2px 4px 0px, rgb(14 30 37 / 32%) 0px 2px 16px 0px;
    padding: 30px;
    margin-top: 20px;">
            <section class="contact-form">
               <form  action="<?php echo base_url('FrontController/saveRegister') ?>" method="post">
                  <section class="form-fields">
                     <div class="form-group row">
                        <div class="col-md-12">
                           <h1 style="margin-bottom: 30px;font-size:28px !important;">Registration</h1>
                        </div>
                     </div>
                     <style type="text/css">
                        .height {
                           height: 35px;
                        }
                     </style>
                     <div class="col-md-6">
                        <div class="form-group row">
                        <div class="col-md-12">
                          <label class="form-control-label">Name*</label>
                           <input  class="form-control height" name="name" type="text"
                              value="" autocomplete="off" placeholder="Enter Your Name" >
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-md-12">
                          <label class="form-control-label">Password</label>
                           <input class="form-control height" name="password" type="Password" value="" placeholder="Password" autocomplete="off" required>
                        </div>
                     </div>
                     
                     <div class="form-group row">
                        <div class="col-md-12">
                          <label class="form-control-label">Select Service</label>
                           <select class="form-control" name="service">
                            <option value=""  >Select Service</option>
                           <?php 
                           $product=getAllService();
                        if(!empty($product)){
                           // print_r($product);exit;
                           $sno=1;
                           foreach ($product as $value) { ?>
                                  <option value="<?php  echo $value->name; ?>"  ><?php echo $value->name; ?></option>
                                  <?php $sno++; 
                           }                           
                        }
                       ?>

                           </select>
                        </div>
                     </div>
                     
                     </div>
                     <div class="col-md-6">
                     <div class="form-group row">
                        <div class="col-md-12">
                           <label class="form-control-label">Your Email address*</label>
                           <input class="form-control height" name="email" type="email"
                              value="" autocomplete="off" placeholder="your@email.com" required>
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-md-12">
                          <label class="form-control-label">Your Phone*</label>
                           <input class="form-control height" name="phone" type="text"
                              value="" autocomplete="off" placeholder="Enter Your Phone Number" required>
                        </div>
                     </div>   
                     <div class="form-group row">
                        <div class="col-md-12">
                          <label class="form-control-label">Address</label>
                           <textarea class="form-control" name="address" placeholder="" autocomplete="off" rows="3"  required></textarea>
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-md-12 g-recaptcha" 
                            data-sitekey="6LfUMnAgAAAAAF4pCimk0_UPdB4QRVwjVYiT8eEK" >
                        </div>
                     </div>
                     
                     
                  </section>
                     <div class="form-group row">
                        <div class="col-md-9">
                           <button class="btn btn-primary float-right" type="submit" >Send</button> 
                        </div>
                     </div>   
               </form>
            </section>
         </div>
         <div id="right-column" class="col-xs-12 col-sm-1">
         </div>   
         <div id="right-column" class="col-xs-12 col-sm-4" style="box-shadow: rgb(14 30 37 / 12%) 0px 2px 4px 0px, rgb(14 30 37 / 32%) 0px 2px 16px 0px;
    padding: 30px;
    margin-top: 20px;">
            <section class="contact-form">
               
                  <section class="contact-form">
               <form  action="<?php echo base_url('FrontController/isValidUser') ?>" method="post">
                  <?php echo $this->session->flashdata('login_msg'); ?>
                  <section class="form-fields">
                     <div class="form-group row">
                        <div class="col-md-12">
                           <h1 style="margin-bottom: 30px;font-size:28px !important;">Login</h1>
                        </div>
                     </div>
                     <style type="text/css">
                        .height {
                           height: 35px;
                        }
                     </style>
                     <div class="form-group row">
                        <div class="col-md-9">
                          <label class="form-control-label">Email*</label>
                           <input  class="form-control height" name="name" type="text"
                              value="" placeholder="Enter Your Email" >
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-md-9">
                          <label class="form-control-label">Password*</label>
                           <input class="form-control height" name="password" type="Password" value="" placeholder="Enter Your Last Name" >
                        </div>
                     </div>
                  </section>
                     <div class="form-group row">
                        <div class="col-md-9">
                           <button class="btn btn-primary float-right" type="submit" >Login</button> 
                        </div>
                     </div>
               </form>
            </section>
         </div>
      </div>
      
   </div>
</section>