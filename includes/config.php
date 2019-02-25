<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
unset($_SESSION['emailEnviado']);
$_SESSION['emailEnviado'] = true;

require_once("conexao.php"); //CONEXÃO COM A BASE DE DADOS

// require_once("ac/ActiveCampaign.class.php"); //BIBLIOTECA ACTIVE CAMPAIGN

$universidade = 9; //FACULDADE
$campanha = 34; //CAMPANHA

//SELECIONA A CAMPANHA E CRIA AS CONFIGURAÇÕES PARA AUTOMAÇÃO
$sqlcamp = "SELECT * FROM campanha WHERE id_campanha = " . $campanha;
$resultcamp = mysqli_query($sqlconex, $sqlcamp);
$rowscamp = $resultcamp->fetch_assoc();
$status = $rowscamp['campanha_status'];

//SELECIONA A UNIVERSIDADE (FACULDADE) E CRIA AS CONFIGURAÇÕES PARA AUTOMAÇÃO
$sqlun = "SELECT * FROM instituicao WHERE id_instituicao = " . $universidade;
$resultun = mysqli_query($sqlconex, $sqlun);
$rowsun = $resultun->fetch_assoc();