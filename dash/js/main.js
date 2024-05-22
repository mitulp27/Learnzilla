$('.drop').click(function() {
		$('.drop-data').slideToggle("slow");
	});
$('.op1').click(function() {
	window.open('../html/adduser.html');
});
$('.op3').click(function() {
	location.replace('../');
});
$('#h2').innerHTML = name;