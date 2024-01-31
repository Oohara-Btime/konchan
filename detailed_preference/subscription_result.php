<?php
// errorっていうパラメータが渡ってきたら$errorという変数に値を代入する
$error = $_GET['error'];
$errormsg = '';
if ($error == 1) {
    $errormsg = '有料会員登録に成功しました。';
} elseif ($error == 2) {
    $errormsg = '有料会員登録に失敗しました。';
} elseif ($error == 3) {
    $errormsg = '既に次のプランが登録されています。';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/subscription_result.css">
    <title>こんちゃん</title>
</head>


<body>
    <h1>有料会員登録</h1>
    <p class="heading">
        <?php
        if ($error == 1) {
            echo ($errormsg);
        } elseif ($error == 2) {
            echo ($errormsg);
        } elseif ($error == 3) {
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