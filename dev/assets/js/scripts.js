$(function(){
	var Main = {
		init : function(){
			Main.bind.init.call();
		},
		cache : {

		},
		bind : {
			init: function(){


				$('.s-landing-forms__form--01').on('submit', function(e){
					e.preventDefault();
				}).validate({
					errorPlacement: function(error, element) {
					},
					invalidHandler: function(form, validator){
						$(form.target).find('.msg').removeClass('success').addClass('error').html('Preencha todos os campos destacados');
					},
					highlight: function(element, errorClass) {
						$(element).addClass('error');
					},
					unhighlight: function(element, errorClass) {
						$(element).removeClass('error');
					},
					rules: {
						name: {
							required: true,
							minlength: 2,
							maxlength: 50
						},
						email: {
							required: true,
							email: true,
							minlength: 2,
							maxlength: 50
						},
						company: {
							required: true,
							minlength: 2,
							maxlength: 50
						},
						role: {
							required: true,
							minlength: 2,
							maxlength: 50
						},
					},
					submitHandler: function(form){
						$.post(
							form.action,
							$(form).serializeArray(),
							function(data) {
								if(data.success) {
									$(form.target).find('.msg').removeClass('error').addClass('success').html('Contato enviado com sucesso');
									$(form.target).reset();
								}
							}
							);
					}
				});






				$('.s-landing-forms__form--02').on('submit', function(e){
					e.preventDefault();
				}).validate({
					errorPlacement: function(error, element) {
					},
					invalidHandler: function(form, validator){
						$(form.target).find('.msg').removeClass('success').addClass('error').html('Preencha todos os campos destacados');
					},
					highlight: function(element, errorClass) {
						$(element).addClass('error');
					},
					unhighlight: function(element, errorClass) {
						$(element).removeClass('error');
					},
					rules: {
						name: {
							required: true,
							minlength: 2,
							maxlength: 50
						},
						email: {
							required: true,
							email: true,
							minlength: 2,
							maxlength: 50
						},
						college: {
							required: true,
							minlength: 2,
							maxlength: 50
						},
						class: {
							required: true,
							minlength: 2,
							maxlength: 50
						},
						phone: {
							required: true,
							minlength: 17
						},
					},
					submitHandler: function(form){
						$.post(
							form.action,
							$(form).serializeArray(),
							function(data) {
								if(data.success) {
									$(form.target).find('.msg').removeClass('error').addClass('success').html('Contato enviado com sucesso');
									$(form.target).reset();
								}
							}
							);
					}
				});


				$('.form-phone').mask('(00) 000.00.00.00');


			},
		},
		functions : {

		}
	}

	Main.init.call();
});