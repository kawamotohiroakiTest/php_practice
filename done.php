<?php
require_once 'db/db_sql.php';

$blog_title = $_POST['title'];
$blog_content = $_POST['content'];

data_insert($blog_title, $blog_content);
?>