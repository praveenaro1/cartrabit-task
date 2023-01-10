<!-- Toast Information  -->
<?php  displyFlashMessage('toast_info'); ?>

<!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper" style="margin-right:0px !important;">
     <div class="container-full">
      <div class="content-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h3 class="page-title">List Service</h3>
               <div class="d-inline-block align-items-center">
                  <nav>
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">List Service</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      <!-- Main content -->
      <section class="content">
         <div class="row">
            <div class="col-sm-12 mb-25">
               <a href="<?php echo base_url('admin/service/add'); ?>" class="btn btn-sm btn-primary btn-block">Add New Service</a>
            </div>
            <?php
           $service=getAllService();
           // print_r($service);exit;
            $sno=1;
            if(!empty($service)){
               foreach ($service as $value) { ?>
            <div class="col-md-4 col-sm-12">
               <div class="d-flex p-5 align-items-center bg-white mb-20">
                 <div class="media-body">
                  <p><a href="<?php echo base_url('admin/service') ?>" ><?php echo $value->name ?></a></p>
                 </div>
                 <div class="box-tools pull-right">
                  <a href="<?php echo base_url('admin/service/edit/'.$value->id); ?>" class="btn btn-box-tool btn-xs" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>                  
                  <br>
                  <a href="<?php echo base_url('admin/service/delete/'.$value->id); ?>" class="btn btn-box-tool btn-xs" data-toggle="tooltip" title="" data-original-title="Delete"><i class="text-primary fa fa-trash"></i></a>
                 </div>
               </div>            
            </div>
            <?php } } ?>
         </div>
      </section>
      <!-- /.content -->
     </div>
   </div>
   <!-- /.content-wrapper -->
                        

