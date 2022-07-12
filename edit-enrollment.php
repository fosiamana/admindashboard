

<?php  
$message="";
require_once( 'logics/dbconnection.php');
$querystudent=mysqli_query( $conn,"SELECT * FROM enrollment WHERE no='" .$_GET['id']."' ");
while($fetchstudent= mysqli_fetch_array($querystudent ))
{
    $id=$fetchstudent['no'];
    $fullname = $fetchstudent['fullname'];
    $phonenumber=$fetchstudent['phonenumber'];
    $email=$fetchstudent['email'];
    $gender=$fetchstudent['gender'];
    $courses=$fetchstudent['courses'];
}
// UPDATING USER RECORDS


require_once('logics/process-update.php')
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
                                            <h4> Edit student:</h4>
                                            <?php echo $message ?>
                                         </div>

                                    </div>
                                </div>

                        </div>
                        <div class="card-body">
                        <form action="  edit-enrollment.php?id=<?php echo $id ?>" method="POST">
                                <div class="row">
                                        <div class="mb-3 col-lg-6">
                                        <label for="fullName" class="form-label"><b>Full name</b></label>
                                            <input type="text" name="fullname" value="<?php  echo $fullname?>" class="form-control" placeholder="Enter first name">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                        <label for="phone" class="phone Number"><b>phone number</b></label>
                                            <input type="text" value=" <?php  echo $phonenumber?>" name="phonenumber"class="form-control" placeholder="+254...">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                        <label for="email" class="form-label"><b>email address</b></label>
                                            <input type="text" value=" <?php  echo $email?> " name="email" class="form-control" placeholder="please enter ypur email">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                        <label for="gender"  class="form-label"><b>what's your gender</b></label>
                                        
                                        <select class="form-select"class="form-control" name=" gender" aria-label="Default select example">
                                            <option selected><?php  echo $gender?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                        
                                            </select>
                                        </div>
                                    </div>
                    
                    
                        
                                            <p>In order to complete your registration to the bootcamp, you are required to select one course you will be  undertaking. please NOTE that this will be your learning track during the 2-weeks immersion</p>
                                        <div class="row">
                                            <div class="mb-3 col-lg-6">
                                            <label for="courses" class="form-label"> <b>What's your preffered course ? </b></label>
                                            <select class="form-select"  name="courses" aria-label="Default select example">
                                                <option selected><?php  echo $courses?></option>
                                                <option value="cyber security">cyber security</option>
                                                <option value="software engineering">software engineering</option>
                                                <option value="web development">web development</option>
                                                <option value="software designe">software designe</option>
                                            </select>
                                        </div>
                                                
                                        
                                </div>
                                    <div class="row pt-3">

                                        <div class="col-lg-6" >
                                                
                                                <button class= "btn btn-primary "  name="updateEnrollment" type="submit">update records</button>
                                        </div>
                                    </div>
                        </form>
                    </div>
        </div>

    


    


<!-- <script src="jquery.min.js"></script> -->
   <?php require('includes/script.php')?>

</body>
</html>