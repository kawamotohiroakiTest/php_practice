<?php
require_once 'db/db_sql.php';

$blog_title = $_POST['title'];
$blog_content = $_POST['content'];

$db_sql = new Db_sql();
$db_sql->data_edit($blog_title, $blog_content);
?>