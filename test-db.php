<?php
require_once __DIR__ . '/vendor/autoload.php';

// REMEMBER TO: composer require vlucas/phpdotenv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();

$host = $_SERVER['DBHOST'];
$dbname = $_SERVER['DBNAME'];
$dbuser = $_SERVER['DBUSER'];
$dbpass = $_SERVER['DBPASS'];

$conn = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
// echo json_encode($_SERVER);
// echo 'connected to db';

?>