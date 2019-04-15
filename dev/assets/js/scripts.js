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
								obj = JSON.parse(data);
								if(obj.success) {
									var pixelLinkedIn = '<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=988876&conversionId=886113&fmt=gif" />';
									$(form).find('.msg').removeClass('error').addClass('success').html('Contato enviado com sucesso').append(pixelLinkedIn);
									window.fbq("trackCustom", "CadastroEmpresa");
									$(form)[0].reset();
									setTimeout(function(){
										window.location.href = 'http://viaflow.com.br/flowtalents/empresas/obrigado/';
									}, 1000);
									
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
								obj = JSON.parse(data);
								if(obj.success) {
									$(form).find('.msg').removeClass('error').addClass('success').html('Contato enviado com sucesso');
									var pixelLinkedIn = '<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=988876&conversionId=870858&fmt=gif" />';
									$(form).find('.msg').removeClass('error').addClass('success').html('Contato enviado com sucesso').append(pixelLinkedIn);
									window.fbq("trackCustom", "CadastroEstudante");
									$(form)[0].reset();
									setTimeout(function(){
										window.location.href = 'http://viaflow.com.br/flowtalents/estudantes/obrigado/';
									},1000);
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