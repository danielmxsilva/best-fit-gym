<?php include('config.php');?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Best Fit Gym | Itupeva-SP</title>
        <link rel="shortcut icon" type="icon/png" href="<?php echo INCLUDE_PATH;
        $url = isset($_GET['url']) ? $_GET['url'] : '';
    switch ($url) {
        case '':
            echo 'img/icon.png"';
            break;
        case 'home':
            echo 'img/icon.png';
            break;
        case 'abest':
            echo 'img/icone-best.ico"';
            break;
        case 'planos':
            echo 'img/icone-best.ico"';
            break;
        case 'aulas':
            echo 'img/icone-best.ico"';
            break;
        case 'contato':
            echo 'img/icone-best.ico"';
            break;
        case 'programas':
            echo 'img/icone-best.ico"';
            break;
        case 'profissionais':
            echo 'img/icone-best.ico"';
            break;
        case 'perguntas-frequentes':
            echo 'img/icone-best.ico"';
            break;
        default:
            echo 'img/icone-best.ico"';
            break;
    }
        ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
        <meta name="description" content="Buscando sempre o seu melhor, cuidando de seu corpo e mantendo sua saúde em dia.">
        <meta name="keywords" content="best,fit,gym,academia,itupeva,sao paulo,bestfitgym">
        <meta name="author" content="damix.code">
        <meta property="og:title" content="Best Fit Gym | Itupeva-SP">
        <meta property="og:description" content="Buscando sempre o seu melhor, cuidando de seu corpo e mantendo sua saúde em dia.">
        <meta property="og:image" content="<?php echo INCLUDE_PATH;?>img/img-best-og.jpg">
        <meta property="og:url" content="http://bestfitgym.com.br">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH;?>css/jquery.fancybox.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH;?>css/slick.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH;?>css/style.css" rel="stylesheet">
        <script src="//code-sa1.jivosite.com/widget/t0QmI0hrMH" async></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-E1PXR5YYBD"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-E1PXR5YYBD');
        </script>
    </head>
