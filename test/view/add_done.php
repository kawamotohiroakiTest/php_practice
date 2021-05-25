<?php
require_once '../dbtest.php';

$me = $_POST['me'];
$pass = $_POST['pass'];

try {
    //DB接続
    $pdo = new PDO('mysql:dbname=login;host=localhost;', 'kawakawa', 'kawa');
    //sqlを実行する準備
    $stmt = $pdo->prepare("INSERT INTO test VALUES (null, :me, :pass)");

    //インジェクションたいさく
    $stmt -> bindValue(':me', $me);
    //パスワードをハッシュ化する
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $a = $stmt -> bindValue(':pass', $pass);
    //sql実行
    $stmt -> execute();
    //取得結果を返す（任意）
    $result = $stmt -> fetch();
    //何も入ってない
    var_dump($result);
}catch(PDOException $e){
    echo $e -> getMessage();
    exit();
}


// try {
//     //DB接続
//     $pdo = new PDO('mysql:dbname=login;host=localhost;', 'kawakawa', 'kawa');
//     //sqlを実行する準備
//     $stmt = $pdo->prepare("INSERT INTO test VALUES (null, :me)");
//     //sql実行
//     $a = $stmt -> bindValue(':me', $me);
//     $stmt -> execute();
//     //取得結果を返す（任意）
//     $result = $stmt -> fetch();
//     //何も入ってない
//     var_dump($result);
// }catch(PDOException $e){
//     echo $e -> getMessage();
//     exit();
// }


// try {
//     //DB接続
//     $pdo = new PDO('mysql:dbname=login;host=localhost;', 'kawakawa', 'kawa');
//     //sqlを実行する準備
//     $stmt = $pdo->prepare("INSERT INTO test VALUES (null, :me)");
//     //sql実行
//     $a = $stmt -> bindValue(':me', 10);
//     $stmt -> execute();
//     //取得結果を返す（任意）
//     $result = $stmt -> fetch();
//     //何も入ってない
//     var_dump($result);
// }catch(PDOException $e){
//     echo $e -> getMessage();
//     exit();
// }


// try {
//     //DB接続
//     $pdo = new PDO('mysql:dbname=login;host=localhost;', 'kawakawa', 'kawa');
//     //sqlを実行する準備
//     //idはnullを入れる必要がある、オートインクリメントでも
//     $stmt = $pdo->prepare("INSERT INTO test VALUES (null, 7)");
//     //sql実行
//     $stmt -> execute();
//     //取得結果を返す（任意）
//     $result = $stmt -> fetch();
//     //何も入ってない
//     var_dump($result);
// }catch(PDOException $e){
//     echo $e -> getMessage();
//     exit();
// }


// //動いたコード
// try {
//     //DB接続
//     $pdo = new PDO('mysql:dbname=login;host=localhost;', 'kawakawa', 'kawa');
//     //sqlを実行する準備
//     $stmt = $pdo->prepare("INSERT INTO test VALUES (7)");
//     //sql実行
//     $stmt -> execute();
//     //取得結果を返す（任意）
//     $result = $stmt -> fetch();
//     //何も入ってない
//     var_dump($result);
// }catch(PDOException $e){
//     echo $e -> getMessage();
//     exit();
// }

 
// // 挿入する値は空のまま、SQL実行の準備をする
// $stmt = $dbh->prepare($sql);
 
// // 挿入する値を配列に格納する
// $params = array(':title' => '綾瀬', ':mail' => 'kuso', ':pass' => 'うううう');
 
// // 挿入する値が入った変数をexecuteにセットしてSQLを実行
// $aho = $stmt->execute($params);
//  var_dump($aho);
// // 登録完了のメッセージ
// echo '登録完了しました';



?>