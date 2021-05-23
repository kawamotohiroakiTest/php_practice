<?php
require_once 'db/db_sql.php';
?>

<form action='blog_add_done.php' method='POST'>
    <p>ブログタイトル<input type='text' name='title' size='191'></p>
    <p>投稿内容<input type='text' name='content' size='5000'></p>
    <input type='submit' value='送信'><input type='reset' value='リセット'>
</form>