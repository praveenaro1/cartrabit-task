<!-- Toast Information  -->
<?php  displyFlashMessage('toast_info'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-right: 0px !important;">
     <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h3 class="page-title">Add Service</h3>
               <div class="d-inline-block align-items-center">
                  <nav>
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/home') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url('admin/home') ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url('admin/list_bus'); ?>">Add Service</a></li>
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
               <form enctype="multipart/form-data" method="post" action="<?php echo base_url('AdminController/saveService'); ?>">
                  <div class="form-body">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                             <label class="font-weight-700 font-size-16">Service Name</label>
                             <input type="text" class="form-control" placeholder="Bus Name" name="name" >
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="font-weight-700 font-size-16">Active Status</label>
                              <select class="form-control" name="active_status">
                                 <option value="1" >Active</option>
                                 <option value="0" >Inactive</option>
                              </select>
                           </div>
                        </div>
                        <!--/span-->
                     </div>
                  </div>
                  <div class="form-actions mt-10">
                     <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>
                     <a href="<?php echo base_url('admin/service'); ?>" class="btn btn-danger">
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


