<?php

require_once 'db/db_sql.php';

$blog_detail_id = $_GET['id'];

$detail_data = data_detail($blog_detail_id);

?>


<?php foreach($detail_data as $row): ?>
    <form action='blog_edit_done.php' method='POST'>
        <p>ブログタイトル<input type='text' name='title' size='191' value="<?php echo $row['title']; ?>"></p>
        <p>投稿内容<input type='text' name='content' size='5000' value="<?php echo $row['content']; ?>"></p>
        <input type='hidden' name='id' value='<?php echo $row['id']; ?>'>
        <input type='submit' value='送信'><input type='reset' value='リセット'>
    </form>
<?php endforeach; ?>
 