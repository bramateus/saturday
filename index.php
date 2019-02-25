<?php
// session_start();
require_once("includes/config.php"); //CONEXÃO COM A BASE DE DADOS
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


unset($_SESSION['emailEnviado']);
$_SESSION['emailEnviado'] = true;

// require "includes/conexao.php";
include "tags/tagfunctions.php";

// exit;
// $universidade = 9;
// $campanha = 17;

// $sqlcamp = "SELECT lpc_id, lpc_num_clicks, lpc_campanha FROM landingpage_campaign WHERE lpc_id = " . $campanha;
// $resultcamp = $PDO->query($sqlcamp);
// $rowscamp = $resultcamp->fetch(PDO::FETCH_ASSOC);

// $sqlun = "SELECT lpun_university FROM landingpage_university WHERE lpun_id = " . $universidade;
// $resultun = $PDO->query($sqlun);
// $rowsun = $resultun->fetch(PDO::FETCH_ASSOC);

// $updatecamp = "UPDATE landingpage_campaign SET lpc_num_clicks = :lpc_num_clicks WHERE lpc_id = :lpc_id";
// $resultupcamp = $PDO->prepare($updatecamp);
// $newclick = $rowscamp['lpc_num_clicks'] + 1;
// $resultupcamp->bindParam(':lpc_id', $rowscamp['lpc_id']);
// $resultupcamp->bindParam(':lpc_num_clicks', $newclick);
// $resultupcamp->execute();

// $btninscrevase = "INSCREVA-SE";
// $btnaguarde = "ENVIANDO SOLICITAÇÃO...";
// $topoformulario = "<span style='font-size: 32px; text-align:left'>FAÇA AGORA MESMO!</span><br><span style='font-size: 22px; text-align:left'></span><span style='font-size:14px'>Preencha o formulário abaixo e em seguida entraremos em contato por telefone ou e-mail.</span>";
// $btnregulamento = "regulamento-preco-popular-14-09.pdf";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include "tags/taghead.php"; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <title><?php echo utf8_encode($rowscamp['campanha_titulo']); ?> | <?php echo $rowsun['instituicao_titulo']; ?></title>
    <!-- <title><?php //echo utf8_encode($rowscamp['lpc_campanha']); ?> | <?php //echo $rowsun['lpun_university']; ?></title> -->
    <meta name="description" content="Se você tem uma escola de cursos livres, aumente o seu portifólio. Oportunidade única!"/>
    <meta name="keywords" content="franquia de faculdade, franquia inovadora, polo, franquia de educação, franquia de educação superior, pós-graduação ,franquia brasil, abrir uma franquia, franquia barata"/>
    <meta name="robots" content="index,follow"/>
    <meta name="googlebot" content="index,follow"/>
    <meta name="distribution" content="global"/>
    <meta name="rating" content="General"/>
    <meta name="language" content="pt-br"/>
    <meta name="url" content="<?php echo $rowsun['instituicao_link'] . "/" . $rowscamp['campanha_url']; ?>"/>
    <meta name="doc-class" content="completed"/>
    <meta name="doc-rights" content="public"/>
    <meta name="autor" content="<?php echo $rowsun['instituicao_titulo']; ?>"/>
    <meta name="company" content="<?php echo $rowsun['instituicao_titulo']; ?>">
    <meta name="revisit-after" content="1"/>
    <link rev="made" href="mailto:gc@dowbis.com.br"/>
    <link rel='canonical' href='<?php echo $rowsun['instituicao_link'] . "/" . $rowscamp['campanha_url']; ?>'/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="js/jquery.min.js"></script> -->
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/lpbootstrap.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,700i" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css">


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
    <link href="css/style.css" rel="stylesheet">


</head>
<body>
<?php include "tags/tagbody.php"; ?>

<!-- CARREGA TODAS AS IMAGENS DE UMA ÚNICA VEZ -->
<div class="d-none">
    <img src="img/logo.png">
    <img src="img/favicon.png">
    <img src="img/logo-email.png">
    <img src="img/logo-principal.png">
    <img src="img/bg_fundo_xl.jpg">
