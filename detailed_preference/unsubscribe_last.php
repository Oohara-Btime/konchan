<?php
include("../const.php");
session_start();

// var_dump($_SESSION);
$user_id = $_SESSION["user"]["id"];
$password = filter_input(INPUT_POST, 'password');
$db = new PDO(DSN, DB_USER, '');


try {
    $stmt = $db->prepare('select * from user where id=? and password=? and delete_flag = false');
    $stmt->execute([$user_id, $password]);
    $count = $stmt->rowCount();
    if ($count === 1) {
        /* 何もしない */
    } else {
        header('Location:unsubscribe.php?error=1');
        exit();
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
    <link rel="stylesheet" href="../css/unsubscribe_last.css">
    <title>こんちゃん</title>
</head>


<body>
    <h1>退会最終確認</h1>
    <p class="heading">この度は「こんちゃん」をご利用いただき、ありがとうございました。</p>

    <div class="content">
        <p>「退会する」のボタンを押すと、退会が完了いたします</p>
        <p>本当に退会してもよろしいですか？</p>
    </div>

    <form action="unsubscribe_process.php" method="post">
        <div class="container">
            <button type="hidden" name="unsubscribe" value="" class="unsubscribe">退会する</button>
            <button type="button" onclick="location.href='../index.php'" class="cancel">キャンセル</button>
        </div>
    </form>
</body>
</html>