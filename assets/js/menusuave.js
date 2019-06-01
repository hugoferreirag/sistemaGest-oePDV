$(function(){
		$(window).scroll(function(){
				if($(this).scrollTop() > $('.top').offset().top){
					$('#nav').addClass('fixed-nav');
				}else{
					$('#nav').removeClass('fixed-nav');
				}
		});
});