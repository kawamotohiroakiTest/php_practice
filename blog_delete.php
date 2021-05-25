<?php
require_once 'db/db_sql.php';

$blog_detail_id = $_GET['id'];

$detail_data = data_delete($blog_detail_id);

echo"削除しました";
?>
<br>
<a href="./blog_main.php">戻る</a>

