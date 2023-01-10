<!-- Toast Information  -->
<?php  displyFlashMessage('toast_info'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-right: 0px !important;">
     <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h3 class="page-title">Update Completed Service Details</h3>
               <div class="d-inline-block align-items-center">
                  <nav>
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/home') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url('admin/home') ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url('admin/list_bike'); ?>">List Service</a></li>
                     </ol>
                  </nav>
               </div>
            </div>
            
         </div>
      </div>

      <!-- Main content -->
      <section class="content" >

         <div class="row">
           <div class="col-12">
            <div class="box">
              <div class="box-body">
               <form enctype="multipart/form-data" method="post" action="<?php echo base_url('AdminController/updateServicecomplete/'.$bike->id); ?>">
                  <div class="form-body">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                             <label class="font-weight-700 font-size-16">Name</label>
                             <input type="text" class="form-control" placeholder="bike Name" name="name" value="<?php echo $bike->name; ?>">
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Service</label>
                              <input type="text" class="form-control" placeholder="bike Number" name="service"  value="<?php echo $bike->service; ?>">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">phone</label>
                              <input type="text" class="form-control" placeholder="" name="phone" value="<?php echo $bike->phone; ?>" >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Email</label>
                              <input type="text" class="form-control" placeholder="" name="email" value="<?php echo $bike->email; ?>" >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Address</label>
                              <input type="text" class="form-control" placeholder="" name="address" value="<?php echo $bike->address; ?>">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Completed Status</label>
                              <select class="form-control" name="complete_status">
                                 <option value="1" <?php if($bike->complete_status==1){ echo 'selected';} ?> >Completed</option>
                                 <option value="0" <?php if($bike->complete_status==0){ echo 'selected';} ?> >Accepted</option>
                              </select>
                           </div>
                        </div>
                        <!--/span-->
                     </div>
                  </div>
                  <div class="form-actions mt-10">
                     <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Update</button>
                     <a href="<?php echo base_url('admin/bike'); ?>" class="btn btn-danger">
                        <i class="fa fa-times"></i> Cancel
                     </a>                     
                  </div>
               </form>
              </div>
            </div>
           </div>      
        </div>

      </section>
      <!-- /.content -->
     </div>
  </div>
  <!-- /.content-wrapper -->


