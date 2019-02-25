<?php
    session_start();
    $email = isset($_GET['e']) ? $_GET['e'] : null ;
    $_SESSION['emailac'] = $email;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include "tags/taghead.php"; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Obrigado!</title>
	<meta name="description" content=" ">
	<meta name="keywords" content=" ">
	<meta name="author" content=" ">
	<script src="https://use.fontawesome.com/22d13e1819.js"></script>

    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="distribution" content="global">
    <meta name="rating" content="General">
    <meta name="language" content="pt-br">
    <meta name="doc-class" content="completed">
    <meta name="doc-rights" content="public">
    <meta name="revisit-after" content="1">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/lpbootstrap.css" rel="stylesheet">

    <!-- Medias -->
    <link href="css/media-geral.css" rel="stylesheet">
    <link href="css/media-xsss.css" rel="stylesheet">
    <link href="css/media-xss.css" rel="stylesheet">
    <link href="css/media-xs.css" rel="stylesheet">
    <link href="css/media-sm.css" rel="stylesheet">
    <link href="css/media-md.css" rel="stylesheet">
    <link href="css/media-mdd.css" rel="stylesheet">
    <link href="css/media-lg.css" rel="stylesheet">
    <link href="css/media-xl.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,700i" rel="stylesheet">
</head>
<body>
<?php include "tags/tagbody.php"; ?>

<!-- CARREGA TODAS AS IMAGENS DE UMA ÚNICA VEZ -->
<div class="d-none">
    <img src="img/logo.png">
    <img src="img/favicon.png">
    <img src="img/logo-email.png">
    <img src="img/logo-principal.png">
    <img src="img/bg_fundo_mdd.jpg">
    <img src="img/pdf/capa.png">
</div>

<!-- LP -->

