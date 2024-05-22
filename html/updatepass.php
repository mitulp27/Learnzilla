<?php
if(!$_SESSION['email']){location.replace('../html/forgetpass.html');}
 session_start();
  $db = mysqli_connect("localhost","root","","learnzilla");
   $pass = $_POST['pass'];
   $email= $_SESSION['email'];
    $query=mysqli_query($db,"SELECT * FROM user WHERE email='$email' AND password='$pass'");
    $con = mysqli_fetch_assoc($query);
  $rows=mysqli_num_rows($query);
  if ($con['password']==$pass){
          echo "Enter new password.";
         }
    else{
          $updatequery = mysqli_query($db,"UPDATE user SET password='$pass' WHERE email='$email'");
          $update = mysqli_query($db,"UPDATE login SET password='$pass' WHERE email='$email'");
        if($updatequery&&$update)
          echo "Success";
    }
?>