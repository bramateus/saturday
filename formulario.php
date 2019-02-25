<?php
// session_start();
ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
require "includes/conexao.php";
require "includes/config.php";
require "phpmailer/PHPMailerAutoload.php";
require "ac/ActiveCampaign.class.php";
 echo "1";

// $universidade = 9;
// $campanha = 34;

// $sqlun = "SELECT * FROM landingpage_university WHERE lpun_id = " . $universidade;
// $resultun = $PDO->query($sqlun);
// $rowsun = $resultun->fetch(PDO::FETCH_ASSOC);

// $sqlcamp = "SELECT * FROM landingpage_campaign WHERE lpc_id = " . $campanha;
// $resultcamp = $PDO->query($sqlcamp);
// $rowscamp = $resultcamp->fetch(PDO::FETCH_ASSOC);

// if ($_SESSION['emailEnviado']) {
//     $lpu_lpc_id = "Seja-Polo";
//     $lpu_nome = $_REQUEST['NomeCompleto'];
//     $lpu_email = $_REQUEST['Email'];
//     $lpu_celular = $_REQUEST['TelefoneDeContato'];
//     $lpu_cidade = $_REQUEST['Cidade'];
//     $lpu_estado = $_REQUEST['UF'];
//     $lpu_data_cadastro = gmdate("Y-m-d H:i:s", time() + 3600 * (-3 + date("I")));

//     $checaemail = explode("@", $lpu_email);
//     if ($checaemail[1] != "teste.com") {
        // $sql = "INSERT INTO landingpage_users(lpu_lpc_id, lpu_nome, lpu_email, lpu_celular, lpu_cidade, lpu_estado, lpu_data_cadastro) VALUES (:lpu_lpc_id, :lpu_nome, :lpu_email, :lpu_celular, :lpu_cidade, :lpu_estado, :lpu_data_cadastro)";

        // $stmt = $PDO->prepare($sql);
        // $stmt->bindParam(':lpu_lpc_id', $lpu_lpc_id, PDO::PARAM_INT);
        // $stmt->bindParam(':lpu_nome', $lpu_nome, PDO::PARAM_STR);
        // $stmt->bindParam(':lpu_email', $lpu_email, PDO::PARAM_STR);
        // $stmt->bindParam(':lpu_celular', $lpu_celular, PDO::PARAM_STR);
        // $stmt->bindParam(':lpu_cidade', $lpu_cidade, PDO::PARAM_STR);
        // $stmt->bindParam(':lpu_estado', $lpu_estado, PDO::PARAM_STR);
        // $stmt->bindParam(':lpu_data_cadastro', $lpu_data_cadastro, PDO::PARAM_STR);
        // $result = $stmt->execute();
        //ENVIO DE E-MAILS
// if ($_SESSION['emailEnviado']) {
//     $checaemail = explode("@", $_REQUEST["Email"]);
//     if ($checaemail[1] != "teste.com" || $checaemail[1] != "dowbis.com.br" || $checaemail[1] != "gamartins.com.br") {
//         $now       = gmdate("Y-m-d H:i:s", time() + 3600 * (-3 + date("I")));
//         $sql = "INSERT INTO matricula (
//                   matricula_instituicao,
//                   matricula_codigo,
//                   matricula_nome,
//                   matricula_email,
//                   matricula_celular,
//                   matricula_cidade,
//                   matricula_bairro,
//                   matricula_tipo,
//                   matricula_dataCadastro
//               ) VALUES (
//                   '{$universidade}',
//                   '{$campanha}',
//                   '{$_REQUEST['NomeCompleto']}',
//                   '{$_REQUEST['Email']}',
//                   '{$_REQUEST['TelefoneDeContato']}',
//                   '{$_REQUEST['Cidade']}',
//                   '{$_REQUEST['UF']}',
//                   'lp',
//                   '{$now}'
//               )";