</div>



 <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .box {
            background-color: #D31717 !important;
            border: 2px solid #ce004d !important;
        }

        a.active {
          background-color: red !important;
          color: #fff;
        }


        .box p {
            border-top-left-radius: 17px;
            border-top-right-radius: 17px;
            color: #FFF !important;
            font-size: 22px;
            font-weight: bold;
            padding: 20px 30px;
            text-align: center;
        }
        .btn-personalizado{
            background-color: blue !important;
        }
        .btn-personalizado:hover{
            background-color: blue !important;
        }
        .img-mobile{
                display: none;
            }
            #form-box {margin-top:5vh}
        </style>


      







    <!-- Contact -->
    <div class="contactform modal fade" id="contact" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Contate-nos</h4>
          </div>
              <div class="modal-body text-xs-center">
                <ul class="social-media">
                  <li class="m-x-2 "><a href="https://twitter.com/" target="_blank"><i class="fa fa-3x fa-twitter" aria-hidden="true"></i></a></li>
                  <li class="m-x-2 "><a href="https://github.com/" target="_blank"><i class="fa fa-3x fa-github" aria-hidden="true"></i></a></li>
                  <li class="m-x-2"><a href="https://www.linkedin.com/in/" target="_blank"><i class="fa fa-3x fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
                <hr class="modal-hr">
                <form action="formulario.php" method="POST">
                  <fieldset class="form-group" id="nameresult">
                    <!-- <label for="Name">Nome</label> -->
                    <input type="text" class="form-control form-control-danger form-control-success" id="name" name="name" placeholder="Nome">
                  </fieldset>
                  <fieldset class="form-group" id="emailresult">
                    <!-- <label for="Email">Email</label> -->
                    <input type="email" class="form-control form-control-danger form-control-success" id="email" name="email" placeholder="Email">
                  </fieldset>
                  <fieldset class="form-group" id="messageresult">
                    <!-- <label for="Message">Message</label> -->
                    <textarea class="form-control form-control-danger form-control-success" id="message" rows="5" name="message" placeholder="Mensagem"></textarea>
                  </fieldset>
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button> -->
                <button type="submit" id="submit" value="submit" class="btn btn-primary" disabled>Enviar</button>
              </div>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

 <!-- TOPO -->
    
        <!-- CHAMADA -->
      

        <!-- FORMULÁRIO -->
        <!-- <div class="col-xs-12 col-sm-12 col-mdd-4 col-lg-3 col-xl-3">
            <div class="box target" id="form-box">
                <button class="btn btn-warning btn-sm btn-close"><i class="fa fa-close fa-fw"></i></button>
                <p class="text-uppercase">Amplie agora o potencial da sua empresa!</p>
                <form id="addCommentForm" method="POST">
                    <div class="form-group">
                        <input type="text" name="NomeCompleto" class="form-control" placeholder="Nome completo" id="teste" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="Email" class="form-control" placeholder="Email" id="myEmail" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="TelefoneDeContato" class="form-control" placeholder="Telefone de contato" id="celular" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-9">
                            <input type="text" name="Cidade" class="form-control" placeholder="Cidade" required>
                        </div>
                        <div class="form-group col-3">
                            <input type="text" name="UF" class="form-control" placeholder="UF" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <button id="submit" class="btn btn-warning btn-sm d-block mx-auto" aria-pressed="true">
                            <span id="inscreva">BAIXAR APRESENTAÇÃO</span>
                            <span id="aguarde">
                                <i class="fa fa-spinner fa-spin fa-fw"></i> <span style="font-size: 14px;">AGUARDE A OPORTUNIDADE...</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div> -->
