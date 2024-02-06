<?php
// errorっていうパラメータが渡ってきたら$errorという変数に値を代入する
$error = filter_input(INPUT_GET, 'error');
$errormsg = '';
if ($error == 1) {
    $errormsg = 'ログインをしてください。';
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/password_reset_result.css">
    <title>こんちゃん</title>
</head>


<body>
    <h1>パスワードリセット</h1>
    <p class="heading">
        <?php
        if ($error == 1) {
            echo ($errormsg);
        } 
        ?>
    </p>

    <div class="content">
        <p>「ホームへ」のボタンを押してください。</p>
    </div>

    <form action="../index.php" >
        <div class="container">
            <button type="button" class="home" onclick="location.href='../index.php'">ホームへ</button>
        </div>
    </form>
</body>

</html>