(function($){
	const iconAlter = document.querySelector('.icon-alter')
	const iconDelete = document.querySelector('.icon-delete')
	const iconRecover = document.querySelector('.icon-recover')
	const formAlter = document.querySelector('.form-alter')
	const formDelete = document.querySelector('.form-delete')
	const formRecover = document.querySelector('.form-recover')

	iconAlter.addEventListener('click', function(){
		formAlter.submit()
	})

	iconDelete.addEventListener('click', function(){
		formDelete.submit()
	})

	iconRecover.addEventListener('click', function(){
		formRecover.submit()
	})
})(jQuery)