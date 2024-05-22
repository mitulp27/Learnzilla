<?php
session_start();
  $db=mysqli_connect("localhost","root","","learnzilla");
 $_SESSION['rand']=rand(111111,999999);
 $_SESSION['email'] = $_POST['email'];
  $query=mysqli_query($db,"SELECT * from login where email='$_SESSION[email]'");
  $rows=mysqli_num_rows($query);
  if ($rows>=1) {
    $insert=mysqli_query($db,"UPDATE forget SET otp='$_SESSION[rand]' WHERE email='$_SESSION[email]'");
    $sendername = "Programmer Hub";
                  $senderemail = "ph";
                  $receiveremail = $_SESSION['email'];
                  $subject = "OTP";
                  $message =  $_SESSION['rand'];
             $from = "From:$sendername<$senderemail>";
    if (mail($receiveremail,$subject,$message,$from)) {
      echo "Email Sent to your registered email.";
    }
    else{
      echo "Email not Sent.";
    }
  }
  else{
    echo "User not exist";
  }
?>