<!-- EFEITO DE FUNDO PARA FORMULÁRIO MOBILE -->
<!-- CONTEUDO COMPLETO -->
<section class="container-fluid">
    <!-- DOBRA 1 -->
    <div class="row capa">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <!-- <div class="col-xs-12 col-sm-12 col-mdd-1 col-lg-3 col-xl-12"></div> -->
        <div class="col-xs-12 col-sm-12 col-mdd-10 col-lg-5 col-xl-12 box-01">
            <img src="img/pdf/conteudo_01.png" class="img-fluid conteudo-aa d-block mx-auto" alt="">
        </div>
        <!-- ONDE O FORMULÁRIO IRÁ PASSAR -->
        <div class="col-xs-12 col-sm-12 col-mdd-1 col-lg-5 col-xl-12"></div>
    </div>
    <!-- DOBRA 2 -->
    <div class="row page02">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-mdd-auto col-lg-3 col-xl-4"></div>
        <div class="col-xs-12 col-sm-12 col-mdd-12 col-lg-12 col-xl-12">
            <img src="img/pdf/conteudo_02.png" class="img-fluid ml-5 conteudo-bb d-block mx-auto desktop" alt="">
            <!-- <img src="img/pdf/conteudo_pag_02_mb.png" class="img-fluid ml-5 conteudo-a d-block mx-auto mobile" alt=""> -->
        </div>
        
    </div>
    <!-- DOBRA 3 -->
    <div class="row page03">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-mdd-auto col-lg-3 col-xl-4"></div>
        <div class="col-xs-12 col-sm-12 col-mdd-12 col-lg-12 col-xl-12">
            <img src="img/pdf/conteudo_03.png" class="img-fluid ml-5 conteudo-cc d-block mx-auto desktop" alt="">
            <!-- <img src="img/pdf/conteudo_pag_03_mb.png" class="img-fluid ml-5 conteudo-a d-block mx-auto mobile" alt=""> -->
        </div>
        
    </div>
    <!-- DOBRA 4 -->
    <div class="row  page04">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-mdd-12 col-lg-12 col-xl-12">

        

            <img src="img/pdf/conteudo_04.png" id="hhh" class="img-fluid ml-5 conteudo-dd d-block mx-auto desktop" alt="">


            <!-- <img src="img/pdf/conteudo_pag_04_mb.png" class="img-fluid ml-5 conteudo-a d-block mx-auto mobile" alt=""> -->
        </div>
        
    </div>
    <!-- DOBRA 5 -->
    <div class="row page05">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-mdd-12 col-lg-12 col-xl-12">
            <img src="img/pdf/conteudo_05.png" class="img-fluid ml-5 conteudo-ee d-block mx-auto desktop" alt="">
            <!-- <img src="img/pdf/conteudo_pag_05_mb.png" class="img-fluid ml-5 conteudo-a d-block mx-auto mobile" alt=""> -->
        </div>
    </div>
    <!-- DOBRA 6 -->
    <div class="row page06">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-mdd-12 col-lg-12 col-xl-12">
            <img src="img/pdf/conteudo_06.png" class="img-fluid ml-5 conteudo-ff d-block mx-auto desktop" alt="">
            <!-- <img src="img/pdf/conteudo_pag_05_mb.png" class="img-fluid ml-5 conteudo-a d-block mx-auto mobile" alt=""> -->
        </div>
    </div>
    <!-- DOBRA 7 -->
    <div class="row page07">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-mdd-12 col-lg-12 col-xl-12">
            <img src="img/pdf/conteudo_07.png" class="img-fluid ml-5 conteudo-gg d-block mx-auto desktop" alt="">
            <!-- <img src="img/pdf/conteudo_pag_05_mb.png" class="img-fluid ml-5 conteudo-a d-block mx-auto mobile" alt=""> -->
        </div>
    </div>
    <!-- DOBRA 8 -->
    <div class="row page08">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-mdd-12 col-lg-12 col-xl-12">
            <img src="img/pdf/conteudo_08.png" class="img-fluid ml-5 conteudo-hh d-block mx-auto desktop" alt="">
            <!-- <img src="img/pdf/conteudo_pag_05_mb.png" class="img-fluid ml-5 conteudo-a d-block mx-auto mobile" alt=""> -->
        </div>
    </div>
    <!-- DOBRA 9 -->
    <div class="row page09">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-mdd-12 col-lg-12 col-xl-12">
            <a href="https://faculdadealfamerica.edu.br/seja-polo/obrigado.php" target="_blank" alt="Reserve agora!">
            <img src="img/pdf/conteudo_09.png" class="img-fluid ml-5 conteudo-ii d-block mx-auto desktop" alt="">
             </a>
            <!-- <img src="img/pdf/conteudo_pag_05_mb.png" class="img-fluid ml-5 conteudo-a d-block mx-auto mobile" alt=""> -->
        </div>
    </div>





    <!-- DOBRA 9 -->
    <!-- <div class="row page09">
        <div class="col-xs-12 col-sm-12 col-mdd-12 col-lg-12 col-xl-12">
            <a href="https://faculdadealfamerica.edu.br/seja-polo/obrigado.php" target="_blank" alt="Reserve agora!">
                <img src="img/pdf/conteudo_pag_06.png" class="img-fluid ml-5 conteudo-a d-block mx-auto desktop" alt="">
                <img src="img/pdf/conteudo_pag_06_mb.png" class="img-fluid ml-5 conteudo-a d-block mx-auto mobile" alt="">
            </a>
        </div>
    </div> -->
    

</section>

<script src="js/jquery.mask.js" async></script>
<script src="js/scripts.js" async></script>

<script type="text/javascript">
    var trackcmp_email = '<?php echo $email;?>';
    var trackcmp = document.createElement("script");
    trackcmp.async = true;
    trackcmp.type = 'text/javascript';
    trackcmp.src = '//trackcmp.net/visit?actid=89320724&e='+encodeURIComponent(trackcmp_email)+'&r='+encodeURIComponent(document.referrer)+'&u='+encodeURIComponent(window.location.href);
    var trackcmp_s = document.getElementsByTagName("script");
    if (trackcmp_s.length) {
        trackcmp_s[0].parentNode.appendChild(trackcmp);
    } else {
        var trackcmp_h = document.getElementsByTagName("head");
        trackcmp_h.length && trackcmp_h[0].appendChild(trackcmp);
    }
</script>
</body>
</html>