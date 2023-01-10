<!-- Toast Information  -->
<?php  displyFlashMessage('toast_info'); ?>

<!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper" style="margin-right:0px !important;padding-bottom: 30%;">
     <div class="container-full">
      <div class="content-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h3 class="page-title">List Buses</h3>
               <div class="d-inline-block align-items-center">
                  <nav>
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">List Buses</li>
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
               <a href="<?php echo base_url('admin/bus/add'); ?>" class="btn btn-sm btn-primary btn-block">Add New Bus</a>
            </div>
            <?php
            $sno=1;
            if(!empty($buses)){
               foreach ($buses as $value) { ?>
            <div class="col-md-4 col-sm-12">
               <div class="d-flex p-5 align-items-center bg-white mb-20">
                 <a href="<?php echo base_url('admin/service/list_services/'.$value->id) ?>" >
                  <img style="width: 90px;height: 80px;border-radius: 10px;" class="avatar mr-10" src="<?php echo base_url('uploads/images/bus/'.$value->image) ?>" onerror="this.onerror=null;this.src='<?php echo base_url('uploads/images/no_bus.png') ?>';"></a>
                 <div class="media-body">
                  <p><strong><a href="<?php echo base_url('admin/service/list_services/'.$value->id) ?>" ><?php echo $value->number ?></a></strong></p>
                  <p><a href="<?php echo base_url('admin/service/list_services/'.$value->id) ?>" ><?php echo $value->name ?></a></p>
                  <p><a href="<?php echo base_url('admin/service/list_services/'.$value->id) ?>" ><?php echo $value->address ?></a></p>
                 </div>
                 <div class="box-tools pull-right">
                  <a href="<?php echo base_url('admin/bus/edit/'.$value->id); ?>" class="btn btn-box-tool btn-xs" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>                  
                  <br>
                  <a href="<?php echo base_url('admin/bus/delete/'.$value->id); ?>" class="btn btn-box-tool btn-xs" data-toggle="tooltip" title="" data-original-title="Delete"><i class="text-primary fa fa-trash"></i></a>
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
                        

