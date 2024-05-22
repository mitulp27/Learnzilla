<!DOCTYPE html>
<html>
<head>
	<title>My List</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
  <div class="data">
    
  </div>
</div>
<script type="text/javascript">
	var but = createElement('BUTTON');
	but.appendChild('.data');
</script>
</body>
</html>
<?php
	if ($dh = opendir('add/files')){
    while (($file = readdir($dh)) !== false){
      echo "<script>but.value = '".$file."'</script>";
    }
    closedir($dh);
  }
?>