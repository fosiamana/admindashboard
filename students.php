<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";
$conn=mysqli_connect( $server,$username,$password, $database);

$sql=mysqli_query( $conn, "SELECT * FROM enrollment");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Admin Template</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
    
    <!-- all our code. written -->

        <div class="header">
            <a href="index.php"><img src="images/image.webp" alt="zalego logo"  class= "rounded-circle"height="50px" width="50px"></a>


        </div>
        <div class="sidebar">
            <nav>
                <ul>
                    <li>
                        <a href="">
                            <span> <i class="fa fa-group"></i></span>
                          
                            <span>student</span>
                        </a> 
                        

                    </li>
                    <li>
                        <a href="">
                            <span> <i class="fa fa-folder-open"></i></span>
                            <span>courses</span>

                        </a>

                    </li>
                    <li>
                        <a href="">
                            <span> <i class="fa fa-graduation-cap"></i></span>
                            <span>campus</span>

                        </a>

                    </li>


                </ul>

            </nav>
        
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
        <table class="table table-striped table-hover table-responsive">
            <thead>
              <tr>
                <th scope="col">no</th>
                <th scope="col">fullname</th>
                <th scope="col">gender</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">course</th>
                <th>created at</th>
                <th>action</th>
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
                  <a href="#" class="btn btn-primary btn-sm"><i  class="fa fa-edit"></i></a>
                  <a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                  <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              
              <?php }?>
            </tbody>
          </table>
           
       </div>
     </div>
    


    


<script src="jquery.min.js"></script>
   <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
   <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>