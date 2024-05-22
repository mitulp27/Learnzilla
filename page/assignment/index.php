<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="title">
<h1>Assignment</h1></div>
<div class="data">
	<h2>Question</h2>
	<textarea class="data" disabled="true">
     1. First
     2. Second   
    </textarea>
</div>
<div class="buts">
<form method="post">
	<input type="button" id="btnFileUpload" value="Upload" class="button">
    <input type="file" id="button">
	<input type="submit" name="sub" class="button">
</form>
</body>
<script type="text/javascript">
	window.onload = function () {
            var fileupload = document.getElementById("button");
            var button = document.getElementById("btnFileUpload");
            button.onclick = function () {
                fileupload.click();
            };
            fileupload.onchange = function () {
                var fileName = fileupload.value.split('\\')[fileupload.value.split('\\').length - 1];
            };
        };
</script>
</html>