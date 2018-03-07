$(window).scroll(function(){
if($(document).scrollTop() > 0.1*$(window).height()){
	$('.navbar-nscroll').removeClass('navbar-nscroll').addClass('navbar-yscroll');
	$('.collapse-nscroll').removeClass('collapse-nscroll').addClass('collapse-yscroll');
	$('.logo-name-nscroll').removeClass('logo-name-nscroll').addClass('logo-name-yscroll');
}
else
{
	$('.navbar-yscroll').removeClass('navbar-yscroll').addClass('navbar-nscroll');
	$('.collapse-yscroll').removeClass('collapse-yscroll').addClass('collapse-nscroll');
	$('.logo-name-yscroll').removeClass('logo-name-yscroll').addClass('logo-name-nscroll');
}
});