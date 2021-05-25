<?php
// require_once 'db_connect.php';
require_once 'db_info.php';


function db_connect() {
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
        return $dbh;
        echo '接続成功';
    } catch(PODException $e) {
        echo '失敗しました'. $e->getMessage();
        exit();
    }
}

class User_new {
    /**ユーザー登録
     * @param array $user_data
     * @terurn bool result
     * */ 
    public static function user_registration($user_data) {

        //トランザクション失敗判定用に予めfalaseにしておく
        $result = false;

var_dump($user_data);
        $user_name = $user_data['name'];
        $user_email = $user_data['email'];
        $user_password = $user_data['pass'];

        //SQLインジェクション対策
        $sql = "INSERT INTO general_user
        VALUES($user_name, $user_email, $user_password)";

        //ユーザーのデータを配列に入れる
        // $arr = [];
        // $arr[] = $user_data['username'];
        // $arr[] = $user_data['email'];
        // $arr[] = $user_data['password'];

        //DB登録時は必ずトランザクションする
        try {
            $stmt = db_connect()->query($sql);
            $result = $stmt->execute($arr);
            return $result;
        } catch(\Exception $e) {
            return $result;
        }


    }

}
?>