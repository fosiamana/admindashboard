<?php
// updating user records
require_once('logics/dbconnection.php');
if(isset($_POST['updateEnrollment']))
{
    // fetch form data
     $fullname= $_POST['fullname'];
     $phonenumber=$_POST['phonenumber'];
     $email=$_POST['email'];
     $gender=$_POST['gender'];
     $courses=$_POST['courses'];
    //  perform sql query
    $updateRecords = mysqli_query($conn, 
    "UPDATE enrollment set fullname ='$fullname', phonenumber= '$phonenumber', email='$email',gender='$gender',courses='$courses'
    WHERE no ='".$_GET['id']."' " );

    if($updateRecords)
    {
        $message= "Records updated successfully";

    }
    else
    {
        $message = "Error occured";
     }
}

?>