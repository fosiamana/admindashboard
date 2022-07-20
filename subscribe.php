<?php
// php logics connection
require_once( 'logics/dbconnection.php');
$sql=mysqli_query( $conn, "SELECT * FROM subscribers");

?>

<!DOCTYPE html>
<html lang="en">
    <!-- class containe with the header -->
<?php require_once( 'includes/headers.php') ?>
<body>
    
    <!-- all our code. written -->
    <!-- class container with the header -->
    <?php require_once( 'includes/navbar.php') ?>
      
        <div class="sidebar">
            <!-- the navbar -->
        <?php require_once( 'includes/sidebar.php') ?>
        
        </div>
      
       <div class="main-content">
         <div class="row">
                <div class="col-lg-12 align-center">
                    <div class="card-header bg-dark text-center text-white" style="height: 6vh;">
                    <span> <i class="fa fa-bell"></i></span>
                        <span>subscribers</span>
                        <a href="index.php"><button class="btn btn-primary float-start">Back</button></a>
                        <a href="add-subscribers.php"><button class="btn btn-primary float-end">Add Subscriber </button></a>
                   </div>
                   
                    
                </div>
             </div>
      <div class="card-body">
        <table class="table table-striped table-hover table-responsive table-dark " style="font-size 12px;">
            <thead>
              <tr>
                <th scope="col">No</th>
                
                <th scope="col">Email</th>
               
                <th>subscribed on</th>
               
              </tr>
            </thead>
            <tbody>
            <?php while ( $fetch= mysqli_fetch_array($sql)){?>
              


                  
              <tr>
                
                <td> <?php echo $fetch['no']?></td>
                <td><?php echo $fetch['email']?></td>
                
                <td><?php echo $fetch['created_at']?></td>
                
                
              </tr>
              
              <?php }?>
            </tbody>
          </table>
           
       </div>
     </div>
    


    


     <?php require('includes/script.php')?>
</body>
</html>