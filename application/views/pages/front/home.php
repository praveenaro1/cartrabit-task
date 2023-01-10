<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Fulgid Software Solutions</title>
      
      <link rel="stylesheet" href="<?php echo base_url('assets/front/assets/') ?>themes/yoga_home1/assets/cache/theme-7dc9dc.css" type="text/css" media="all">
      
<a class="btn btn-primary float-right" href="<?php echo base_url(); ?>logout">LogOut</a>
<section id="wrapper" class="active_grid">
   <h2 style="display:none !important">.</h2>
   <div class="container">
      <div class="row">
         <div id="content-wrapper" class="right-column col-xs-12 col-sm-12" style="box-shadow: rgb(14 30 37 / 12%) 0px 2px 4px 0px, rgb(14 30 37 / 32%) 0px 2px 16px 0px;
    padding: 30px;
    margin-top: 20px;">
            <section class="contact-form">
               <form  action="<?php echo base_url('FrontController/saveRegister') ?>" method="post">
                  <section class="form-fields">
                     <div class="form-group row">
                        <div class="col-md-12">
                           <h1 style="margin-bottom: 30px;font-size:28px !important;text-align: center;">Welcome To Cartrabit<br><br><span style="margin-left: 50px;" >Mr. <?php echo getLoggedUser()->name; ?></span></h1>
                        </div>
                     </div> 
                     </section> 
               </form>
            </section>
         </div>
      </div>
      
   </div>
</section>

<section id="wrapper" class="active_grid">
   <h2 style="display:none !important">.</h2>
   <div class="container">
      <!-- <div >
         <a href="<?php echo base_url('admin/product/add'); ?>" class="btn btn-primary">Add Product</a>
      </div> -->
      <div class="row">
         <div id="content-wrapper" class="right-column col-xs-12 col-sm-12" style="box-shadow: rgb(14 30 37 / 12%) 0px 2px 4px 0px, rgb(14 30 37 / 32%) 0px 2px 16px 0px;
    padding: 30px;
    margin-top: 20px;">
            <table class="table table-bordered table-hover minimal_data_table user_table">
                     <thead>
                        <tr>
                           <th>S.No</th>                           
                           <th>Customer Name</th>
                           <th>Phone</th>
                           <th>Service</th>
                           <th>Status</th>
                        </tr>
                     </thead>

                     <tbody>
                        <?php  $id=getLoggedUser()->id; 
                        $product=getusers($id);
                        if(!empty($product)){
                           // print_r($product);exit;
                           $sno=1;
                           foreach ($product as $value) {

                              echo '<tr>';
                                 echo '<td>'.$sno.'</td>';                                 
                                 echo '<td>'.$value->name.'</td>';
                                 echo '<td>'.$value->phone.'</td>';                                 
                                 echo '<td>'.$value->service.'</td>';
                                 echo  ($value->complete_status==0) ? '<td><label class="badge badge-danger">Service Accepted</label></td>' : '<td><label class="badge badge-success">Ready Delivery</label></td>';
                              echo '</tr>'; 
                              $sno++; 
                           }                           
                        }
                       ?>
                     </tbody>
                  </table>
         </div>
         
         
      </div>
      
   </div>
</section>
