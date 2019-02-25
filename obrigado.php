<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
	<title>Obrigado!</title>
	<meta name="description" content="Se você tem uma escola de cursos livres, aumente o seu portifólio. Oportunidade única!"/>
    <meta name="keywords" content="franquia de faculdade, franquia inovadora, polo, franquia de educação, franquia de educação superior, pós-graduação ,franquia brasil, abrir uma franquia, franquia barata"/>
    <meta name="robots" content="index,follow"/>
    <meta name="googlebot" content="index,follow"/>
    <meta name="distribution" content="global"/>
    <meta name="rating" content="General"/>
    <meta name="language" content="pt-br"/>
    <meta name="url" content="www.faculdadealfa.edu.br/seja-polo"/>
    <meta name="doc-class" content="completed"/>
    <meta name="doc-rights" content="public"/>
    <meta name="autor" content="Faculdade Alfa"/>
    <meta name="company" content="Faculdade Alfa">
    <meta name="revisit-after" content="1"/>
    <link rev="made" href="mailto:gc@dowbis.com.br"/>
    <link rel='canonical' href='https://faculdadealfamerica.edu.br/seja-polo'/>
	<script src="https://use.fontawesome.com/22d13e1819.js"></script>

	<!-- Bootstrap -->
	<link href="tkp-css/bootstrap.min.css" rel="stylesheet">
	<link href="tkp-css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="tkp-css/normalize.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,500i" rel="stylesheet">

	<!-- Máscaras-->
	<!-- <script src="js/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.maskedinput.js" type="text/javascript"></script> -->

</head>

<body class="fundo-desktop">


		<header>
			<div class="logo">
				<img src="img/logo.png" title="Faculdade Machado de Assis" class="img-responsive">
			</div>
		</header>
		<div>
			<div class="box-obg col-md-12">
			<center>
				<img src="images/typ1_chamada.png" title="Faculdade Machado de Assis" class="img-responsive">
			<center>
				<!-- <div class="form centered col-xs-12">
					<div class="">
						A <strong>FAMA</strong> agradece pela sua inscrição! Em breve nossos consultores irão entrar em contato.
					</div>
					
				</div> -->
				<br>
				<div class="centered hidden-desktop col-xs-10">
					
				</div>
			</div>
		</div>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>



    <script type="text/javascript">
        var trackcmp_email = '<?php echo $_SESSION['emailac'];?>';
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

    <?php unset($_SESSION['emailac']) ;?>
</body>
</html>