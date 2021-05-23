<?php
require_once 'db_connect.php';

function data_display() {
    global $dbh;
    $stml = $dbh->prepare("SELECT * FROM blog");
    $stml->execute();
    foreach ($stml as $row) {
        echo $row['title']."　".$row['content'];
        echo '<br>';
    }
}

function data_insert($blog_title, $blog_content) {
    global $dbh;
    echo($blog_title);
    echo($blog_content);
    $stml = $dbh->prepare("INSERT INTO blog VALUES (null, '$blog_title', '$blog_content', null, 1)");
    $stml -> execute();
}

function edit() {
    $stml = $dbh->prepare("UPDATE blog SET title ='２番目のタイトル'");
    $stml -> execute();
}

function data_delete() {
    $stml = $dbh->prepare("DELETE FROM blog");
    $stml -> execute();
}




// 出力して、htmlに出す
// $stml = $dbh->query("SELECT * FROM blog");
// $stml = $dbh->prepare("SELECT * FROM blog");
// $stml->execute();
// foreach ($stml as $row) {
//     echo $row['title'];
// }

// 追加する
// $stml = $dbh->prepare("INSERT INTO blog VALUES (null, 'ブログ', '新しいタイトルです', null, 1)");
// $stml -> execute();

// 編集する
// $stml = $dbh->prepare("UPDATE blog SET title ='２番目のタイトル'");
// $stml -> execute();

// 削除する
// $stml = $dbh->prepare("DELETE FROM blog");
// $stml -> execute();

?>