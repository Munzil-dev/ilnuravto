$(document).ready(function(){
	$('.slider').slick({
	  dots: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  prevArrow: "<span class='prev_slider'> < </span>",
	  nextArrow: "<span class='next_slider'> > </span>",
	});
})	