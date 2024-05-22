<?php 
$file = $_FILES['fname']['name'];
if ($file == NULL) {
	echo "Upload Failed";
}
else{echo $file."Uploaded";}
?>
