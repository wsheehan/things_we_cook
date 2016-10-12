$(document).ready(function(){
	$('a[data-rel^=lightcase]').lightcase();

	$(".ghf").click(function(){
		$(".buyForm").slideToggle(1000, 'swing');
	})
	$(".picOne").hover(function(){
		$(".instruction").hide();
	})
	$(".moreFriend").click(function(){
		$(".hiddenFriend").slideToggle(1000, 'swing');
	})
})


