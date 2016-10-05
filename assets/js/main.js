/**
 * Assistant DB Script 
 */
$(document).ready(function() {
	$('#signup-form').validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 6
			},
			first_name: {
				required: true
			},
			last_name: {
				required: true
			},
			job_title: {
				required: true
			},
			company: {
				required: true
			},
			phone: {
				required: true,
				maxlength: 12,
				minlength: 8,
				digits: true
			},
			address: {
				required: true
			},
			city: {
				required: true
			},
			zip_code: {
				required: true,
				maxlength: 5,
				minlength: 5,
				digits: true
			},
			state: {
				required: true
			},
			tyc: {
				required: true
			}
		},
		messages: {
			email: {
				required: "Escribe tu email",
				email: "El email no es válido"
			},
			password: {
				required: "Escribe tu contraseña",
				minlength: "La contraseña debe tener al menos 6 caracteres"
			},
			first_name: {
				required: "Escribe tu nombre"
			},
			last_name: {
				required: "Escribe tus apellidos"
			},
			job_title: {
				required: "Indica tu puesto de trabajo"
			},
			company: {
				required: "Escribe el nombre de tu empresa"
			},
			phone: {
				required: "Tu número de teléfono es requerido",
				maxlength: "El teléfono no debe exceder de 12 dígitos",
				minlength: "El teléfono debe tener de 8 a 12 dígitos",
				digits: "Escribe tu teléfono únicamente con números"
			},
			address: {
				required: "Indica tu dirección"
			},
			city: {
				required: "Escribe la ciudad"
			},
			zip_code: {
				required: "El código postal es requerido",
				maxlength: "El código postal debe tener 5 dígitos",
				minlength: "El código postal debe tener 5 dígitos",
				digits: "Escribe el código postal únicamente con números"
			},
			state: {
				required: "Selecciona el estado"
			},
			tyc: {
				required: "Debes aceptar los Términos y Condiciones de Privacidad"
			}
		},
		beforeSend: function(){
			$("#signup_submit").html("Enviando").attr("disabled", true);
		},
		submitHandler: function (form) {
			jQuery.ajax({
				type: "POST",
				url: "lib/User.controller.php",
				data: $(form).serialize(),
				dataType: "json",
				success: function(data){
					if(data.status == 'success'){
						form.reset();
						alert("Registrado con éxito");
						window.location.href = redirect_to;
					}
					else{
						$("#signup_submit").html("Enviar").attr("disabled", false);
						alert(data.message);
					}
				}
			});
		}
	});

	$('#signin-form').validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			password: {
				required: true
			}
		},
		messages: {
			email: {
				required: "Escribe tu email",
				email: "El email no es válido"
			},
			password: {
				required: "Escribe tu contraseña"
			}
		},
		submitHandler: function (form) {
			jQuery.ajax({
				type: "POST",
				url: "lib/User.controller.php",
				data: $(form).serialize(),
				dataType: "json",
				success: function(data){
					if(data.status == 'success'){
						form.reset();
						window.location.href = redirect_to;
					}
					else{
						$("#genericModalMsg").html('Email o contraseña incorrectos');
						$("#genericModal").modal('show');
						setTimeout(function() {$('#genericModal').modal('hide');}, 3000);
					}
				}
			});
		}
	});

	$('#password-recovery').validate({
		rules: {
			email: {
				required: true,
				email: true
			}
		},
		messages: {
			email: {
				required: "Escribe tu email",
				email: "El email no es válido"
			}
		},
		submitHandler: function (form) {
			jQuery.ajax({
				type: "POST",
				url: "lib/User.controller.php",
				data: $(form).serialize(),
				dataType: "json",
				beforeSend: function(){
					$("#password_recovery_submit").html("Enviando").attr("disabled", true);
					$("#genericModalMsg").html('Enviando...');
					$("#genericModal").modal('show');
					$("#genericModal").modal('show');
				},
				success: function(data){
					if(data.status == 'success'){
						form.reset();
						$("#genericModalMsg").html('Se ha enviado un e-mail con una nueva contraseña.');
						setTimeout(function() {$('#genericModal').modal('hide');}, 3000);
					}
					else{
						$("#genericModalMsg").html(data.message);
						setTimeout(function() {$('#genericModal').modal('hide');}, 3000);
					}
					$("#password_recovery_submit").html("Recuperar contraseña").attr("disabled", false);
				}
			});
		}
	});

	$('#contact-form').validate({
		rules: {
			fullname: {
				required: true
			},
			company: {
				required: true
			},
			phone: {
				required: true,
				maxlength: 12,
				minlength: 8,
				digits: true
			},
			email: {
				required: true,
				email: true
			},
			message: {
				required: true
			}
		},
		messages: {
			fullname: {
				required: "Escribe tu nombre completo"
			},
			company: {
				required: "Empresa es un campo requerido"
			},
			phone: {
				required: "Tu número de teléfono es requerido",
				maxlength: "El teléfono no debe exceder de 12 dígitos",
				minlength: "El teléfono debe tener de 8 a 12 dígitos",
				digits: "Escribe tu teléfono únicamente con números"
			},
			email: {
				required: "Escribe tu email",
				email: "El email no es válido"
			},
			message: {
				required: "Escribe tu mensaje"
			}
		},
		submitHandler: function (form) {
			jQuery.ajax({
				type: "POST",
				url: "lib/Request.controller.php",
				data: $(form).serialize(),
				dataType: "json",
				beforeSend: function(){
					$("#contact_submit").html("Enviando").attr("disabled", true);
					$("#genericModalMsg").html('Enviando...');
					$("#genericModal").modal('show');
					$("#genericModal").modal('show');
				},
				success: function(data){
					if(data.status == 'success'){
						$("#genericModalMsg").html('Mensaje enviado.');
					}
					else{
						$("#genericModalMsg").html(data.message);
					}
					$("#genericModal").modal('show');
					$("#contact_submit").html("Enviar").attr("disabled", false);
					setTimeout(function() {$('#genericModal').modal('hide');}, 2000);
				}
			});
		}
	});

	$(document).on('click', '#logOut', function(event) {
		event.preventDefault();
		$.post('lib/User.controller.php', {action: 'logOut'}, function(data, textStatus, xhr) {
			location.reload(true);
		});
	});

	$(document).on('click', '.im_interested', function(event) {
		event.preventDefault();
		var name = $(this).data("name");
		
		$("#genericModalMsg").html("Enviando...");
		$("#genericModal").modal('show');
		$.post('lib/Request.controller.php', {action: 'registerRequest', name: name}, function(data, textStatus, xhr) {
			$("#genericModalMsg").html('Solicitud enviada.');
			setTimeout(function() {$('#genericModal').modal('hide');}, 1000);
		});
	});

	$(document).on('click', '.request_demo', function(event) {
		event.preventDefault();
		var name = $(this).data("name");
		$("#genericModalMsg").html("Enviando...");
		$("#genericModal").modal('show');
		$.post('lib/Request.controller.php', {action: 'registerRequest', name: "Demo: "+name}, function(data, textStatus, xhr) {
			$("#genericModalMsg").html('Solicitud enviada.');
			setTimeout(function() {$('#genericModal').modal('hide');}, 1000);
		});
	});
});




