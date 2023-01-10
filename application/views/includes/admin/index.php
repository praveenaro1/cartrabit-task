<!DOCTYPE html>
<html lang="en">

<!-- header scripts -->
<?php if($header_scripts){echo $header_scripts;}
$menu_type= (isset(getSettings()->menu_type) && getSettings()->menu_type==2) ? 'sidebar-collapse' : '' ;
 ?>

<body class="hold-transition sidebar-mini <?php echo $menu_type; ?> ">
    <div class="wrapper">
    
        <!-- top navigation bar -->
        <?php if($top_navigation){echo $top_navigation;} ?>

        <!-- left side bar -->
        <?php if($side_navigation){echo $side_navigation;} ?>


        <!-- center content -->
        <?php if($middle){echo $middle;} ?>


        <!-- theme control bar -->
        <?php if($theme_control){echo $theme_control;} ?>

        <!-- footer -->
        <?php if($footer){echo $footer;} ?>
        
        <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
    </div>


    <!-- footer scripts -->
    <?php if($footer_scripts){echo $footer_scripts;} ?>

    <!-- Confirm Modal -->
    <div class="modal fade" id="modal-confirm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-weight: bold;" id="confirm-modal-title">Danger Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-center">
                   <h5 id="confirm-modal-msg">Are You Sure to Delete Class ?? </h5>
                   <button class="btn btn-danger btn-md" id="confirm_yes">&nbsp;&nbsp;Yes&nbsp;&nbsp;</button>
                   <button class="btn btn-primary btn-md" id="confirm_no">&nbsp;&nbsp;No &nbsp;&nbsp;</button>
                </div>                
            </div>          
        </div>        
    </div>
    <!-- Confirm Modal End -->
</body>
</html>
