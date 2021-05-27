<?php
require_once '../dbtest.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ユーザーログイン</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../Uikit-3.6.22/css/uikit.min.css" />
        <script src="../../Uikit-3.6.22/js/uikit.min.js"></script>
        <script src="../../Uikit-3.6.22/js/uikit-icons.min.js"></script>
    </head>
    <body>
        <div class="uk-container">
            <h1 class="uk-heading-line uk-text-center"><span>ユーザーログイン</span></h1>
            <div class="uk-flex uk-flex-center">
                <ul class="uk-breadcrumb">
                    <li><a href="/php/login/test/view/index.php">ユーザー一覧</a></li>
                </ul>
            </div>
            <div class="uk-margin uk-form-width-medium uk-container" >
                <form action="index.php" method="POST">
                        <p>名前<input type="text" name="me" class="uk-textarea"></p>
                        <p>パスワード<input type="password" name="pass" class="uk-textarea"></p>
                        <button class="uk-button uk-button-default" name="login">
                            ログイン
                        </button>
                </form>
            </div>
            <div class="uk-flex uk-flex-center">
                <a href="index.php">戻る</a>
            </div>
        </div>
    </body>
</html>