//         if (mysqli_query($sqlconex, $sql)) {
//             //echo "New record created successfully";
//             $lastid = mysqli_insert_id($sqlconex);
//         } else {
//             echo "Error: " . $sql . "<br>" . mysqli_error($sqlconex);
//         }
//     }

  
// }
        // if (!$result) {
        //     var_dump($stmt->errorInfo());
        // }


        var_dump($_POST);

        print_r($_POST['name']);
        print_r($_POST['email']);

         $arr = $_POST;
         print_r($arr);

        // $message = "<ul style='margin: 0; padding: 0; list-style: none;'>";
        // $message .= "<li style='margin-bottom: 7px; font-size: 16px;'><strong> Nome completo: </strong>" . $lpu_nome . "</li>";
        // $message .= "<li style='margin-bottom: 7px; font-size: 16px;'><strong> Email: </strong>" . $lpu_email . "</li>";
        // $message .= "<li style='margin-bottom: 7px; font-size: 16px;'><strong> Telefone de contato:  </strong>" . $lpu_celular . "</li>";
        // $message .= "<li style='margin-bottom: 7px; font-size: 16px;'><strong> Cidade: </strong>" . $lpu_cidade . "</li>";
        // $message .= "<li style='margin-bottom: 7px; font-size: 16px;'><strong> UF: </strong>" . $lpu_estado . "</li>";

        // $message .= "</ul><br>";
        // $message .= "<a href=".$rowsun['instituicao_link'] . "/" . $rowscamp['campanha_url']." target='_blank'><img src='" . $rowsun['instituicao_link'] . "/" . $rowscamp['campanha_url'] . "/img/logo-email.png' alt='" . $rowsun['instituicao_titulo'] . " - " . $rowscamp['campanha_titulo'] . "'></a>";

        // $mail = new PHPMailer;
        // $mail->CharSet = "UTF-8";
        // $mail->isSMTP();
        // $mail->Host = 'smtp.gmail.com';
        // $mail->SMTPAuth = true;
        // $mail->Username = 'atendimento@grupoandrademartins.com.br';
        // $mail->Password = 'ZqmnH0AVKp';
        // $mail->SMTPSecure = 'tls';
        // $mail->Port = 587;

        // $mail->isHTML(true);
        // $mail->Subject = $rowscamp['campanha_titulo'] . " - " . $rowsun['instituicao_titulo'];
        // $mail->setFrom('atendimento@grupoandrademartins.com.br', $rowsun['instituicao_titulo']);


        // $mail->addAddress('web02@dowbis.com.br');

        // $mail->addCC('gc@dowbis.com.br');
        // $mail->addCC('web05@dowbis.com.br');
        // $mail->addCC('web02@dowbis.com.br');

        // $mail->MsgHTML($message);
        // $mail->Body = $message;
        // $mail->AltBody = $message;

        // if ($mail->send()) {
        //     echo "CAIU NO IF";
        //     sleep(10);
        //     $mail->ClearAllRecipients();
        // }

        //---------------------------------- CLIENTE ----------------------------------//
        // $message = "<p style='font-size: 18px;'><strong>PARABÉNS POR SUA DECISÃO!</strong><br>Em breve um especialista da nossa equipe entrará em contato com você.</p>";
        // $message .= "<p style='font-size: 16px;'>Enquanto isso, você pode <a href='https://faculdadealfamerica.edu.br/seja-polo/PoloAlfaEmail.pdf' target='_blank'>clicar nesse link</a> caso queira acessar novamente o material que acessou após sua inscrição.<br>Sucesso!</p>";
        // $message .= "<p style='font-size: 18px;'><strong>TE DESEJAMOS SUCESSO!</strong></p>";
        // $message .= "<p style='font-size: 16px;'>Atenciosamente,</p>";
        // $message .= "<a href=".$rowsun['instituicao_link'] . "/" . $rowscamp['campanha_url']." target='_blank'><img src='" . $rowsun['instituicao_link'] . "/" . $rowscamp['campanha_url'] . "/img/logo-email.png' alt='" . $rowsun['instituicao_titulo'] . " - " . $rowscamp['campanha_titulo'] . "'></a>";

        // $mail->addAddress($_POST['Email'], $_POST['NomeCompleto']);

        // $mail->MsgHTML($message);
        // $mail->Body = $message;
        // $mail->AltBody = $message;

        // if (!$mail->send()) {
        //     sleep(10);
        //     $mail->ClearAllRecipients();
        // }
//     }
// }

$url = 'https://grupoandrademartins.api-us1.commmmmmmmmmmm/';
$params = array(
    'api_key'    => '38536f92aa5f18e16ae4371dfd838cf5589e56cad61b447fccc003812e7e482e2011eb2a',
    // 'api_action' => 'contact_add',
    'api_action' => 'contact_sync',
    'api_output' => 'serialize',
);

$post = array(
    'first_name' => $_REQUEST["NomeCompleto"],
    'email'      => $_POST["Email"],
    'field[3]'   => $_REQUEST['TelefoneDeContato'],
    'field[4]'   => $_REQUEST['Cidade'],
    'field[14]'  => $_REQUEST['UF'],
    'form'       => 43,
);

$query = "";
foreach ($params as $key => $value) $query .= urlencode($key) . '=' . urlencode($value) . '&';
$query = rtrim($query, '& ');

// This section takes the input data and converts it to the proper format
$data = "";
foreach ($post as $key => $value) $data .= urlencode($key) . '=' . urlencode($value) . '&';
$data = rtrim($data, '& ');
$url = rtrim($url, '/ '); // clean up the url

// This sample code uses the CURL library for php to establish a connection,
// submit your request, and show (print out) the response.
if (!function_exists('curl_init')) die('CURL not supported. (introduced in PHP 4.0.2)');

// If JSON is used, check if json_decode is present (PHP 5.2.0+)
if ($params['api_output'] == 'json' && !function_exists('json_decode')) {
    die('JSON not supported. (introduced in PHP 5.2.0)');
}

$api = $url . '/admin/api.php?' . $query; // define a final API request - GET

$request = curl_init($api); // initiate curl object
curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
curl_setopt($request, CURLOPT_POSTFIELDS, $data); // use HTTP POST to send form data
curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);

$response = (string)curl_exec($request); // execute curl post and store results in $response

curl_close($request); // close curl object

if (!$response) {
    die('Nothing was returned. Do you have a connection to Email Marketing server?');
}
$result = unserialize($response);

// print_r($result);
echo "1";

header('Location: obrigado.php');