<!-- <div class="col-xs-12 col-sm-12 col-mdd-4 col-lg-3 col-xl-3">
<div  class="box btn-glass-hover target" id="form-box" style="border: solid 5px #535353;  padding: 8px; border-radius: 9px; background-clip: content-box; background-color: #535353;  /*line-height: 1.5;*/ border-top-right-radius: 25px; border-top-left-radius: 25px; border-bottom-left-radius: 25px; border-bottom-right-radius:25px; ">
    <a name="form-inscrevase"></a>
    <button class="btn btn-warning btn-sm btn-close"><i class="fa fa-close fa-fw">X</i>X</button>
    <p class="text-uppercase text-light">Amplie agora o potencial da sua empresa!</p>
    <form id="addCommentForm" method="POST" class="btn-glass-hover">
      <div class="reflexo"></div>
        <div class="form-group">
            <input type="text" name="NomeCompleto" class="form-control" placeholder="Digite seu nome:" required>
        </div>
        <div class="form-group">
            <input type="email" name="Email" class="form-control" placeholder="E-mail que lê:" id="myEmail" required>
        </div>
        <div class="form-group">
            <input type="text" name="TelefoneDeContato" class="form-control" id="celular" placeholder="Telefone que atende:"  required>
        </div>

        <div class="form-row">
            <div class="form-group col-9">
                <input type="text" name="CidadFF" class="form-control" placeholder="Cidade" >
            </div>
            <div class="form-group col-3">
                <input type="text" name="UFFFF" class="form-control" placeholder="UF">
            </div>
        </div>




        <div class="form-group"> 
            <select class="form-control" id="estados" name="UF"  >
             
             
            </select>
        </div>


        <div class="form-group">
            <select class="form-control" id="cidades" name="Cidade">

            </select>
        </div>







        <div style="padding: 20px;"></div>

        <div class="form-group">
            <button id="submit" class="btn btn-hover d-block mx-aut btn-glass-hover2" aria-pressed="true" style="background-color: #26157a ;color: #fff; position: absolute; left: 10%;  width: 80%; bottom: 3%; border-radius: 10px; height: 60px; cursor: pointer;">
                <div class="reflexo2"></div>
                <span style="font-size: 1.3em; font-weight: bold" id="inscreva">Baixar Apresentação</span>
                <span id="aguarde"><i class="fa fa-spinner fa-spin fa-fw"></i>Aguarde...</span>
            </button>
        </div>
    </form>
</div>
</div>   
 -->



<!-- EFEITO DE FUNDO PARA FORMULÁRIO MOBILE -->
<div class="efeito" id="eft"></div>

<section class="container-fluid">
<!-- DOBRA 1 -->

 <!-- ONLY ON MOBILE -->
    <div class="row capa-superior" style="background-color: #464646">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-1 col-sm-12 col-md-2 col-mdd-12 col-lg-4 col-xl-2"></div>
            
        <div class="col-xs-11 col-md-10 col-lg-4 col-xl-4" style="padding: 5px 10px">
            <img src="img/dowbis.png">
        </div>
            
        <div class="col-lg-4 col-xl-4"></div>

    </div>


</section>


<div class="cntainer" style="width: 100%; color: #fbb625; background-color: #fbb625; height: 4px; padding-right: 15px !important"></div>

