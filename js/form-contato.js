$(document).ready(function(){

	$('input[name=telefone]').mask('(99)99999-9999');

	$('input[name=nome]').focus(function(){
		resetarCampoInvalido($(this));
	})
	$('input[name=telefone]').focus(function(){
		resetarCampoInvalido($(this));
	})
	$('input[name=email]').focus(function(){
		resetarCampoInvalido($(this));
	})
	$('textarea').focus(function(){
		resetarCampoInvalido($(this));
	})

	$('form').submit(function(){
		var nome = $('input[name=nome]').val();
		var telefone = $('input[name=telefone]').val();
		var email = $('input[name=email]').val();
		var mensagem = $('textarea').val();
		var select = $('option').val();

		if(verificarNome(nome) == false){
			aplicarCampoInvalido($('input[name=nome]'));
			return false;
		}else if(verificarTelefone(telefone) == false){
			aplicarCampoInvalido($('input[name=telefone]'));
			return false;
		}else if(verificarEmail(email) == false){
			aplicarCampoInvalido($('input[name=email]'));
			return false;
		}else if(verificarMensagem(mensagem) == false){
			aplicarCampoInvalido($('textarea'));
			return false;
		}else{
			var form = $(this);
			/*
			$.ajax({
				url:'ajax/formularios.php',
				method:'post',
				dataType: 'json',
				data:form.serialize()
			}).done(function(data){
				
			});
			*/
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

	function verificarNome(nome){
		if(nome == ''){
			return false;
		}
		var amount = nome.split(' ').length;
		var splitStr = nome.split('');
		if(amount >= 2){
			for(var i  = 0; i < amount; i++){
				if(splitStr[i].match(/[A-Za-z]{1,}$/)){

				}else{
					return false;
				}
			}
		}else{
			return false;
		}
	}

	function verificarTelefone(telefone){
		if(telefone == ''){
			return false;
		}
		if(telefone.match(/^\([0-9]{2}\)[0-9]{5}-[0-9]{4}$/) == null){
			return false;
		}
	}

	function verificarEmail(email){
		if(email == ''){
			return false;
		}
		if(email.match(/^([A-Za-z0-9-_.]{1,})+@+([A-Za-z.]{1,}$)/) == null){
			return false;
		}
	}

	function verificarMensagem(mensagem){
		if(mensagem == ''){
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
		el.css('border','1px solid white');
		el.val('');
	}
})