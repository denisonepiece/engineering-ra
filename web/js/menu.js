$(function () {
	$('.menu-resp__btn').click(function () {
		$('.menu-resp__btn').toggleClass('is-active');
		$('.main-menu-row').toggleClass('is-active');
	});
});

// $(window).scroll(function() {
// if ($(this).scrollTop() > 90){  
//     $('.main-menu').addClass('scroll');   
//   }
//   else{
//     $('.main-menu').removeClass('scroll');
//   }
// });