<?php
include 'dbconnect.php';

session_start();

// If the values are posted, insert them into the database.
if (isset($_POST['email']) && isset($_POST['psw'])){
    
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $_SESSION["Email_id"] = $email;
    $_SESSION["password"] = $psw;
    $_SESSION["user_type"] = $user_type;

   
    $slquery = "SELECT * FROM learner WHERE Email_id = '$email' and password = '$psw'";
    $selectresult = mysqli_query($conn,$slquery);
    $adquery = "SELECT * FROM learner WHERE Email_id = '$email' and password = '$psw' and user_type='Admin' ";
    $adresult = mysqli_query($conn,$adquery);
    if(mysqli_num_rows($selectresult)>0)
    {
     
        if(mysqli_num_rows($adresult)>0)
            echo "<script>alert('User Login sucessfull');window.location.href = 'http://localhost/Hackmitten/admin.php';</script>";

        else
            echo "<script>alert('User Login sucessfull');window.location.href = 'http://localhost/Hackmitten/learner/learner.php';</script>";

    }
   
    else
    {
        echo "<script>alert('User Login unsucessfull');window.location.href = 'http://localhost/Hackmitten/learnerlogin.php';</script>";
    }
   }
  
mysqli_close($conn);
?>