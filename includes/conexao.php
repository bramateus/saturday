<?php
ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
define( 'MYSQL_HOST', 'localhost' );
define( 'MYSQL_USER', 'root' );
define( 'MYSQL_PASSWORD', '' );
define( 'MYSQL_DB_NAME', 'synapselabs_db' );

// define( 'MYSQL_HOST', 'mysql857.umbler.com' );
// define( 'MYSQL_PORT', '41890' );
// define( 'MYSQL_USER', 'camp_report_user' );
// define( 'MYSQL_PASSWORD', 'Ukre19#3' );
// define( 'MYSQL_DB_NAME', 'camp_report' );

// define( 'MYSQL_HOST', 'pleskdb.cxt9ad1y00cb.us-east-1.rds.amazonaws.com' );
// define( 'MYSQL_USER', 'synapselabs_user' );
// define( 'MYSQL_PASSWORD', 'pUji9&07' );
// define( 'MYSQL_DB_NAME', 'synapselabs_db' );
// $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';port=3306;dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
$sqlconex = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB_NAME);
mysqli_set_charset ($sqlconex, 'utf8');