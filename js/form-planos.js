$(document).ready(function(){

	$('input[name=nome]').focus(function(){
		resetarCampoInvalido($(this));
	})
	$('input[name=telefone]').focus(function(){
		resetarCampoInvalido($(this));
	})
	$('input[name=email]').focus(function(){
		resetarCampoInvalido($(this));
	})
	$('input[name=rua]').focus(function(){
		resetarCampoInvalido($(this));
	})
	$('input[name=n-casa]').focus(function(){
		resetarCampoInvalido($(this));
	})
	$('input[name=cpf]').focus(function(){
		resetarCampoInvalido($(this));
	})
	$('input[name=nascimento]').focus(function(){
		resetarCampoInvalido($(this));
	})

	$('input[name=telefone]').mask('(99)99999-9999');
	$('input[name=n-casa]').mask('99999');
	$('input[name=cpf]').mask('999.999.999-99');
	$('input[name=nascimento]').mask('99/99/9999');

	$('form').submit(function(){
		var nome = $('input[name=nome]').val();
		var telefone = $('input[name=telefone]').val();
		var email = $('input[name=email]').val();
		var rua = $('input[name=rua]').val();
		var n_casa = $('input[name=n-casa]').val();
		var cpf = $('input[name=cpf]').val();
		var nasc = $('input[name=nascimento]').val();
		var select = $('option').val();

		if(validarNome(nome) == false){
			aplicarCampoInvalido($('input[name=nome]'));
			return false;
		}else if(validarTelefone(telefone) == false){
			aplicarCampoInvalido($('input[name=telefone]'));
			return false;
		}else if(validarEmail(email) == false){
			aplicarCampoInvalido($('input[name=email]'));
			return false;
		}else if(validarRua(rua) == false){
			aplicarCampoInvalido($('input[name=rua]'));
			return false;
		}else if(validarNcasa(n_casa) == false){
			aplicarCampoInvalido($('input[name=n-casa]'));
			return false;
		}else if(validarCPF(cpf) == false){
			aplicarCampoInvalido($('input[name=cpf]'));
			return false;
		}else if(validarNascimento(nasc) == false){
			aplicarCampoInvalido($('input[name=nascimento]'));
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

	

	function validarNascimento(nasc){
		if(nasc == ''){
			return false;
		}
		if(nasc.match(/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/) == null){
			return false;
		}
	}
	function validarRua(rua){
		if(rua == ''){
			return false;
		}
		if(rua.match(/[A-Za-z]{1,}$/) == null){
			return false;
		}
	}
	function validarNcasa(n_casa){
		if(n_casa == ''){
			return false;
		}
		if(n_casa.match(/[0-9]{1,}$/) == null){
			return false;
		}
	}
	function validarCPF(cpf){
		if(cpf == ''){
			return false;
		}
		if(cpf.match(/^[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$/) == null){
			return false;
		}
	}

	function validarNome(nome){
		if(nome == ''){
			return false;
		}
		var amount = nome.split(' ').length;
		var splitStr = nome.split('');
		if(amount >= 2){
			for(var i = 0; i < amount; i++){
				if(splitStr[i].match(/[A-Za-z]{1,}$/)){

				}else{
					return false;
				}
			}
		}else{
			return false;
		}
	}
	function validarTelefone(telefone){
		if(telefone == ''){
			return false;
		}
		if(telefone.match(/^\([0-9]{2}\)[0-9]{5}-[0-9]{4}$/) == null){
			return false;
		}
	}
	function validarEmail(email){
		if(email == ''){
			return false;
		}
		if(email.match(/^([A-Za-z0-9-_.]{1,})+@+([A-Za-z.]{1,})$/) == null){
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