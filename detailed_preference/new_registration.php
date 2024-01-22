<?php
include("const.php");
session_start();

$email = filter_input(INPUT_POST, 'email');
$password =  filter_input(INPUT_POST, 'password');

try {
    $db = new PDO(DSN, DB_USER, '');
    // この処理をすることで同じメールアドレスがないか確認する
    $stmt = $db->prepare('select * from user where email=? and delete_flag = false');

    // SQL実行 
    $stmt->execute([$email]);
    // rowCountをすると件数が取得できる
    $count = $stmt->rowCount();
    if ($count === 0){
        // ユーザテーブルにメールアドレスとパスワードを追加している
        $stmt = $db->prepare('insert into user (email,password) values(?,?)');
        $stmt->execute([$email,$password]);

        // 登録したユーザのIDを取得している
        $stmt = $db->prepare('select * from user where email=? and delete_flag = false');
        $stmt->execute([$email]);
        // 新規登録したユーザのデータをresultに入れてる
        $result = $stmt->fetch();
        $_SESSION['user']=[
        // resultのidの中身をSESSIONに入れる(ここにSESSIONに入れることで他の画面でidが使用できる)
        'id'=>$result['id']];
        header('Location:index.php');
    }else{
        // ログイン画面に戻る
        // Location・・・その画面に移動する
        header('Location:login-input.php?error=2');
        exit();
    }
} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
?>