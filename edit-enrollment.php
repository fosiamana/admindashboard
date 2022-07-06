

<?php  
require_once( 'logics/dbconnection.php');
$querystudent=mysqli_query( $conn,"SELECT * FROM enrollment WHERE no='" .$_GET[ 'id']."' ");
while($fetchstudent= mysqli_fetch_array($querystudent ))
{
    $fullname = $fetchstudent['fullname'];
}

?>

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
             <div class=" row">
                <div class=col-lg-12>
                    <div class= "card">
                        <div class="card-header bg-dark text-center text-white">
                            <h4> <?php  echo $fullname?></h4>
                        </div>

                    </div>
                </div>

             </div>
           </div>
        </div>

    


    


<!-- <script src="jquery.min.js"></script> -->
   <?php require('includes/script.php')?>

</body>
</html>