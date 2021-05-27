<?php
require_once '../dbtest.php';

$me = $_POST['me'];
$pass = $_POST['pass'];


//中々データが取れなかったのはデータベース接続ができていなかったのが原因
//確認方法が必要
try {
    //DB接続
    $pdo = new PDO('mysql:dbname=login;host=localhost;', 'kawakawa', 'kawa');
    //sqlを実行する準備
    $stmt = $pdo->prepare("INSERT INTO test VALUES (null, :me, :pass)");

    //インジェクションたいさく
    $stmt -> bindValue(':me', $me);
    //パスワードをハッシュ化する
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $stmt -> bindValue(':pass', $pass);
    //sql実行
    $stmt -> execute();
}catch(PDOException $e){
    echo $e -> getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ユーザー登録完了画面</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../Uikit-3.6.22/css/uikit.min.css" />
        <script src="../../Uikit-3.6.22/js/uikit.min.js"></script>
        <script src="../../Uikit-3.6.22/js/uikit-icons.min.js"></script>
    </head>
    <body>
        <div class="uk-container">
                <h1 class="uk-heading-line uk-text-center"><span>ユーザー登録完了</span></h1>
                <div class="uk-flex uk-flex-center">
                    <ul class="uk-breadcrumb">
                        <li><a href="/php/login/test/view/index.php">ユーザー一覧</a></li>
                    </ul>
                </div>
                <div class="uk-margin uk-form-width-medium uk-container" >
                    <p><?php echo $me ?> さん、ありがとうございます！</p>
                </div>
                <div class="uk-flex uk-flex-center">
                    <a href="add.php">ユーザー新規登録</a>
                </div>
            </div>        
    </body>
</html>

