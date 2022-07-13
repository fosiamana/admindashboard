<?php
// php logics connection
require_once( 'logics/dbconnection.php');
$sql=mysqli_query( $conn, "SELECT * FROM enrollment");

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
                    <span> <i class="fa fa-group"></i></span>
                        <span>Students</span>
                    </div>
                </div>
             </div>
      <div class="card-body">
        <table class="table table-striped table-hover table-responsive table-dark " style="font-size 12px;">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Fullname</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Course</th>
                <th>Enrolled on</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php while ( $fetch= mysqli_fetch_array($sql)){?>
              


                  
              <tr>
                
                <td> <?php echo $fetch['no']?></td>
                <td><?php echo $fetch['fullname']?></td>
                <td><?php echo $fetch['gender']?></td>
                <td><?php echo $fetch['email']?></td>
                <td><?php echo $fetch['phonenumber']?></td>
                <td><?php echo $fetch['courses']?></td>
                <td><?php echo $fetch['created at']?></td>
                
                <td>
                  <a href="edit-enrollment.php?id=<?php echo $fetch['no']?>" class="btn btn-primary btn-sm"><i  class="fa fa-edit"></i></a>
                  <a href="view-enrollment.php?id=<?php echo $fetch['no']?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                  <a href="delete-enrollment.php?id=<?php echo $fetch['no']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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