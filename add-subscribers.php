<?php
// php logics connection
require_once( 'logics/dbconnection.php');
if(isset($_POST["submitButton"]))
{
    // 1.fetch form data
    
     $email=$_POST['email'];
     
    
    
    // 2. submit form  data
    $insertData=mysqli_query( $conn, "INSERT INTO subscribers(email) VALUES('$email')" );
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
       <form action="add-subscribers.php" method="POST">
       <div class="card">
        <div class="card-header bg-dark text-center text-white">SUBSCRIBERS</div>
        <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
              subscribe to get informaton,latest news about Zalego
          </div>
          <div class="col-lg-12">
              <form action="aboutus.php" method="POST">
                  
                  <input type="text" name="email" placeholder="Your email address">
                  <button class="btn btn-primary float-end" type= "submit" name="submitButton">subscribe</button>
            
        </div>

          <div class="card-footer shadow bg-dark "></div>
       </div>
      
</form>
     </div>
    


    


     <?php require('includes/script.php')?>
</body>
</html>