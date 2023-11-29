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
            display: none; /* 最初は非表示 */
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



        <input type="checkbox" id="agreeCheckbox" name="agreeCheckbox" value="selected">
        <label for="agreeCheckbox">上記事項に同意の上、退会手続きを行います。</label>
        <p id="warning-text">⚠注意事項の同意にチェックしてください。</p>

        <script>
            // チェックボックスの状態が変更されたときに呼び出す関数
            function toggleWarning() {
                var warningText = document.getElementById("warning-text");
                var agreeCheckbox = document.getElementById("agreeCheckbox");
    
                // チェックボックスがチェックされていない場合に赤い文字を表示
                warningText.style.display = agreeCheckbox.checked ? "none" : "block";
            }
    
            // チェックボックスの変更を監視し、関数を呼び出す
            document.getElementById("agreeCheckbox").addEventListener("change", toggleWarning);
        </script>

    </div>


    
    <p>退会手続きを進める場合は、本人確認が必要なためパスワードを入力し「次へ」をクリックしてください。</p>

    <div class="password">
        <p>パスワード確認</p>
        <input type="text" value="password" id="passWord" >
    </div>

    <div class="container">
        <button class="next">次へ</button>
        <button class="cancel">キャンセル</button>
    </div>

</body>
</html>