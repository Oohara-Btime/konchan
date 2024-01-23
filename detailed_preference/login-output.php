<?php
include("../const.php");
session_start();
$email=filter_input(INPUT_POST, 'email');
$password=filter_input(INPUT_POST, 'password');
try {
    $db = new PDO(DSN, DB_USER, '');
    // 配列のカウントが1だったら正常ログイン後の処理をする
    $stmt = $db->prepare('select * from user where email=? and password=? and delete_flag = false');

    // SQL実行 
    $stmt->execute([$email, $password]);
    // rowCountをすると件数が取得できる
    $count = $stmt->rowCount();
    if ($count === 1){
        // fetchをするとデータが取得できる
        // result変数の中にselectの実行結果のデータを入れてる
        $result = $stmt->fetch();
    $_SESSION['user']=[
        // resultのidの中身をSESSIONに入れる(ここにSESSIONに入れることで他の画面でidが使用できる)
        'id'=>$result['id']];
        header('Location:index.php');
    }else{
        // ログイン画面に戻る
        // Location・・・その画面に移動する
        header('Location:login-input.php?error=1');
        exit();
    }
} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
?>