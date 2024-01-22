<?php
// errorっていうパラメータが渡ってきたら$errorという変数に値を代入する
$error = filter_input(INPUT_GET, 'error');
$errormsg = '';
if ($error == 1) {
    $errormsg = 'パスワードが違います。';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/unsubscribe.css">
    <title>こんちゃん</title>
    <style>
        #warning-text {
            color: red;
            display: none;
            /* 最初は非表示 */
        }
    </style>
</head>

<body>

    <h1>退会の手続き</h1>
    <p>会員の退会手続きを行います。注意事項の記載内容をご確認の上チェックしてください。</p>
    <div class="considerations">

        <p>退会事項と同意</p>
        <p> > 退会は取り消しできません。</p>
        <p> > 退会すると、会員ID、パスワード、保有しているクーポンなどすべての情報が永久に削除されます。</p>
        <p> > 退会後、現在ログイン中の会員ID、パスワードでログインができなくなります。</p>



        <input type="checkbox" id="checkBox" name="checkBox" value="1" onchange="change()">
        <label for="checkBox">上記事項に同意の上、退会手続きを行います。</label>
        <p id="warning-text">⚠注意事項の同意にチェックしてください。</p>

        <script>
            function change() {
                var element;
                if (document.getElementById("checkBox").checked) {
                    // チェックが入っていたら、送信ボタンのdisabledを外す
                    element = document.getElementById("submit");
                    element.disabled = false;
                } else {
                    // チェックが外れていたら、送信ボタンにdisabledを付ける
                    var warningText = document.getElementById("warning-text");
                    var checkBox = document.getElementById("checkBox");
                    warningText.style.display = checkBox.checked ? "none" : "block";
                    element = document.getElementById("submit");
                    element.disabled = true;
                }
            }
        </script>

    </div>



    <p>退会手続きを進める場合は、本人確認が必要なためパスワードを入力し「次へ」をクリックしてください。</p>

    <form action="unsubscribe_last.php" method="post">
        <div class="password">
            <p>パスワード確認</p>
            <?php
            if ($error == 1) {
                echo "<FONT COLOR=RED>$errormsg</FONT><br/>";
            }
            ?>
            
            <label for="password">パスワード：</label>
            <input type="password" name="password" id="password" required class="" style=" height: 40px; margin-top: 5px;" size=40 placeholder="パスワードを入力"><br>
        </div>


        <div class="container">
            <button type="submit" class="next" id="submit" disabled>次へ</button>
            <button type="button" onclick="location.href='../index.php'" class="cancel">キャンセル</button>
        </div>
    </form>
</body>

</html>