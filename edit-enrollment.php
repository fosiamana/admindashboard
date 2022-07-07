

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
                            <h4> Edit student:<?php  echo $fullname?></h4>
                        </div>

                    </div>
                </div>

             </div>
             <div class="card-body">
             <form action="enroll.php" method="POST">
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
            
              
                
                <p>In order to complete your registration to the bootcamp, you are required to select one course you will be  undertaking. please NOTE that this will be your learning track during the 2-weeks immersion</p>
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
                     <p>You agree by providing your information you undrstand all our data privacy and protection policy outlined in our terms & condition and the privacy policy statement</p>

                 <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label"style="padding-0;" for="flexCheckDefault">
                        <b>Agree terms and conditions</b> 
                     </label>
                     <br>
                     <button class= "btn btn-primary" type="submit" name="submitButton">Submit application </button>
                  </div>
                  <p class="text-center">subscribe to get information latest news about <br> Zalego Academy</p>
                  <div class="container">
                         <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="your email address" >
                            </div>
                            <div class="col-lg-6">
                            <button class= "btn btn-primary" >Subscribe</button>
                            </div>

                         </div>
                  </div>
            </form>




             </div>
           </div>
        </div>

    


    


<!-- <script src="jquery.min.js"></script> -->
   <?php require('includes/script.php')?>

</body>
</html>