<?php
session_start();
$email = $_POST['em'];
$password = $_POST['ps'];
$login = $_POST['sub'];
if(!isset($login)){
    header("location:../");
}
else{
$db = mysqli_connect('localhost','root','','learnzilla');
$user = mysqli_query($db,"select * from login where email = '".$email."' and password = '".$password."'");
$users = mysqli_fetch_array($user);
$Row = mysqli_num_rows($user);
if($Row >=1){
	if ($users['password'] == sha1($password))
	echo 'validuser';}
else{
	echo 'invaliduser';

}
}
?>