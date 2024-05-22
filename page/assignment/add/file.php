<?php
	$data = $_POST['data'];
	$sub = $_POST['sub'];
	$subject = $_POST['subject'];
	if (isset($sub)) {
		$file = fopen('files/'.$subject.'_assignment.txt', "w");
		fwrite($file, $data);
		fclose($file);
		echo "<script>location.replace('../add/');</script>";
	}
	else{
		echo "<script>location.replace('../add/');</script>";
	}
?>