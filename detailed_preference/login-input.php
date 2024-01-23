<?php
// errorっていうパラメータが渡ってきたら$errorという変数に値を代入する
$error = $_GET['error'];
$errormsg = '';
if ($error == 1) {
    $errormsg = 'メールアドレスまたはパスワードが違います。';
} elseif ($error == 2) {
    $errormsg = 'このメールアドレスは登録されています。';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="cont">
        <div class="form sign-in">
            <h2>Welcome back,</h2>
            <form  name="login" action="login-output.php" method="post">
                <label>
                    <span>Email</span>
                    <input type="email" name="email" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" />
                </label>
                <?php
                if ($error == 1) {
                    echo ($errormsg);
                }
                ?>
                <p class="forgot-pass">Forgot password?</p>
                <button type="submit" class="submit">Sign In</button>
            </form>
            <!-- <button type="button" class="fb-btn">Connect with <span>facebook</span></button> -->
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h2>新規登録はこちら！</h2>
                    <p>新規登録をして、たくさんの新しい機会を発見しましょう！</p>
                </div>
                <div class="img__text m--in">
                    <h2>One of us?</h2>
                    <p>もしすでにアカウントをお持ちであれば、サインインしてください。あなたのことを待っていました！</p>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Time to feel like home,</h2>
                <form name="new_registration" action="../detailed_preference/new_registration.php" method="post">
                    <label>
                        <span>Email</span>
                        <input type="email" name="email" />
                    </label>
                    <?php
                    if ($error == 2) {
                        echo ($errormsg);
                    }
                    ?>
                    <label>
                        <span>Password</span>
                        <input type="password" name="password" id="password" required />
                    </label>
                    <label>
                        <span>retype_Password</span>
                        <input type="password" name="retype_password" id="retype_password" required />
                    </label>
                    <button type="submit" class="submit">Sign Up</button>
                </form>
                <!-- <button type="button" class="fb-btn">Join with <span>facebook</span></button> -->
            </div>
        </div>
    </div>
    <script>
        // new_registrationのフォーム
        var form = document.new_registration;
        form.onsubmit = function() {
            // エラーメッセージをクリアする
            form.password.setCustomValidity("");
            console.log(form.password.value);
            console.log(form.retype_password.value);
            // パスワードの一致確認
            if (form.password.value != form.retype_password.value) {
                // 一致していなかったら、エラーメッセージを表示する
                form.password.setCustomValidity("パスワードと確認用パスワードが一致しません");
                return false;
            };
        };
    </script>

    <!-- <a href="https://dribbble.com/shots/3306190-Login-Registration-form" target="_blank" class="icon-link"> -->
    <!-- <img src="http://icons.iconarchive.com/icons/uiconstock/socialmedia/256/Dribbble-icon.png"> -->
    <!-- </a> -->
    <!-- <a href="https://codepen.io/suez/pen/XWyBpre" target="_blank" class="link-footer">New 2023 Version</a> -->
    <!-- <a href="https://twitter.com/NikolayTalanov" target="_blank" class="icon-link icon-link--twitter"> -->
    <!-- <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png"> -->
    <!-- </a> -->
    <script src="../js/login.js"></script>
</body>

</html>