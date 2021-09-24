<section class="home">
    <div class="container relative">
    	<div class="chamada-header">
    		<div class="chamada-header-h2">
    			<h2>CUIDANDO DO<br> SEU BEM ESTAR.</h2>
    			<p>Buscando sempre o seu melhor, cuidando de seu corpo e mantendo sua saúde em dia.</p>
    		</div><!--chamada-header-h2-->
    		<div class="chamada-header-btn">
    			<a href="<?php echo INCLUDE_PATH;?>aula-experimental">AULA EXPERIMENTAL</a>
    		</div><!--chamada-header-btn-->
    	</div><!--chamada-header-->
    </div><!--container-->
    <div class="treinos">
            <div class="container-treinos">
                <div class="single-treinos ballet"><a href="<?php echo INCLUDE_PATH?>ballet"></a></div>
                <div class="single-treinos circuit-funcion"><a href="<?php echo INCLUDE_PATH?>circuito-funcional"></a></div>
                <div class="single-treinos fitdance"><a href="<?php echo INCLUDE_PATH?>fitdance"></a></div>
                <div class="single-treinos jiujitsu"><a href="<?php echo INCLUDE_PATH?>jiujitsu"></a></div>
                <div class="single-treinos kickbox"><a href="<?php echo INCLUDE_PATH?>kickbox"></a></div>
                <div class="single-treinos ritmos"><a href="<?php echo INCLUDE_PATH?>ritmos"></a></div>
                <div class="single-treinos step"><a href="<?php echo INCLUDE_PATH?>step"></a></div>
            </div><!--container-treinos-->
        </div><!--treinos-->

<section class="nosso-espaco">
    <div class="container">
        <div class="title">NOSSO ESPAÇO</div><!--title-->
        <div class="txt-espaco">
            <p>
                Contamos com um amplo espaço sofisticado para acomodar todos os nossos alunos, com profissionais altamente qualificados para melhor auxilia-lo em seu desenvolvimento pessoal.
            </p>
        </div><!--txt-espaco-->
        <div class="btn-chamada"><a href="<?php echo INCLUDE_PATH;?>abest">SAIBA MAIS</a></div>
    </div><!--container-->
</section><!--nosso-espaco-->

<section class="natacao">
    <div class="escuro-bg"></div>
    <div class="container">
        <div class="txt-natacao">
            <h2>NATAÇÃO</h2>
            <p>Adulto, Infantil, Hidroginástica Metodologia Gustavo Borges.</p>
            <div class="btn-chamada"><a href="<?php echo INCLUDE_PATH;?>natacao">SAIBA MAIS</a></div>
        </div><!--txt-natacao-->
    </div><!--container-->
</section><!--natacao-->

<section class="novidades">
    <div class="container">
        <div class="novidades-parte-1">
            <div class="title">INSCREVA-SE<br/>E RECEBA<br/>NOVIDADES</div><!--title-->
        </div>
        <div class="novidades-parte-2">
            <form method="POST">
                <input type="hidden" name="identificador" value="Receber Novidades" />
                <input type="text" name="email" placeholder="E-mail">
                <input type="submit" name="acao" class="btn-chamada" value="RECEBER NOVIDADES">
            </form>
        </div>
    </div><!--container-->
</section><!--novidades-->

<section class="depoimentos">
    <div class="container">
        <div class="title">DEPOIMENTOS</div><!--title-->
        <div class="depoimentos-wraper">

            <div class="depoimentos-single">
                <div class="depoimento-author">
                    <div class="img-depoimento"><img src="img/depoimentos/depoimento-1.jpg"></div>
                    <div class="nome-depoimento"><span>Daniel Mateus</span></div>
                </div>
                <div class="depoimento-texto">
                    <p>Academia completa, aparelhos limpos, ambiente agradável, as músicas são muito bem selecionadas pra dar um gás nos treinos.</p>
                </div><!--depoimento-texto-->
            </div><!--depoimentos-single-->

            <div class="depoimentos-single">
                <div class="depoimento-author">
                    <div class="img-depoimento"><img src="img/depoimentos/depoimento-2.jpg"></div>
                    <div class="nome-depoimento"><span>Fabiane Franco</span></div>
                </div>
                <div class="depoimento-texto">
                    <p>Super recomendo!!! Espaço amplo, ótimos profissionais, todos muito atenciosos... As aulas de Fitdance arrasam ... Vale a pena conferir!.</p>
                </div><!--depoimento-texto-->
            </div><!--depoimentos-single-->

            <div class="depoimentos-single">
                <div class="depoimento-author">
                    <div class="img-depoimento"><img src="img/depoimentos/depoimento-3.jpg"></div>
                    <div class="nome-depoimento"><span>Cristiane Toledo</span></div>
                </div>
                <div class="depoimento-texto">
                    <p>Profissionalismo, dedicação, aulas ótimas e animadíssimas, muito organizado..</p>
                </div><!--depoimento-texto-->
            </div><!--depoimentos-single-->

        </div><!--depoimentos-wraper-->
    </div><!--container-->
</section><!--depoimentos-->

<section class="local">
    <div class="map-wrap">
        <div id="map"></div>
    </div><!--map-wrap-->
    <div class="txt-map">
        <div class="title">LOCALIZAÇÃO</div><!--title-->
        <div class="txt-localizacao">
            <a>Unidade Centro</a>
            <a>Unidade AcquaMarine</a>
            <a>Unidade Nova Monte Serrat</a>
        </div><!--txt-localizacao-->
    </div><!--txt-map-->
</section><!--localizacao-->


<?php include('footer.php')?>
</section><!--home-->
<script src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH;?>js/form-home.js"></script>