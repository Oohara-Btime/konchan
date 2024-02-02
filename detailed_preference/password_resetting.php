<?php

include("../const.php");
session_start();

$email = filter_input(INPUT_POST, 'email');
$db = new PDO(DSN, DB_USER, '');


try {
    $stmt = $db->prepare('select * from user where email=? and delete_flag = false');
    $stmt->execute([$email]);
    $count = $stmt->rowCount();
    if ($count === 1) {
        $result = $stmt->fetch();
        $_SESSION['user'] = [
            // resultのemailの中身をSESSIONに入れる(ここにSESSIONに入れることで他の画面でemailが使用できる)
            'id' => $result['id']
        ];
    } else {
        header('Location:password_reset.php?error=1');
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
    <title>Document</title>
    <link rel="stylesheet" href="../css/setting.css">
</head>

<body>
    <h1>パスワード再設定</h1>
    <div class="form">
        <form action="password_reset_process.php" method="post" name="password_reset_process">
            <div class="text-input">
                <label for="password">新しいパスワード</label>
                <input type="password" name="password" id="password" placeholder="" />
                <span class="separator"> </span>
            </div>

            <div class="text-input">
                <label for="retype_password">パスワードの確認</label>
                <input type="password" name="retype_password" id="retype_password" placeholder="" />
                <span class="separator"> </span>
            </div>

            <div class="form-bottom">
                <input type="submit" id="submit" value="完了" />
            </div>
        </form>
    </div>

    <script>
        // new_registrationのフォーム
        var form = document.password_reset_process;
        form.onsubmit = function() {
            // エラーメッセージをクリアする
            form.password.setCustomValidity("");
            console.log(form.password.value);
            console.log(form.retype_password.value);
            // パスワードの一致確認
            if (form.password.value != form.retype_password.value) {
                // 一致していなかったら、エラーメッセージを表示する
                form.retype_password.setCustomValidity("新しいパスワードと確認のパスワードが一致しません");
                return false;
            };
        };
    </script>

</body>

</html>