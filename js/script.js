$(document).ready(function(){
	$('.carousel-section__container').slick({
	  infinite: true,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  arrows: false,
	});
	$('.gallery-section__container').slick({
	  infinite: true,
	  slidesToShow: 2,
	  slidesToScroll: 2,
	  autoplay: true,
	  autoplaySpeed: 5000,
	  arrows: false,
	});


});

