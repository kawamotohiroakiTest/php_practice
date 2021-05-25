<?php
require_once 'db/db_sql.php';

$blog_detail_id = $_GET['id'];

$detail_data = data_detail($blog_detail_id);
?>

<?php foreach($detail_data as $row): ?>
    <p><?php echo $row['id'].$row['title'].$row['content']; ?></p>
    <?php endforeach; ?>

<br>
<a href="./blog_main.php">戻る</a>

    