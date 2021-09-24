<?php

	$autoload = function($class){
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);


	define('INCLUDE_PATH','http://localhost/site_best/');
	

	/* 
		conferir pasta ajax e classes (formularios.php) e (Email.php) além de da pasta vendor (foi adicionada a dependência phpmailer)
	*/
		/*
		Config atualizado
		*/
?>