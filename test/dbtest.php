<?php
require_once 'dbinfo.php';

$data = DB_NAME;
$user = DB_USER;
$pass = DB_PASS;  
try {
    //Mysqlへの接続
    $dbh = new PDO('mysql:host=localhost;database='.$data, $user, $pass);
    global $dbh;
} catch(PDOException $e){
    print "エラーです".$e->getMessage()."<br/>";
    die();
}


class Db {
    //DB情報
    public static function db_connect(){
        $data = DB_NAME;
        $user = DB_USER;
        $pass = DB_PASS;    
        try {
            //Mysqlへの接続
            $dbh = new PDO('mysql:host=localhost;database=l'.$data, $user, $pass);
            global $dbh;
        } catch(PDOException $e){
            print "エラーです".$e->getMessage()."<br/>";
            die();
        }
    }
}


?>