<?php
include("../const.php");
session_start();

// errorっていうパラメータが渡ってきたら$errorという変数に値を代入する
$error = filter_input(INPUT_GET, 'error');
$errormsg = '';
if ($error == 1) {
    $errormsg = 'メールアドレスが違います。';
} elseif ($error == 2){
    $errormsg = '新しいパスワードと確認のパスワードが一致しません。';
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
    <h1>パスワードリセット</h1>
    <div class="form">
        <form action="password_resetting.php" method="post">
            <div class="text-input">
                <?php
                if ($error == 1) {
                    echo "<FONT COLOR=RED>$errormsg</FONT><br/>";
                } elseif ($error == 2){
                    echo "<FONT COLOR=RED>$errormsg</FONT><br/>";
                }
                ?>
                <label for="email">メールアドレス入力</label>
                <input type="email" name="email" id="email" placeholder="" required/>
                <span class="separator"> </span>
            </div>

            <div class="form-bottom">
                <input type="submit" id="submit" value="確認"/>
            </div>
        </form>
    </div>
</body>

</html>