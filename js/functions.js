$(document).ready(function(){

	// make the navi change
	var followMe = function(){

		var scrollTop = $(window).scrollTop();
		      
		if (scrollTop > 10) { 
    		$('nav').addClass('onthemove');
		} 
		else 
		{
    		$('nav').removeClass('onthemove');
		}
	};

	$(window).scroll(function() {
		followMe();
	});

	// this is for slide in menu for mobile
	$('.threelines').click(function(){

		$('.swipe-link').each(function(i){

			setTimeout(function(){
				$('.swipe-link').eq(i).toggleClass('move-out');
			}, 150 * (i+1));

		});

	});


	// stolen bit of script for smooth scroll
	if ($(window).width() < 676) {
		$('a[href^="#"]').on('click',function (e) {
		    e.preventDefault();

		    var target = this.hash;
		    var $target = $(target);

		    $('html, body').stop().animate({
		        'scrollTop': $target.offset().top
		    }, 900, 'swing', function () {
		        window.location.hash = target;
		    });
		});
	}
	else
	{
		$('a[href^="#"]').on('click',function (e) {
		    e.preventDefault();

		    var target = this.hash;
		    var $target = $(target);

		    $('html, body').stop().animate({
		        'scrollTop': $target.offset().top - $('.landing nav').height()
		    }, 900, 'swing', function () {
		        window.location.hash = target;
		    });
		});
	}


});