<section class="container-fluid">





    <div class="row capa2">
        <!-- <button style="right: 45%; top: 30%;position: fixed; font-size: 28px; border: 12px solid #fff; padding: 20px">BTN</button> --> 
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12  col-mdd-4 col-lg-3 col-xl-4" style="padding: 0">
            <img id="maos" src="img/maos.png" class="conteudo-x">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-mdd-1 col-lg-7 col-xl-1 box-1" style="text-align: right;">
            <!-- <img src="img/pdf/box-linha-01.png" style="position: relative; bottom:  0;" class="img-flui ml-5 conteudo-a d-block mx-auto left-custom" alt=""> -->
        </div>
        <!-- ONDE O FORMULÁRIO IRÁ PASSAR -->
        <div class="col-xs-12 col-sm-12 col-md-10 col-mdd-7 col-lg-2 col-xl-7">
            <div class="titulo-principal">
                <h1 style="color: #000">QUER VER A VENDA<br>DO SEU PRODUTO<br>MULTIPLICAR EM UM<br>CURTO PERÍODO DE TEMPO?</h1>
            </div>

            <div id="losango" class="losango-area">
              <span>Vendemos seu produto/serviço em qualquer canal<br>de venda e garantimos eu domínio de mercado.</span>
                <button type="button" data-toggle="modal" data-target="#contact" class="btn btn-hover d-block mx-auto btn-glass-hover" aria-pressed="true" style="background-color: #fab523 ;color: #404040; position: relative;    bottom: -6%; border-radius: 50px; cursor: pointer; width: 370px; height: 56px; top: 46px;  background-image: linear-gradient(#ffd227, #d5991d); border: 3px solid #8f5d04">
                <div class="reflexo"></div>
                <p style="font-size: 1.5em; font-weight: bold; letter-spacing: 0.1px; color: #404040" id="inscreva">VAMOS&nbspCONVERSAR?</p>
                <!-- <span id="aguarde"><i class="fa fa-spinner fa-spin fa-fw"></i> <?php echo $btnaguarde; ?></span> -->
                </button>
            </div>
            <img src="img/cifrao.png" class="cifrao">
        </div>
    </div>

    <!-- BARRA VERMELHA -->
    <!-- <div class="row barra-vermelha">
        <div class="col-xs-12 d-xl-none d-lg-none text-center botoes" style="margin: 0 auto">
            <button class="btn btn-warning btn-lg" id="btn-euquero-a">EU QUERO!</button>
        </div>

        <div class=" col-sm-12 col-mdd-12 col-lg-12 col-xl-12 mt-2 mtt-05">
            <a name="cont1"></a>
            <h2 class="text-center text-light text-uppercase f-size70" style="font-size: 42px">
                <b class="fature-xs">FATURE ALTO</b>
            </h2>
        </div>
    </div> -->

    <!-- DOBRA 2 -->
    <div class="row page02288">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-md-0 col-mdd-auto col-lg-3 col-xl-1"></div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-mdd-12 col-lg-12 col-xl-10 box-2" style="text-align: center;">
            <div class='shadow container-fluid' >
                <h2 style="padding: 40px 0 0 0; color: #464646">somos a dowbis</h2>
                <span style="color: #58595b; font-weight: 100;">Levamos muito a sério nosso trabalho com representação comercial<br>e nos doamos completamente para efetivar <strong>números estraordinários<br>de venda.</strong> Nossa missão é levar qualquer produto ou serviço ao <strong>mais<br> alto posicionamento</strong>em seu segmento de mercado.</span>
            </div>
            <div class="container-fluid icons">
                <ul style="display: inline;">

                    <li>

                            <img src="img/icon.png">
                            <p style="font-family: BBB; padding: 0px 0; color: #646464";>800m² de<br>estrutura física.</p>
            
                    </li>

                    <li>
                     
                            <img src="img/icon2.png">
                            <p style="font-family: BBB; padding: 0px 0; color: #646464";>Mais de 30 anos<br>de experiência<br>com representação<br>comercial.</p>
                       
                    </li>                    
                    <li>
                   
                            <img src="img/icon3.png">
                            <p style="font-family: BBB; padding: 0px 0; color: #646464";>Mais de<br>17 MILHÕES<br>de faturamento<br> em vendas.</p>
                       
                    </li>
                    <li>
                     
                            <img src="img/icon4.png">
                            <p style="font-family: BBB; padding: 0px 0; color: #646464";>Mais de<br>35 MIL vendas<br>para diversos<br>clientes.</p>
                      
                    </li>
                    <li>
                       
                            <img src="img/icon5.png">
                            <p style="font-family: BBB; padding: 10px 0; color: #646464";>Somamos<br>370 clientes<br>atendidos.</p>
                  
                    </li>


                </ul>
                
            </div>
        
            <img src="img/pdf/conteudo_bfdf.png" class="img-fluid ml-5 conteudo-b d-block mx-auto deskto" alt="">  
        </div>
        <div class="col-xs-12 col-sm-12 col-md-0 col-mdd-auto col-lg-3 col-xl-1"></div>
    </div>

    <!-- DOBRA 2 -->
    <!-- <div class="row page022">
        <div class="col-xs-12 col-sm-12 col-mdd-auto col-lg-3 col-xl-4"></div>
        <div class="col-xs-12 col-sm-12 col-mdd-12 col-lg-12 col-xl-12 box-2">
            <img src="img/pdf/conteudo_b.png" class="img-fluid ml-5 conteudo-b d-block mx-auto deskto" alt="">  
        </div>
    </div> -->


    <!-- DOBRA 3 -->
    <div class="row page033">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-mdd-1 col-lg-12 col-xl-1"></div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-mdd-5 col-lg-12 col-xl-5" style="text-align: center;">
                <div style="padding: 38px 0">
                    <img src="img/iconex1.png">
                    <h2 style="color: #464646">RESULTADOS RÁPIDOS<br>E MENSURÁVEIS</h2>
                    <p style="color: #464646" id="lay">Somos precisos em nossa busca por <strong>resultados<br>expressivos em curto prazo</strong> e constantes. tenha<br>a certeza: nós sabemos <strong>onde</strong> seu público está e<br> como vender pra ele. Temos uma lista extensa<br> de clientes com crescimento <strong>COMPROVADO.</strong><br>E atingimos clientes que tiveram contato com<br>sua concorrência.<br><br><strong>Iremos te acompanhar em todo o processo de<br> venda da sua empresa. Temos uma equipe de<br> vendas treinada e qualificada por profissionais<br> de alto escalão.<br><br>Nossa metodologia é indiscutivelmente precisa.</strong></p>
                </div>
                 <!-- <img src="img/pdf/conteudo_c.png" class="img-fluid ml-50 conteudo-c d-block mx-auto" alt=""> -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-mdd-5 col-lg-12 col-xl-5" style="text-align: center;">
                <div style="padding: 38px 0">
                    <img src="img/iconex2.png">
                    <div id="topPosition">
                        <h2 style="color: #464646;padding: 5% 0 0 0">CANAIS DE VENDAS</h2>
                        <p style="color: #464646; " id="lay">Atuamos através de diversos<br>canais de venda. São alguns<br>deles: Porta à porta, PDV´s<br>(pontos de venda), feiras,<br>marketing direto, televenda<br>e <strong>vários outros.</strong><br><br>Não tenha dúvidas, sabemos<br>qual é o segredo para a atração<br>de novas oportunidades para<br>seu negócio.</p>
                    </div>
                </div>
      
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-mdd-1 col-lg-3 col-xl-1"></div>
    </div>





    <!-- DOBRA 3 -->
    <!-- <div class="row page033">
        <div class="col-xs-12 col-sm-12 col-mdd-3 col-lg-12 col-xl-2"></div>
            <div class="col-xs-12 col-sm-12 col-mdd-4 col-lg-12 col-xl-8">
                 <img src="img/pdf/conteudo_c.png" class="img-fluid ml-50 conteudo-c d-block mx-auto" alt="">
            </div>
        <div class="col-xs-12 col-sm-12 col-mdd-5 col-lg-3 col-xl-2"></div>
    </div> -->

    <!-- DOBRA 2 -->
    <!-- <div class="row page022">
        <div class="col-xs-12 col-sm-12 col-mdd-auto col-lg-3 col-xl-4"></div>
        <div class="col-xs-12 col-sm-12 col-mdd-12 col-lg-12 col-xl-12 box-2">
            <img src="img/pdf/conteudo_d.png" class="img-fluid ml-5 conteuo-b d-block mx-auto deskto" alt="">
        </div>   
    </div> -->

    <!-- DOBRA 4 -->
    <!-- <div class="row page044">
        <div class="col-xs-12 col-sm-12 col-mdd-3 col-lg-12 col-xl-2"></div>
        <div class="col-xs-12 col-sm-12 col-mdd-4 col-lg-12 col-xl-6">
           <img  src="img/pdf/conteudo_e.png" class="img-fluid ml-5  d-block mx-auto" alt="">  
        </div>
        <div class="col-xs-12 col-sm-12 col-mdd-5 col-lg-3 col-xl-4"></div>
    </div> -->


    <!-- LAST -->
    <div class="row pageLast">
        <div class="col-xs-12 col-sm-12 col-mdd-auto col-lg-3 col-xl-1"></div>
            <div class="col-xs-12 col-sm-12 col-mdd-12 col-lg-12 col-xl-10 box-2">
                <div class='shado container-fluid' style="text-align: center;" >
                    <h2 style="padding: 35px 0 0 0; color: #FFF">não sabe onde encontrar<br>seus clientes potenciais?</h2>
                    <p style="color: #fff; font-weight: 100;  font-size: 16px">Nós temos a solução que você precisa. Atraímos pessoas que realmente<br>têm interesse em comprar seus produtos e as tornamos fiéis e defensoras<br>de sua empresa.<br><br>Somos especialistas também em <strong>Marketing Digital</strong>. Assim oferecemos<br> uma solução completa para suas vendas, desde a captação de leads<br> (clientes potenciais) e qualificação dos mesmos até a venda de fato<br> e fidelização do cliente.</p>

         
                        <button type="button" data-toggle="modal" data-target="#contact" class="btn btn-hover d-block mx-auto btn-glass-hover" aria-pressed="true" class="btn btn-hover d-block mx-auto btn-glass-hover" style="background-color: #fab523 ;color: #404040; position: relative; bottom: -6%; border-radius: 50px; cursor: pointer; width: 360px; height: 49px; background-image: linear-gradient(#ffd227, #d5991d); border: 3px solid #8f5d04;">
                        <div class="reflexo"></div>
                        <p style="font-size: 1.2em; font-weight: bold; letter-spacing: 0.1px; color: #404040;" id="inscreva">FALE&nbspCOM UM CONSULTOR</p>
                        <!-- <span id="aguarde"><i class="fa fa-spinner fa-spin fa-fw"></i> <?php /* echo $btnaguarde; */ ?></span> -->
                        </button>
                  
                    <div style="padding: 20px 0"></div>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-mdd-auto col-lg-3 col-xl-1"></div>
    </div>




   
    

