<?php
	$submit=$_POST['signup'];
	$uname=$_POST['uname'];
	$gender=$_POST['gender'];
	$prof=$_POST['prof'];
	$deptno=$_POST['deptno'];
	$sem=$_POST['sem'];
	$number=$_POST['number'];
	$em=$_POST['email'];
	$enr=$_POST['enr'];
	$pass=sha1($_POST['pass']);
	if(isset($submit)){
	$db=mysqli_connect("localhost","root","","learnzilla");
	$log="INSERT into login values('".$em."','".$pass."')";
	$sql="INSERT into user values('".$enr."','".$uname."','".$em."','".$gender."','".$prof."','".$sem."','".$deptno."','".$number."','".$pass."')";
	if(mysqli_query($db,$sql)&&mysqli_query($db,$log)){
	    echo "success";
	}else{
	    echo "error";
	}
	mysqli_close($db);}
	else{header("location:../html/adduser.html");}
?>