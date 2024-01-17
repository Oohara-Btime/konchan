<?php
include("../const.php");
session_start();

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if (isset($_SESSION['email'])) {
    $sql=$pdo->prepare('select * from user where email and password=? ');
    $sql->execute([$_REQUEST['password']]);
    echo 'パスワード確認';
} else {
    header("Location:unsubscribe.php");
    exit();
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
        <button type="hidden" onclick="location.href='../index.php'" name="unsubscribe" value="" class="unsubscribe" >退会する</button>
        <button type="button" onclick="location.href='../index.php'" class="cancel">キャンセル</button>
    </div>
    </form>

</body>
</html>