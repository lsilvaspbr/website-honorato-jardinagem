// form js with Ajax

$('#contact-form').submit(function(e){

	e.preventDefault();	

$('#contact-modal').modal('show')

	if($('#name').val() == 0 || $('#email').val() == 0 || $('#message').val() == 0) {

		alert('Preencha os dados do formulario');

	} else {
		
		$.ajax({
			url: 'contact.php',
			type: 'post',
			dataType: 'html',
			data: {
				'name': $('#name').val(),
				'email': $('#email').val(),
				'message': $('#message').val()
			}

		}).done(function(data){

			$('#contact-modal').modal('show')

			$('#name').val('');
			$('#email').val('');
			$('#message').val('');
		});
	} 
});

