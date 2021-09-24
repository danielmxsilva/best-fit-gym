<footer <?php
	$url = isset($_GET['url']) ? $_GET['url'] : '';
	switch ($url) {
		case '':
			echo 'class="home-footer"';
			break;
		case 'home':
			echo 'class="home-footer"';
			break;
		case 'abest':
			echo 'class="abest-footer"';
			break;
		case 'programas':
			echo 'class="programas-footer"';
			break;
		case 'profissionais':
			echo 'class="programas-footer footer-profis"';
			break;
		default:
			echo 'class="footer-off"';
			break;
	}

?>>
	<div class="container">
		<div class="w30">
			<a href="<?php echo INCLUDE_PATH;?>"home><img src="<?php echo INCLUDE_PATH;?>img/footer/logoFooter.png"></a>
		</div><!--w25-footer-->
		<div class="w45">
			<div class="unidade-single">
				<h3 class="h3-footer">Unidade Centro</h3>
				<p>Rua Prof.Deolinda Silveira de Camargo 251 - jd.São Vicente<br>
				E-mail: contato@bestfitgym.com.br
				<br>
				Telefone: 4591-3118
				<br>
				Funcionamento: Seg a Sex 6h às 22h | Sab das 7h às 12h</p>
			</div><!--unidade-single-->
			<div class="unidade-single">
				<h3 class="h3-footer">Unidade AcquaMarine</h3>
				<p>Av.Guanabara, 355 - jd.São Vicente<br>
				E-mail: acquamarine@bestfitgym.com.br
				<br>
				Telefone: 4496-3898
				<br>
				Funcionamento: Seg a Sex 6h às 22h | Sab das 7h às 12h</p>
			</div><!--unidade-single-->
			<div class="unidade-single">
				<h3 class="h3-footer">Unidade Nova Monte Serrat</h3>
				<p>Rua Geraldo Ferraz 216 - Rio das Pedras<br>
				E-mail: unidadeii@bestfitgym.com.br
				<br>
				Telefone: 99747-7033
				<br>
				Funcionamento: Seg a Sex 7h às 9h / 15h às 21h | Sab das 8h às 10h</p>
			</div><!--unidade-single-->
		</div><!--w50-footer-->
		<div class="w25">
			<a href="https://www.facebook.com/bestfitgymoficial" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg></a>
			<a href="https://www.instagram.com/bestfitgym/" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a>
		</div><!--w25-footer-->
	</div><!--container-->

	<div class="footer-2">
		<div class="container">
			<div class="w25">
				<div class="title">SOBRE</div>
				<a href="<?php echo INCLUDE_PATH;?>abest">A Best Fit Gym</a>
				<a href="<?php echo INCLUDE_PATH;?>planos">Planos</a>
				<a href="<?php echo INCLUDE_PATH;?>aulas">Grade de Aulas</a>
				<a href="<?php echo INCLUDE_PATH;?>profissionais">Profissionais</a>
				<a href="<?php echo INCLUDE_PATH;?>perguntas-frequentes">Perguntas Frequentes</a>
			</div><!--w25-->
			<div class="w25">
				<div class="title">CONTATO</div>
				<a href="<?php echo INCLUDE_PATH;?>contato">Trabalhe Conosco</a>
				<a href="<?php echo INCLUDE_PATH;?>contato">Fale Conosco</a>
			</div><!--w25-->
			<div class="w25">
				<div class="title">PROGRAMAS</div>
				<a href="<?php echo INCLUDE_PATH;?>programas">Emagrecimento</a>
				<a href="<?php echo INCLUDE_PATH;?>programas">Alongamento</a>
			</div><!--w25-->
			<div class="w25">
				<div class="title">CONVITE</div>
				<a href="<?php echo INCLUDE_PATH;?>aula-experimental">Aula Experimental</a>
			</div><!--w25-->
		</div><!--container-->
	</div><!--footer-2-->
	<div class="footer-3">
		<div class="container">
			<p class="w-footer-1">Best Fit Gym &reg Marca Registrada 	2021 &copy Todos os direitos reservados</p>
			<p class="w-footer-2">Desenvolvido por <a href="#"><img src="<?php echo INCLUDE_PATH;?>img/footer/logo-devs.png"></a></p>
		</div><!--container-->
	</div><!--footer-3-->
</footer>