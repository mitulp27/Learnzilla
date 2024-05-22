$(document).ready(function() {
	$('#uplbtn').click(function () {
	$('#button').click();
	});
$('#subupl').click(function() {
    var fileupload = $('#button').val();
$.ajax({
        url:"index.php",
        type : 'post',
        data : {fname : fileupload},
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