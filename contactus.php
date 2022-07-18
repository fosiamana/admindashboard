<?php
// php logics connection
require_once( 'logics/dbconnection.php');
$sql=mysqli_query( $conn, "SELECT * FROM contactus");

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
                    <div class="card-header bg-dark text-center text-white" style="height: 5vh;">
                    <span> <i class="fa fa-envelope"></i></span>
                        <span>Messages</span>
                    </div>
                </div>
             </div>
      <div class="card-body">
        <table class="table table-striped table-hover table-responsive table-dark " style="font-size 12px;">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">First name</th>
                <th scope="col">lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">messages</th>
                <th>Enrolled on</th>
                <th>Action</th>
            
              </tr>
            </thead>
            <tbody>
            <?php while ( $fetch= mysqli_fetch_array($sql)){?>
              


                  
              <tr>
                
                <td> <?php echo $fetch['no']?></td>
                <td><?php echo $fetch['firstname']?></td>
                <td><?php echo $fetch['lastname']?></td>
                <td><?php echo $fetch['email']?></td>
                <td><?php echo $fetch['phonenumber']?></td>
                <td><?php echo $fetch['message']?></td>
                
                <td>
                <?php echo $fetch['created_at']?>
                </td>
                <td>
                  <a href="edit-contactus.php?id=<?php echo $fetch['no']?>" class="btn btn-primary btn-sm"><i  class="fa fa-edit"></i></a>
                  <a href="view-contactus.php?id=<?php echo $fetch['no']?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                  <a href="delete-contactus.php?id=<?php echo $fetch['no']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              
              <?php }?>
            </tbody>
          </table>
           
       </div>
     </div>
    


    


     <?php require('includes/script.php')?>
</body>
</html>