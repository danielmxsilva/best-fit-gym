<section class="contato">
	
</section><!--contato-->
<div class="container-best">
		<div class="box-title-planos">
	    	<h1>CONTATO</h1>
	    </div><!--box-title-->
	    <div class="first-planos first-contato">
	    	<p><b>Utilize </b> o formulário abaixo para entrar em contato com nossa Academia. Opcionalmente você poderá entrar em contato direto conosco em um de nossos contatos abaixo.</p>
	    </div><!--first-planos-->
	<div class="map-contato">
        <div id="map"></div>
    </div><!--map-wrap-->
    <div class="wrap-form">
    	<form method="POST">
    		<input type="hidden" name="identificador" value="Contato" />
    		<select name="Motivo">
    			<option value="duvidas">Dúvidas</option>
    			<option value="depoimentos">Depoimento</option>
    			<option value="trabalhe conosco">Trabalhe Conosco</option>
    			<option value="programas">Programas</option>
    			<option value="sugestao">Sugestões</option>
    			<option value="reclamacao">Reclamações</option>
    			<option value="outro">Outros</option>
    		</select>
    		<input type="text" name="nome" placeholder="Nome Completo">
    		<input type="text" name="telefone" placeholder="Telefone">
    		<input type="text" name="email" placeholder="E-mail">
    		<textarea placeholder="Mensagem.."></textarea>
	    	<input type="submit" name="acao" value="ENVIAR">
    	</form>
    </div><!--wrap-form-->
</div><!--container-best-->
<?php include('footer.php')?>