<?php

require_once 'User_new.php';
$err = [];

//usernameがPOSTで受け取られているか確認、入ってないとfalseを返す
if(!$username = filter_input(INPUT_POST, 'name')) {
    array_push($err, 'ユーザー名を入れてください');
}

if(!$email = filter_input(INPUT_POST, 'email')) {
    array_push($err, 'メールアドレスを入れてください');
}

if(!$password = filter_input(INPUT_POST, 'pass')) {
    array_push($err, 'パスワードを入れてください');
}
if(!preg_match("/\A[a-z\d]{8,100}+\z/i", $password)) {
    array_push($err, 'パスワードは英数字の８文字以上にしてください');
}
if(!$password_verification = filter_input(INPUT_POST, 'password_verification')) {
    array_push($err, '確認用パスワードを入れてください');
}
if($password !== $password_verification) {
    array_push($err, '確認用パスワードと異なっています');
}

//エラーの数が０なら中の処理に移る
if(count($err) === 0) {
    $has_created = User_new::user_registration($_POST);

    if(!$has_created) {
        array_push($err, '登録に失敗しました');
    }
}

?>
<?php
//エラーの中身を出す
if(count($err) > 0) {
    foreach($err as $e):
        echo $e;
    ?>
        <br>
    <?php endforeach; ?>
<?php
} else {
?>
<h1>登録完了</h1>
<?php
}
?>

<a href="./signup.php">戻る</a>