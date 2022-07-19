<?php
// php logics connection
require_once( 'logics/dbconnection.php');
if(isset($_POST["submitButton"]))
{
    // 1.fetch form data
     $fullname=$_POST['fullname'];
     $email=$_POST['email'];
     $phonenumber= $_POST['phonenumber'];
     $gender=$_POST['gender'];
     $courses=$_POST['courses'];
    // 2. submit form  data
    $insertData=mysqli_query( $conn, "INSERT INTO enrollment(fullname,email, phonenumber,gender,courses) VALUES('$fullname','$email','$phonenumber','$gender','$courses')" );
}

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
       <form action="add.php" method="POST">
       <div class="card">
                    <div class="header">
                    <div class="col-lg-12 align-center">
                    <div class="card-header bg-dark text-center text-white" style="height: 6vh;">
                    <span> <i class="fa fa-group"></i></span>
                        <span>Add Student</span>
                        <a href="students.php"><span class="btn btn-danger float-start">Back</span></a>
                    </div>
                 
                </div>
         <div class="row">
            
               
            
                    </div>
                    <div class="card-body">
                    <div class="row">
                <div class="mb-3 col-lg-6">
                    
                <label for="fullName" class="form-label"><b>Full name</b></label>
                    <input type="text" name="fullname" class="form-control" placeholder="Enter first name">
                </div>
                <div class="mb-3 col-lg-6">
                <label for="phone" class="phone Number"><b>phone number</b></label>
                    <input type="text"  name="phonenumber"class="form-control" placeholder="+254...">
                </div>
                <div class="mb-3 col-lg-6">
                <label for="email" class="form-label"><b>email address</b></label>
                    <input type="text" name= "email" class="form-control" placeholder="please enter ypur email">
                </div>
                <div class="mb-3 col-lg-6">
                <label for="gender" class="form-label"><b>what's your gender</b></label>
                  
                  <select class="form-select" name=" gender" aria-label="Default select example">
                     <option selected>....select your  gender...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
  
                     </select>
                </div>
            </div>
            

            <div class="row">
                <div class="mb-3 col-lg-6">
                <label for="courses" class="form-label"> <b>What's your preffered course ? </b></label>
                <select class="form-select"  name="courses" aria-label="Default select example">
                     <option selected>...select your course...</option>
                    <option value="cyber security">cyber security</option>
                    <option value="software engineering">software engineering</option>
                    <option value="web development">web development</option>
                    <option value="software designe">software designe</option>
                </select>
                </div>
                
                        </div>
                        <button class="btn btn-primary float-end"type="submit" name="submitButton">Add</button>
                    </div>
                </div>
              </div>
             
          
       </div>
</form>
     </div>
    


    


     <?php require('includes/script.php')?>
</body>
</html>