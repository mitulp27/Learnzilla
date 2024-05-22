<?php 
if(isset($_POST['submit'])){
$file = $_FILES['fname']['name'];
if ($file == NULL) {
	echo "Upload Failed";
}
else{echo $file."Uploaded";}}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div id="container">
	<div id="uploads">
		<form method="post" action="">
		<input type="button" id="uplbtn" value="Upload" class="button">
    	<input type="file" id="button">
		<input type="submit" name="sub" class="button" id="subupl"></form>
	</div>
	<div id="data">
		
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
	$('#uplbtn').click(function () {
	$('#button').click();
	});
$('#subupl').click(function() {
    var fileupload = $('#button').val();
    var sub = $('#subupl').val();
$.ajax({
        url:window.location.pathname,
        type : 'post',
        data : {fname : fileupload, submit : sub},
        success :function(result){ 
        if(result == "Uploaded"){
           	window.alert(fileupload+' uploaded.');
           	window.replace('file.php');
            }
            else{
            window.alert(result);
            }   
        }
        });
});});
</script>
</body>
</html>