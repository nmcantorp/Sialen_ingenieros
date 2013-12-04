$(document).ready(function(){


	
	$('#twitter').hover(function(){
		$(this).attr('src', 'images/Twitter_hover.png');
	});

	$('#twitter').mouseout(function(){
		$(this).attr('src', 'images/Twitter.png');
	});

	$('#facebook').hover(function(){
		$(this).attr('src', 'images/Facebook_hover.png');
	});

	$('#facebook').mouseout(function(){
		$(this).attr('src', 'images/Facebook.png');
	});

});

$(function(){
  $('.pix_diapo').diapo();
});