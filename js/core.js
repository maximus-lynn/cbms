$(document).ready(function() {
	var $root = $('html, body ');
	$('.scroll a').click(function(e) {
		var href = $(this).attr("href"), $el = $(href), top=0;
        if($el.length) 
           top = $el.offset().top;
 		$root.animate({
            scrollTop: top
		}, 500, function () {
			window.location.hash = href;
		});
		return false;
	});

    // Responsive menu 
	$(function() {
		var pull 		= $('#pull'),
			menu 		= $('nav ul'),
			menuHeight	= menu.height()
	
		$(pull).on('click', function(e) {
			e.preventDefault();
			menu.slideToggle();
		});
	
		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	});	
	

	//Responsive Slider
    var nav = $('div.slider').css('overflow', 'hidden').children('ul'),
	sliding = false,
    ul = $('#IE-container .slider ul'),
	
	// new variables
	count = $('#IE-container .slider ul li').length,
	sliderWidth = $('.slider').width(),
	ulWidth = count * sliderWidth;
	
		$(window).resize(function () {
			count = $('#IE-container .slider ul li').length,
			sliderWidth = $('.slider').width(),
			ulWidth = count * sliderWidth;
						
			$('#IE-container .slider ul').width(ulWidth);
			$('#IE-container .slider ul li').css( "width", sliderWidth);
		});
			
		$('#IE-container .slider ul li').css( "width", sliderWidth);
		$('#IE-container .slider ul').width(ulWidth);
			function slideLeft() {
				if(sliding){
					return false;
				}
				sliding = true;
				ul.animate({
					left: '0px'
				}, 1000, function(){
					sliding = false;
					ul.css("left","0px");
				});
			}
			function moveLeft() {
				if(sliding){
					return false;
				}
				ul.css("left", "-" + sliderWidth + "px");           
				$('#IE-container .slider ul li:last').insertBefore($('#IE-container .slider ul li:first'));
			}
	
			function slideRight() {
				if(sliding){
					return false;
				}
				sliding = true;
				ul.animate({
					left: '-=' + sliderWidth
				}, 1000, function() {
					sliding = false;
		
					$('#IE-container .slider ul li:first').appendTo(ul);
					ul.css("left", "0");
				});
			}
			

			var autoSlide;
			autoSlide = setInterval(function() {
				slideRight();
			}, 3000);
			
			$('#IE-container .slider_container').mouseenter(function() {
				clearInterval(autoSlide);
			}).mouseleave(function() {
				autoSlide = setInterval(function() {
					slideRight();
				}, 6000);
			});
			$('#slider-nav').show();
		
			$('#slider-nav .right_arrow').click(slideRight);
		
			$('#slider-nav .left_arrow').click(function() {
				moveLeft();
				slideLeft();
			});

		});