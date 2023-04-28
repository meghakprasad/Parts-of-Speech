<?php

 include "dbconnect.php";

 
 $Name=$_POST['Name'];

 $Phno=$_POST['Phno'];
 $Email_id=$_POST['Email_id'];




$password=$_POST['psw'];
$user_type=$_POST['user_type'];

$sql = "INSERT INTO learner(Name,Phno,Email_id,password,user_type)
 VALUES ( '$Name','$Phno','$Email_id','$password','$user_type')";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('User Registered sucessfully');
  window.location.href = 'http://localhost/HACKMITTEN/learnerlogin.php';</script>";
  
}else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
