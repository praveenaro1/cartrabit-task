<!-- Toast Information  -->
<?php  displyFlashMessage('toast_info'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-right: 0px !important;">
     <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h3 class="page-title">Add Bus Details</h3>
               <div class="d-inline-block align-items-center">
                  <nav>
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/home') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url('admin/home') ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url('admin/list_bus'); ?>">List Bus</a></li>
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
               <form enctype="multipart/form-data" method="post" action="<?php echo base_url('AdminController/saveBus'); ?>">
                  <div class="form-body">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                             <label class="font-weight-700 font-size-16">Bus Name</label>
                             <input type="text" class="form-control" placeholder="Bus Name" name="name" >
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Bus Number</label>
                              <input type="text" class="form-control" placeholder="Bus Number" name="number" >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Asset Code</label>
                              <input type="text" class="form-control" placeholder="" name="asset_code" >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Vehicle / Body Type</label>
                              <input type="text" class="form-control" placeholder="" name="body_type" >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Chassis No</label>
                              <input type="text" class="form-control" placeholder="" name="chase_no" >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Engine No</label>
                              <input type="text" class="form-control" placeholder="" name="engine_no" >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Vehicle Model</label>
                              <input type="text" class="form-control" placeholder="" name="vehicle_model" >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Manufacture MM/YY</label>
                              <input type="text" class="form-control" placeholder="" name="manufacture_m_y" >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Axle Profile</label>
                              <input type="text" class="form-control" placeholder="" name="axle_profile" >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Address</label>
                              <textarea class="form-control" rows="1" name="address" placeholder="Enter Address"></textarea>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Active Status</label>
                              <select class="form-control" name="active_status">
                                 <option value="1" >Active</option>
                                 <option value="0" >Inactive</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Bus Image</label>
                              <input type="file" class="form-control" name="image" onchange="document.getElementById('img_preview').src = window.URL.createObjectURL(this.files[0])">
                           </div>
                        </div>

                        <div class="col-md-6">                           
                           <img id="img_preview" style="width: 150px;height: 150px;" alt="your image" src="<?php echo base_url('uploads/images/no_image.jpg'); ?>">
                        </div>
                        <!--/span-->
                     </div>
                  </div>
                  <div class="form-actions mt-10">
                     <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>
                     <a href="<?php echo base_url('admin/bus'); ?>" class="btn btn-danger">
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


