<?php


// 残り機能
// ユーザー名またはメールアドレスとパスワードの組み合わせにする
// セッションに渡す
//詳細、編集、削除

require_once '../dbtest.php';

if (isset($_POST['login'])) {
    echo 'ログイン結果';
    echo '<br>';

    $me = $_POST['me'];
    // $pass = $_POST['pass'];

    try {
        $pdo = new PDO('mysql:dbname=login;host=localhost;','kawakawa', 'kawa');
        $stmt = $pdo->prepare("SELECT id, me, pass FROM test WHERE me = :me");
        $stmt->bindValue(':me', $me);
        $stmt->execute();
        //実行結果を配列で取得
        $member = $stmt->fetch(PDO::FETCH_ASSOC);

        $me = $_POST['me'];
        $pass = $_POST['pass'];

        //フォームに入力したパスワードとDBのパスワードを比較する
        if(password_verify($pass, $member['pass'])) {
            echo 'ようこそ'.$me.'さん';
        } else {
            echo 'ログインできませんでした';
        }
    } catch (EOPException $e){
        echo $e -> getMessage();
        exit();
    }
}



?>
<!DOCTYPE html>
<html>
    <head>
        <title>ユーザー新規登録</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../Uikit-3.6.22/css/uikit.min.css" />
        <script src="../../Uikit-3.6.22/js/uikit.min.js"></script>
        <script src="../../Uikit-3.6.22/js/uikit-icons.min.js"></script>
    </head>
    <body>
        <div class="uk-container">
            <h1 class="uk-heading-line uk-text-center"><span>ユーザー画面</span></h1>
            <div class="uk-margin uk-form-width-medium uk-container uk-text-center" >
                <button class="uk-button uk-button-default">
                    <a href="add.php">ユーザー新規登録</a>
                </button>
            </div>
            <div class="uk-margin uk-form-width-medium uk-container uk-text-center" >
                <button class="uk-button uk-button-default">
                    <a href="login.php">ログイン</a>
                </button>
            </div>
        </div>

    </body>
</html>
