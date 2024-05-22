$('#subupl').click(function() {
var fd = new FormData();
var file = $('#button').val();
var sub = $('#subupl').val();
fd.append('file',file);
fd.append('sub',sub);
$.ajax({
	type: 'POST',
	url: 'data.php',
	data: fd
}).done(function() {
	window.open('Uploaded');
});
});