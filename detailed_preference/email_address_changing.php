<?php
// errorっていうパラメータが渡ってきたら$errorという変数に値を代入する
$error = filter_input(INPUT_GET, 'error');
$errormsg = '';
if ($error == 1) {
    $errormsg = 'このメールアドレスは既に登録されています。';
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ページのタイトル -->
    <title>Document</title>
    <!-- setting.cssとリンクする -->
    <link rel="stylesheet" href="../css/setting.css">
</head>

<body>
    <!-- タイトルの表示 -->
    <h1>メールアドレス変更</h1>
    <div class="form">
        <!-- <form action="email_address_process.php" method="post" name="email_address_process"> -->
            <!-- 新しいメールアドレスの入力フォーム -->
            <div class="text-input">
                <?php
                    if ($error == 1) {
                        echo "<FONT COLOR=RED>$errormsg</FONT><br/>";
                    } 
                ?>
                <label for="new-email">新しいメールアドレス</label>
                <input type="email" name="new_email" id="new_email" placeholder=""  required/>
                <span class="separator"> </span>
            </div>

            <!-- メールアドレス確認の入力フォーム -->
            <div class="text-input">
                <label for="confirmation-email">メールアドレスの確認</label>
                <input type="email" name="confirmation_email" id="confirmation_email" placeholder=""  required/>
                <span class="separator"> </span>
            </div>

            <div class="form-bottom">
                <!-- フォームの送信ボタン -->
                <input type="submit" id="submit" value="変更" />
            </div>
        <!-- </form> -->
    </div>
    <!-- <script src="../js/setting.js"></script> -->

    <script>
        // new_registrationのフォーム
        var form = document.email_address_process;
        form.onsubmit = function() {
            // エラーメッセージをクリアする
            form.email.setCustomValidity("");
            console.log(form.new_email.value);
            console.log(form.confirmation_email.value);
            // パスワードの一致確認
            if (form.new_email.value != form.confirmation_email.value) {
                // 一致していなかったら、エラーメッセージを表示する
                form.confirmation_email.setCustomValidity("新しいメールアドレスと確認のメールアドレスが一致しません");
                return false;
            };
        };
    </script>

</body>

</html>