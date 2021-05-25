<?php
require_once '../dbtest.php';
?>

<h3>ユーザー登録</h3>
<form action="add_done.php" method="POST">
    <p>名前<input type="text" name="me"></p>
    <p>パスワード<input type="password" name="pass"></p>
    <input type="submit" value="送信">
</form>


<a href="index.php">戻る</a>