<body>

    <div class="overlay-loading">
        <img src="<?php echo INCLUDE_PATH ?>img/ajax-loader.gif" />
    </div><!--overlay-loading-->

    <div class="sucess-box">
        <p>Formulário Enviado Com Sucesso!</p>
    </div><!--sucess-box-->

    <div class="erro-box">
        <p>Ocorreu Algum Erro!</p>
    </div><!--erro-box-->

    <header>
    <nav class="menu-mobile">
        <div class="icone-menu"></div>
        <ul>
            <li><a <?php
                        $url = isset($_GET['url']) ? $_GET['url'] : '';
                        switch ($url) {
                            case 'abest':
                                echo 'class="text-decoration"';
                                break;
                            default:
                                echo '"';
                                break;
                        }
                    ?> href="<?php echo INCLUDE_PATH;?>abest">A BEST</a></li>
                    <li><a <?php
                        $url = isset($_GET['url']) ? $_GET['url'] : '';
                        switch ($url) {
                            case 'planos':
                                echo 'class="text-decoration"';
                                break;
                            default:
                                echo '"';
                                break;
                        }
                    ?> href="<?php echo INCLUDE_PATH;?>planos">PLANOS</a></li>
                    <li><a <?php
                        $url = isset($_GET['url']) ? $_GET['url'] : '';
                        switch ($url) {
                            case 'aulas':
                                echo 'class="text-decoration"';
                                break;
                            default:
                                echo '"';
                                break;
                        }
                    ?> href="<?php echo INCLUDE_PATH;?>aulas">GRADE DE AULAS</a></li>
                    <li><a <?php
                        $url = isset($_GET['url']) ? $_GET['url'] : '';
                        switch ($url) {
                            case 'contato':
                                echo 'class="text-decoration"';
                                break;
                            default:
                                echo '"';
                                break;
                        }
                    ?> href="<?php echo INCLUDE_PATH;?>contato">CONTATO</a></li>
            <li class="btn-prg"><a href="<?php echo INCLUDE_PATH;?>programas">PROGRAMAS</a></li>
        </ul>
    </nav><!--menu-desktop-->
        <div class="container">
            <div class="logo">
                <a href="<?php echo INCLUDE_PATH;?>index.php"><img src="<?php echo INCLUDE_PATH;?>img/header/logo.png"></a>
            </div><!--logo-->
            <nav class="menu-desktop">
                <ul>
                    <li><a <?php
                        $url = isset($_GET['url']) ? $_GET['url'] : '';
                        switch ($url) {
                            case 'abest':
                                echo 'class="text-decoration"';
                                break;
                            default:
                                echo '"';
                                break;
                        }
                    ?> href="<?php echo INCLUDE_PATH;?>abest">A BEST</a></li>
                    <li><a <?php
                        $url = isset($_GET['url']) ? $_GET['url'] : '';
                        switch ($url) {
                            case 'planos':
                                echo 'class="text-decoration"';
                                break;
                            default:
                                echo '"';
                                break;
                        }
                    ?> href="<?php echo INCLUDE_PATH;?>planos">PLANOS</a></li>
                    <li><a <?php
                        $url = isset($_GET['url']) ? $_GET['url'] : '';
                        switch ($url) {
                            case 'aulas':
                                echo 'class="text-decoration"';
                                break;
                            default:
                                echo '"';
                                break;
                        }
                    ?> href="<?php echo INCLUDE_PATH;?>aulas">GRADE DE AULAS</a></li>
                    <li><a <?php
                        $url = isset($_GET['url']) ? $_GET['url'] : '';
                        switch ($url) {
                            case 'contato':
                                echo 'class="text-decoration"';
                                break;
                            default:
                                echo '"';
                                break;
                        }
                    ?> href="<?php echo INCLUDE_PATH;?>contato">CONTATO</a></li>
                    <li class="btn-prg"><a href="<?php echo INCLUDE_PATH;?>programas">PROGRAMAS</a></li>
                </ul>
            </nav><!--menu-desktop-->
            <div class="clear"></div>
        </div><!--container-->
    </header>
    <div <?php $url = isset($_GET['url']) ? $_GET['url'] : '';

        switch ($url) {
            case '':
                echo 'class="overlay"';
                break;
            
            case 'home':
                echo 'class="overlay"';
                break;
            case 'abest':
                echo 'class="overlay-best"';
                break;
            case 'planos':
                echo 'class="overlay-best"';
                break;
            case 'aulas':
                echo 'class="overlay-best"';
                break;
            case 'contato':
                echo 'class="overlay-best"';
                break;
            case 'natacao':
                echo 'class="overlay-best"';
                break;
            case 'programas':
                echo 'class="overlay-programas"';
                break;
            case 'profissionais':
                echo 'class="overlay-profision"';
                break;
            case 'perguntas-frequentes':
                echo 'class="overlay-best"';
                break;
            case 'aula-experimental':
                echo 'class="overlay-best"';
                break;
            case 'form-planos':
                echo 'class="overlay-best"';
                break;
            case 'ballet':
                echo 'class="overlay-off"';
                break;
            case 'circuito-funcional':
                echo 'class="overlay-off"';
                break;
            case 'fitdance':
                echo 'class="overlay-off"';
                break;
            case 'jiujitsu':
                echo 'class="overlay-off"';
                break;
            case 'kickbox':
                echo 'class="overlay-off"';
                break;
            case 'ritmos':
                echo 'class="overlay-off"';
                break;
            case 'step':
                echo 'class="overlay-off"';
                break;
            default:
                echo 'class="overlay-best"';
                break;
        }?>></div>
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        $urlPar = INCLUDE_PATH;

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            echo '<script>location.href="'.$urlPar.'"</script>';
            die(); 
        }
    ?>
    <div <?php
    $url = isset($_GET['url']) ? $_GET['url'] : '';
    switch ($url) {
        case '':
            echo 'class="none"';
            break;
        case 'aula-experimental':
            echo 'class="none"';
            break;
        case 'home':
            echo 'class="none"';
            break;
        case 'abest':
            echo 'class="btn-exp"';
            break;
        case 'planos':
            echo 'class="btn-exp"';
            break;
        case 'aulas':
            echo 'class="btn-exp"';
            break;
        case 'contato':
            echo 'class="btn-exp"';
            break;
        case 'programas':
            echo 'class="btn-exp"';
            break;
        default:
            echo 'class="btn-exp"';
            break;
    }

?>>
    <a href="<?php echo INCLUDE_PATH;?>aula-experimental" class="pulse"></a>
</div>
 
    <script src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/jquery.fancybox.js"></script>
    <script>
        $(document).ready(function(){
            $('.galeria-fotos').fancybox({
                'openEffect':'elastic',
                arrows:true
            });
        })
    </script>
    <script src="<?php echo INCLUDE_PATH;?>js/slick.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/slider.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/menu.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCDIxxm6r_Lygi8XG1oCs_ZWyD4G2fPpSM"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/scripts.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/planos-script.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/programas.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/jquery.mask.js"></script>
    <?php
        if($url == 'contato'){
    ?>
    <script src="<?php echo INCLUDE_PATH;?>js/form-contato.js"></script>
    <?php }?>
    
    <?php
        if($url == 'aula-experimental'){
    ?>
    <script src="<?php echo INCLUDE_PATH;?>js/form-exp.js"></script>
    <?php             
        }
    ?>

</body>

</html>