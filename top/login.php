<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>こんちゃん</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="cont">
        <div class="form sign-in">
            <h2>Welcome back,</h2>
            <form action="login.php" method="post">
                <label>
                    <span>Email</span>
                    <input type="email" name="email" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" />
                </label>
                <p class="forgot-pass">Forgot password?</p>
                <button type="submit" class="submit">Sign In</button>
            </form>
            <!-- <button type="button" class="fb-btn">Connect with <span>facebook</span></button> -->
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h2>New here?</h2>
                    <p>Sign up and discover great amount of new opportunities!</p>
                </div>
                <div class="img__text m--in">
                    <h2>One of us?</h2>
                    <p>If you already has an account, just sign in. We've missed you!</p>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Time to feel like home,</h2>
                <label>
                    <!-- <span>Name</span> -->
                    <!-- <input type="text" /> -->
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" />
                </label>
                <button type="button" class="submit">Sign Up</button>
                <!-- <button type="button" class="fb-btn">Join with <span>facebook</span></button> -->
            </div>
        </div>
    </div>

    <!-- <a href="https://dribbble.com/shots/3306190-Login-Registration-form" target="_blank" class="icon-link"> -->
    <!-- <img src="http://icons.iconarchive.com/icons/uiconstock/socialmedia/256/Dribbble-icon.png"> -->
    <!-- </a> -->
    <!-- <a href="https://codepen.io/suez/pen/XWyBpre" target="_blank" class="link-footer">New 2023 Version</a> -->
    <!-- <a href="https://twitter.com/NikolayTalanov" target="_blank" class="icon-link icon-link--twitter"> -->
    <!-- <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png"> -->
    <!-- </a> -->
    <script src="login.js"></script>
</body>

</html>



<?php
include("../const.php");
session_start();

if (isset($_SESSION["login"])) {
    header("Location: ../index.php");
    exit();
}

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
echo '' . $email . ',' . $password . '';
if ($email && $password) {
    try {
        $db = new PDO(DSN, DB_USER, '');
        $stmt = $db->prepare('SELECT * FROM user WHERE email = :email and password = :password');
        // 「:id」に対して値「1」をセット
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);
        // SQL実行
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            session_regenerate_id(TRUE); //セッションidを再発行
            $_SESSION["login"] = $email; //セッションにログイン情報を登録
            header("Location: ../index.php"); //ログイン後のページにリダイレクト
            exit();
        }
        // 取得したデータを出力
        foreach ($stmt as $row) {
            var_dump($row);
        }
    } catch (PDOException $e) {
        echo "接続に失敗しました。";
        echo $e->getMessage();
        exit;
    }
} else {
    echo "初期表示";
}
?>