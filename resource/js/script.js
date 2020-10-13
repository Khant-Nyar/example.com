$(document).ready(function(){
//	Sitcky Nav
	$('.js--section-feature').waypoint(function(direction){
		if(direction == 'down'){
			$('nav').addClass('sticky');
		}else{
			$('nav').removeClass('sticky');
		}
	},{
		offset:'60px'
	})
	
	
//	Scroll On Button
	$('.js--btn-full').click(function(){
		$('html,body').animate({scrollTop:$('.js--section-plan').offset().top},1000)
	})
	$('.js--btn-ghost').click(function(){
		$('html,body').animate({scrollTop:$('.js--section-feature').offset().top},1000)
	})
	
//	Scroll On Navigation
	$('.f-feature').click(function(){
		$('html,body').animate({scrollTop:$('#feature').offset().top},1000)
	})
	$('.h-step').click(function(){
		$('html,body').animate({scrollTop:$('#steps').offset().top},1000)
	})
	$('.o-cities').click(function(){
		$('html,body').animate({scrollTop:$('#cities').offset().top},1000)
	})
	$('.s-plan').click(function(){
		$('html,body').animate({scrollTop:$('#plan').offset().top},1000)
	})
	
//	Scroll On Animation
	
	$('.js--wp-1').waypoint(function(direction){
		$('.js--wp-1').addClass('animated fadeIn');
	},{
		offset : '50%'
	})
	$('.js--wp-2').waypoint(function(direction){
		$('.js--wp-2').addClass('animated fadeInUp');
	},{
		offset : '50%'
	})
	$('.js--wp-3').waypoint(function(direction){
		$('.js--wp-3').addClass('animated fadeIn');
	},{
		offset : '50%'
	})
	$('.js--wp-4').waypoint(function(direction){
		$('.js--wp-4').addClass('animated pulse');
	},{
		offset : '50%'
	})
	
	
	
	
	
})//Document End