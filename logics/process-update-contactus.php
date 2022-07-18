<?php
// updating user records
require_once('logics/dbconnection.php');
if(isset($_POST['updateContactus']))
{
    // fetch form data
     $firstname= $_POST['firstname'];
     $lastname=$_POST['lastname'];
     $phonenumber=$_POST['phonenumber'];
     $email=$_POST['email'];
     $message=$_POST['message'];
     $enrolledon=$_POST['created_at'];
    
    //  perform sql query
    $updateRecords = mysqli_query($conn, 
    "UPDATE contactus set firstname ='$firstname',lastname ='$lastname', phonenumber= '$phonenumber', email='$email', message='$message', created_at='$enrolledon'
    WHERE no ='".$_GET['id']."' " );

    if($updateRecords)
    {
        $echo= "Records updated successfully";

    }
    else
    {
        $echo= "Error occured";
     }
}

?>