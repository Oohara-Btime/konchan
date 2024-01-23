<?php

include("../const.php");
session_start();

$email = filter_input(INPUT_POST, 'email');
$db = new PDO(DSN, DB_USER, '');


try {
    $stmt = $db->prepare('select * from user where email=? delete_flag = false');
    $stmt->execute([$email]);
    $count = $stmt->rowCount();
    if ($count === 1) {
        /* 何もしない */
        echo "接続成功";
    } else {
        echo "パスワードリセット失敗";
        // header('Location:password_reset.php?error=1');
        // exit();
    }
} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/setting.css">
    </head>

    <body>
        <h1>パスワード再設定</h1>
        <div class="form">
            <form action="#">
                <div class="text-input">
                    <label for="username">新しいパスワード</label>
                    <input type="text" name="username" id="username" placeholder="" />
                    <span class="separator"> </span>
                </div>

                <div class="text-input">
                    <label for="password">パスワードの確認</label>
                    <input type="password" name="password" id="password" placeholder="" />
                    <span class="separator"> </span>
                </div>

                <div class="form-bottom">
                    <input type="submit" id="submit" value="完了" />
                    <!-- <a href="https://hub.docker.com/login/" class="original-src">Original Source</a> -->
                </div>
            </form>
        </div>
        <script src="../js/setting.js"></script>
    </body>
</html>