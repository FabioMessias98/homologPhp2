(function($){
	$(document).ready(function(){
		$('.box-form input').on('focus', function(){
			$(this).siblings().addClass('active')
		})
	})

	// $(document).ready(function(){
	// 	$('.icon-alter').on('click', function(){
	// 		const active = $('.box-register').addClass('active')
	// 		console.log(active)
	// 		const url = 'http://localhost/homolog-php/cadastro.php?active=active'	
	// 		window.location.href = url
	// 	})
	// })
})(jQuery)