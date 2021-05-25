<?php
require_once 'db_connect.php';



    //ブログ内容を表示する
    //引数なし
    //検索結果を返す
    function data_display() {
        $dbh = db_connect();
        $dbh->beginTransaction();
        try {
            $sql =  "SELECT * FROM general_user 
            JOIN blog ON general_user.id = blog.user_id
            WHERE general_user.id = 1";
        
            //queryメソッドでないとデータが取れない
            // $stml = $dbh->query($sql);
            //prepareで可能

            $stml = $dbh->prepare($sql);
            // $stml->bindValue();
            $stml->execute();
            $result = $stml->fetchall(PDO::FETCH_ASSOC);
            return $result;
            $dbh->commit();
        } catch(PDOExpension $e) {
            exit($e);
            $dbh->rollBack();
        }
    }


    //一覧画面でクリックした項目の詳細ページに飛ぶ
    //blogテーブルのid
    //blogのレコードを返す
    function data_detail($blog_detail_id) {
        $dbh = db_connect();
        $dbh->beginTransaction();
        try {
            $sql =  "SELECT * FROM blog 
            WHERE id = '$blog_detail_id'";
        
            //queryメソッドでないとデータが取れない
            // $stml = $dbh->query($sql);
            //prepareで可能
    
            $stml = $dbh->prepare($sql);
            // $stml->bindValue();
            $stml->execute();
            $result = $stml->fetchall(PDO::FETCH_ASSOC);
            return $result;
            $dbh->commit();
        } catch(PDOExpension $e) {
            exit($e);
            $dbh->rollBack();
        }
    }

    //追加
    function data_insert($blog_title, $blog_content) {
        global $dbh;
        echo($blog_title);
        echo($blog_content);
        $stml = $dbh->prepare("INSERT INTO blog VALUES (null, '$blog_title', '$blog_content', null, 1, 1)");
        $stml -> execute();
    }

    //編集
    function edit($blog_title, $blog_content) {
        $stml = $dbh->prepare("UPDATE blog SET title ='$blog_title', content = '$blog_content'　WHERE id = 4");
        $stml -> execute();
    }

    //削除
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