<?php 
  session_start();
  if(!isset($_SESSION['rand'])){location.replace="forgetpass.html";}
  $db=mysqli_connect("localhost","root","","learnzilla");
  $_SESSION['otp']=$_POST['otp'];
  $query=mysqli_query($db,"SELECT * FROM forget WHERE email='$_SESSION[email]' and otp='$_SESSION[otp]'");
    $con = mysqli_fetch_assoc($query);
  $rows=mysqli_num_rows($query);
  if ($con['otp']==$_SESSION['otp']) {
    echo "Success";
  }
  else
  {
    echo "Incorrect OTP.";
  }
?>