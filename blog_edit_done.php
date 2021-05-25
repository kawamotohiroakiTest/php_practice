<?php
require_once 'db/db_sql.php';

$blog_id = $_POST['id'];
$blog_title = $_POST['title'];
$blog_content = $_POST['content'];


data_edit($blog_id, $blog_title, $blog_content);
echo"編集しました";
?>
<br>
<a href="./blog_main.php">戻る</a>
