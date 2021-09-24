$(document).ready(function(){
	$('.container-treinos').slick({
		slidesToShow: 6,
		centerMode: true,
		arrows: false,
		autoplay: true,
		responsive:[
			{
				breakpoint: 2240,
				settings:{
					slidesToShow: 5
				}
			},
			{
				breakpoint: 1900,
				settings:{
					slidesToShow: 4
				}
			},
			{
				breakpoint: 1500,
				settings:{
					slidesToShow: 3
				}
			},
			{
				breakpoint: 1180,
				settings:{
					slidesToShow: 2
				}
			},
			{
				breakpoint: 790,
				settings:{
					slidesToShow: 1
				}
			},
			{
				breakpoint: 600,
				settings:{
					centerMode: false,
					slidesToShow: 1
				}
			}
		]
	});

	$('.depoimentos-wraper').slick({
		dots: true,
		arrows: false
	});
})