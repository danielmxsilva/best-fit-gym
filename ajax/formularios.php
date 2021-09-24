<?php
	include('../config.php');
	$data = array();
	$assunto = 'Nova mensagem do site!';
	$corpo = '';
	foreach ($_POST as $key => $value) {
		if($key == 'acao')
			continue;
		$corpo.=ucfirst($key).": ".$value;
		$corpo.="<hr>";
	}
	$info = array('assunto'=>$assunto,'corpo'=>$corpo);
	$mail = new \Email('smtps.uhserver.com','contato@bestfitgym.com.br','best13','Site Bestfitgym');
	$mail->enviarPara('contato@bestfitgym.com.br','contato');
	$mail->formatarEmail($info);
	if($mail->enviarEmail()){
		$data['sucesso'] = true;
		echo '<script>alert("sucesso")</script>';
	}else{
		$data['erro'] = true;
		echo '<script>alert("erro")</script>';
	}

	//$data['retorno'] = 'sucesso';

	die(json_encode($data));
?>