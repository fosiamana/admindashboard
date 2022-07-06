<!DOCTYPE html>
<html lang="en">
    <!-- header connection -->
<?php require_once( 'includes/headers.php') ?>

<body>

    
    <!-- all our code. written -->
    
    <!-- class container with the header -->
    <?php require_once( 'includes/navbar.php') ?>
      
        <div class="sidebar">
           <!-- navbar -->

        <?php require_once( 'includes/sidebar.php') ?>
        </div>
        <div class="main-content">
           <div class="container-fluid">
             <div class="row">
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-center text-white" style="height: 5vh;">
                        <span>Top content</span>
                    </div>
                </div>
             </div>
             <div class="row">
                <div class="col-lg-3 p-3">
                    <div class="card-header bg-dark text-center text-white " style="height: 5vh;">
                        <span>Student</span>
                    </div>
                    <div class="card-body "><span><i class="fa fa-group fa-3x"></i></span>
                        <span class="float-end">00</span>
                    </div>
                      
                    <div class="card-footer shadow none p-3 mb-5 bg-light rounded"></div>
                </div>
                <div class="col-lg-3 p-3">
                    <div class="card-header bg-dark text-center text-white " style="height: 5vh; ">
                        <span>Available courses</span>
                    </div>
                    
                    <div class="card-body "><span><i class="fa fa-folder-open fa-3x"></i></span>
                        <span class="float-end bottom">00</span>
                    </div>
                    <span class="float-end"></span>

                    
                    <div class="card-footer shadow none p-3 mb-5 bg-light rounded"></div>
                </div>
                <div class="col-lg-3 p-3">
                    <div class="card-header bg-dark text-center text-white  "style="height: 5vh;">
                        <span>campus</span>
                    </div>
                    <div class="card-body "><span><i class="fa fa-graduation-cap fa-3x"></i></span> 
                        
                        <span class="float-end">00</span>
                    </div>
                    <div class="card-footer shadow none p-3 mb-5 bg-light rounded"></div>
                </div>
  
                <div class="col-lg-3 p-3">
                    <div class="card-header bg-dark text-center text-white "style="height: 5vh;">
                        <span>users</span>
                    </div>
                    <div class="card-body"><span><i class="fa fa-user fa-3x"></i></span>
                        <span class="float-end">00</span>
                    </div>
                    <div class="card-footer shadow none p-3 mb-5 bg-light rounded"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-center text-white " style="height: 5vh;">
                        <span> Student Analysis</span>
                    </div>
                    <div class="card-body">
                        <span><i class="fa fa-line-chart fa-4x"></i></span>
                        
                    </div>
                    <div class="card-footer shadow none p-3 mb-5 bg-light rounded"></div>
                </div>
            </div>
           </div>
        </div>

    


    


<!-- <script src="jquery.min.js"></script> -->
  <?php require('includes/script.php')?>
  
</body>
</html>