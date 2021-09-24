$(document).ready(function(){


	$('input[name=email]').focus(function(){
		resetarCampoInvalido($(this));
	})

	$('form').submit(function(){
		var email = $('input[name=email]').val();
		var identificador = $('input[name=identificador]').val();

		if(verificarEmail(email) == false){
			aplicarCampoInvalido($('input[name=email]'));
			return false;
		}else{
			var form = $(this);
			$.ajax({
				beforeSend:function(){
					$('.overlay-loading').fadeIn();
				},
				url:'ajax/formularios.php',
				method:'post',
				dataType: 'json',
				data:form.serialize(),
			}).done(function(data){
				if(data.sucesso){
					//Tudo certo vamos melhorar a interface!
					$('.overlay-loading').fadeOut();
					$('.sucess-box').fadeIn();
					setTimeout(function(){
						$('.sucess-box').fadeOut();
					},3000)
				}else{
					//Algo deu errado.
					$('.overlay-loading').fadeOut();
					$('.erro-box').fadeIn();
				}
			});
			$('input[type=submit]').val('ENVIANDO');
		}
	})

	function verificarEmail(email){
		if(email == ''){
			return false;
		}
		if(email.match(/^([A-Za-z0-9-_.]{1,})+@+([A-Za-z.]{1,}$)/) == null){
			return false;
		}
	}

	function aplicarCampoInvalido(el){
		el.css('color','red');
		el.css('border','2px solid #d91164');
		el.val('Campo Invalido');
	}
	function resetarCampoInvalido(el){
		el.css('color','white');
		el.css('border','2px solid #07A1B4');
		el.val('');
	}
})