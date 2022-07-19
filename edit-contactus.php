

<?php  
$echo="";
require_once( 'logics/dbconnection.php');
$querystudent=mysqli_query( $conn,"SELECT * FROM contactus WHERE no='" .$_GET['id']."' ");
while($fetchstudent= mysqli_fetch_array($querystudent ))
{
    $id=$fetchstudent['no'];
    $firstname = $fetchstudent['firstname'];
     $lastname=$fetchstudent['lastname'];
    $phonenumber=$fetchstudent['phonenumber'];
    $email=$fetchstudent['email'];
    $message=$fetchstudent['message'];
    $enrolledon=$fetchstudent['created_at'];
   
}
// UPDATING USER RECORDS


require_once('logics/process-update-contactus.php')
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
                                            <h4> Edit contactus:</h4>
                                            <?php echo $echo ?>
                                         </div>

                                    </div>
                                </div>

                        </div>
                        <div class="card-body">
                        <form action="  edit-contactus.php?id=<?php echo $id ?>" method="POST">
                                <div class="row">
                                        <div class="mb-3 col-lg-6">
                                        <label for="fullName" class="form-label"><b>firstname</b></label>
                                            <input type="text" name="firstname" value="<?php  echo $firstname?>" class="form-control" placeholder="Enter first name">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                        <label for="lastname" class="form-label"><b>lastname</b></label>
                                            <input type="text" name="lastname" value="<?php  echo $lastname?>" class="form-control" placeholder="Enter last name">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                        <label for="phonenumber" class="phone Number"><b>phone number</b></label>
                                            <input type="text" value=" <?php  echo $phonenumber?>" name="phonenumber"class="form-control" placeholder="+254...">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                        <label for="email" class="form-label"><b>email address</b></label>
                                            <input type="text" value=" <?php  echo $email?> " name="email" class="form-control" placeholder="please enter ypur email">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                        <label for="message" class="form-label"><b>message</b></label>
                                            <input type="text" value=" <?php  echo $message?> " name="message" class="form-control" placeholder="message">
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                        <label for="enrolledon" class="form-label"><b>enrolledon</b></label>
                                            <input type="text" value=" <?php  echo $enrolledon?> " name="created_at" class="form-control" placeholder="created time">
                                        </div>
                                       
                                    </div>
                    
                    
                        
                                           
                                                
                                        
                                </div>
                                    <div class="row pt-3">

                                        <div class="col-lg-6" >
                                                
                                                <button class= "btn btn-primary "  name="updateContactus" type="submit">update records</button>
                                        </div>
                                    </div>
                        </form>
                    </div>
        </div>

    


    


<!-- <script src="jquery.min.js"></script> -->
   <?php require('includes/script.php')?>

</body>
</html>