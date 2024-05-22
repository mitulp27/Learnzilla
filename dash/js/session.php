<?php 
session_start();
$con = mysqli_connect('localhost','root','','learnzilla');
$user = mysqli_query($db,"select name from user where email = '".$email."'");
$users = mysqli_fetch_array($user);
$_SESSION['name'] = $users['name'];
?>
<script type="text/javascript">var name = '<?= $_SESSION["name"] ?>';</script>
<script src="main.js"></script>