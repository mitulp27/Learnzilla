<?php
	if(isset($_POST['sub'])){
	$sub = $_POST['sub'];
	$fname = $_FILES['file']['name'];
	$file = file_get_contents($fname);
 	 $db = mysqli_connect('localhost','root','','learnzilla');
 	 $insert = 'INSERT INTO file VALUES ("$fname","$file")';
 	 if(mysqli_execute($db,$insert))
 	 echo $fname;
 }
?>