<h1>ブログ一覧</h1>

<?php
require_once 'db/db_sql.php';


//変数に入れるのを忘れない
$result = data_display();
?>

<?php foreach($result as $row): ?>
<p><?php echo $row['id'].$row['title'].$row['content']; ?></p>
<p><a href="./blog_detail.php?id= <?php echo $row['id']; ?>" >詳細</a></p>
<p><a href="./blog_edit.php?id= <?php echo $row['id']; ?>" >編集</a></p>
<p><a href="./blog_delete.php?id= <?php echo $row['id']; ?>" >削除</a></p>
<?php endforeach; ?>



<h3><a href="blog_add.php">新規登録</a></h3>


