<?php
require_once 'db_info.php';

$db_host = DB_HOST;
$db_name = DB_NAME;
$db_user = DB_USER;
$db_pass = DB_PASS;

$dsn = 'mysql:dbname='.$db_name.';host='.$db_host;
$user = $db_user;
$pass = $db_pass;

try {
    $dbh = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]); 
    echo '接続成功';
} catch(PODException $e) {
    echo '失敗しました'. $e->getMessage();
    exit();
}






?>