</section>


























<!-- LP -->

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>
<script src="js/jquery.maskedinput.js"></script>
<script>
    jQuery(function ($) {
        $("#cpf").mask("999.999.999-99");
        $("#fixo").mask("(99)9999-9999?9");
        $("#celular").mask("(99)9999-9999?9");
    });

    $("#btn-euquero-a, #btn-euquero-b").click(function () {
        $("#form-box").show();
    });

    $(".btn-close").click(function () {
        $("#form-box").hide();
    });

    $("#aguarde").hide();
    $('form').submit(function (e) {

        var form = $(this);
        var vemail = $("#myEmail").val();
        var delay = 100;
        $("#submit").attr("disabled", "disabled");
        $("#aguarde").show();
        $("#inscreva").hide();
        $.ajax({
            url: "formulario.php",
            type: "POST",
            data: $("#addCommentForm").serializeArray(),
            async: true,
            success: function (html) {
                setTimeout(function () {
                    if (html == 1) {
                        // document.location = 'PoloAlfa.php?e=' + vemail;
                        // document.location = 'obrigado.php';
                    }
                }, delay);
            }
        });
        return false;
    });
</script>





<!-- <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script> -->



<script type="text/javascript">
    
// JS REFLEXO
$(document).ready(function(){
    setInterval(function(){
        $(".reflexo").animate({
            left:510,
            opacity: 0.7
        }, 4900);
        setTimeout(function(){
            $(".reflexo").css({left:-520,opacity:0.7});
        },5000);
    },7000);
});


