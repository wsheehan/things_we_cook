// var main = setTimeout(function() {
// 	$(".grid").toggleClass('flip')
// 		setInterval(function(){
// 			$(".grid").toggleClass('flip');
// 		}, 10000)
// 	}, 6000)

$(document).ready(function(){
	$("img").hover(function(){
		$(this).toggleClass('highlight');
	})

	$("span").hover(function(){
		$(this).toggleClass('barHighlight')
	})
})
	
