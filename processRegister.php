<?php
require_once('connection.php');
if(isset($_POST['signUp']))
{
  // code
  $username=$_POST[ 'username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $_confirm=$_POST['confirm password'];
   // check if username exist in the database
   $sqlUsername=mysqli_query($conn,"SELECT * FROM account WHERE username='$username'");
   $checkUsername=mysqli_num_rows($sqlUsername);
   if ($checkUsername !=0){
    $msg="Username already exists";
   }

}

?>