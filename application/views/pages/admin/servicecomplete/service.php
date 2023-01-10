  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-right: 0px !important;">
    <div class="container-full">
    <div class="content-header">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
          <h3 class="page-title">Service Completed/Accepted Details</h3>
          <div class="d-inline-block align-items-center">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url('admin/home') ?>"></a>Home</li>
                <li class="breadcrumb-item active" aria-current="page">Service Completed/Accepted Details</li>
              </ol>
            </nav>
          </div>
        </div>
        
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xxxl-8 col-12">
          <div class="box">
            <div class="box-body">
            <div class="table-responsive-xl">
              <table class="table product-overview" id="example" class="table table-lg invoice-archive">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Service</th>
                    <th>phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                        $users=getAllacceptedusers();
                        if(!empty($users)){
                           // print_r($product);exit;
                           $sno=1;
                           foreach ($users as $value) {

                              echo '<tr>';
                                 echo '<td>'.$sno.'</td>';                                 
                                 echo '<td>'.$value->name.'</td>';
                                 echo '<td>'.$value->service.'</td>';
                                 echo '<td>'.$value->phone.'</td>';
                                 echo '<td>'.$value->email.'</td>';
                                 echo '<td>'.$value->address.'</td>';
                                  echo  ($value->complete_status==0) ? '<td><label class="badge badge-danger">Service Accepted</label></td>' : '<td><label class="badge badge-success">Service Completed</label></td>';

                                 echo '<td>
                                    <a class="btn btn-primary" href="'.base_url('admin/servicecomplete/edit/'.$value->id).'"><i class="fa fa-edit" ></i></a>

                                    <a class="btn btn-primary" href="'.base_url('admin/servicecomplete/delete/'.$value->id).'" style="color:red;" onclick="return confirmWindow('."'Are You Sure to Delete This Post?'".',event)"><i class="fa fa-trash"></i></a>
                                 </td>';
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
        </div>
      </div>
    </section>
    <!-- /.content -->
    </div>
  </div>
  <!-- /.content-wrapper -->