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
            <form action="login-output.php" method="post">
                <label>
                    <span>Email</span>
                    <input type="email" name="email"/>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password"/>
                </label>
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
    <script src="../js/login.js"></script>
</body>

</html>