// JS REFLEXO
$(document).ready(function(){
    setInterval(function(){
        $(".reflexo2").animate({
            left:480,
            opacity: 0.4
        }, 600);
        setTimeout(function(){
            $(".reflexo2").css({left:-50,opacity:0});
        },500);

    },2000);
});





/* EFEITO MOBILE FORMULÁRIO */
$(".efeito").hide();
$("#btn-formulario-a,#btn-euquero-a").click(function () {
    $("#form-box").show();
    $(".efeito").show();
});



$(".btn-close").click(function () {
    $("#form-box").hide();
    $(".efeito").hide();

    $('html, body').animate({
        scrollTop: $("body").offset().top
    }, 1000);
});

$("#eft").click(function () {
    $("#form-box").hide();
    $(".efeito").hide();
});





</script>




<script type="text/javascript">
      $(document).ready(function(){
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
});

// Check length of name field
function checkNameLength() {
  if($(this).val().length < 1) {
        $('#nameresult').addClass("has-danger");
        $('#nameresult').removeClass("has-success");
  } else {
        $('#nameresult').addClass("has-success");
        $('#nameresult').removeClass("has-danger");
  }
}

function checkEmailLength() {
  if($(this).val().length < 1) {
        validateEmail(this);
  }
}

// Check length of message field
function checkMessageLength() {
  if($(this).val().length < 1) {
        $('#messageresult').addClass("has-danger");
        $('#messageresult').removeClass("has-success");
  } else {
        $('#messageresult').addClass("has-success");
        $('#messageresult').removeClass("has-danger");
  }
}

// Check if user's email is valid
function validateEmail(email) {
   var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
   if(emailReg.test(email)) {
     $('#emailresult').addClass("has-success");
         $('#emailresult').removeClass("has-danger");
   } else {
         $('#emailresult').removeClass("has-success");
         $('#emailresult').addClass("has-danger");
   }
}

// Check if the error messages are visible or hidden
function checkIfHidden() {
    return $("#nameresult").hasClass('has-success') && $("#messageresult").hasClass('has-success')
    && $("#emailresult").hasClass('has-success');
}

// Function to check the state of the submit button
function enableSubmitEvent() {
    $('#submit').prop('disabled', !checkIfHidden());
}

// Call to validate email function
$('#email').keyup(function(){
    validateEmail($('#email').val());
  });

$('#email').focus(function(){
      validateEmail($('#email').val());
    });

// length calls
$('#name').keyup(checkNameLength);
$('#name').focus(checkNameLength);
$('#message').keyup(checkMessageLength);
$('#message').focus(checkMessageLength);
$('#email').keyup(checkEmailLength);
$('#email').focus(checkEmailLength);

// Calls to state of the submit button
$('#name').keyup(enableSubmitEvent);
$('#email').keyup(enableSubmitEvent);
$('#message').keyup(enableSubmitEvent);
</script>
<script type="text/javascript" src="js/modalScript"></script>





</body>
</html>