<section class="abest">

</section>
<div class="container-best">
    <div class="box-title">
    	<h1>SOBRE NÓS</h1>
    </div><!--box-title-->
    <div class="first">
    	<p><b>A Best:</b> O centro de treinamento Best Fit Gym surgiu no ano de 2013, de um sonho de dois empresários que vieram de São Paulo para residir na cidade de Itupeva</p>
    </div><!--box-paragrafo-->
    <div class="box-paragrafo">
    	<p><b>Nossa Visão:</b> Ser A EMPRESA que motiva e transforma a vida de clientes e colaboradores por promover saúde, divertimento, alegria e bem-estar.</p>
    </div><!--box-paragrafo-->
    <div class="box-paragrafo">
    	<p><b>Nossa Missão:</b> Cuidar das pessoas promovendo saúde e qualidade de vida aos clientes e colaboradores em um ambiente seguro e agradável.</p>
    </div><!--box-paragrafo-->
    <div class="box-paragrafo">
    	<p><b>Segurança:</b> Proporcionar um ambiente seguro é um compromisso de todos que trabalham na Best Fit Gym.</p>
    </div><!--box-paragrafo-->
    <div class="box-paragrafo">
    	<p><b>Satisfação dos nossos clientes:</b> Fornecer serviços compatíveis às necessidades dos nossos clientes. Não abrimos mão de proporcionar atendimento de qualidade e um ambiente familiar.</p>
    </div><!--box-paragrafo-->
    <div class="box-paragrafo">
    	<p><b>Pessoas:</b> Colaboradores motivados, realizados e comprometidos.</p>
    </div><!--box-paragrafo-->
    <div class="box-paragrafo">
    	<p>É com grande alegria e honra que convidamos a nos conhecer pessoalmente.</p>
    </div><!--box-paragrafo-->
    <a class="duvidas-banner" href="<?php echo INCLUDE_PATH;?>perguntas-frequentes"><img src="<?php echo INCLUDE_PATH;?>img/abest/bannerDuvidas.png"></a>

    <div class="title">GALERIA DE FOTOS</div>

    <div class="box-galeria">

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-1.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-1.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-2.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-2.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-3.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-3.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-4.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-4.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-5.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-5.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-6.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-6.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-7.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-7.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-8.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-8.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-9.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-9.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-10.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-10.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-11.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-11.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-12.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-12.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-13.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-13.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-14.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-14.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-15.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-15.jpg"></a>

    	<a rel="galeria-fotos" href="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-16.jpg" class="galeria-fotos"><img src="<?php echo INCLUDE_PATH;?>img/abest/galeria/galeria-16.jpg"></a>

    </div><!--box-galeria-->

<script src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script>
<script>
    $(document).ready(function(){
        var atual = -1;
        var maximo = $('.galeria-fotos').length -1;
        var timer;
        var animationDelay = 0.5;

        executarAnimacao();
        function executarAnimacao(){
            $('.galeria-fotos').hide();
            timer = setInterval(logicaAnim,animationDelay*1000);
        }

        function logicaAnim(){
            atual++;
            if(atual > maximo){
                clearInterval(timer);
                return false;
            }
            $('.galeria-fotos').eq(atual).fadeIn();
        }
    })
</script>
</div><!--container-best-->
<?php include('footer.php')?>