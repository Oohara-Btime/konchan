<?php
include("../const.php");
session_start();

// var_dump($_SESSION);
if ($user_id = $_SESSION["user"]["id"] and $user_email = $_SESSION["user"]["email"]) {
    $user_id = $_SESSION["user"]["id"];
    $user_email = $_SESSION["user"]["email"];
    $email = filter_input(INPUT_POST, 'confirmation_email');
} else {
    unset($_SESSION['user']);
    header("Location:login-input.php?error=3");
    exit();
}

try {
    $db = new PDO(DSN, DB_USER, '');
    $stmt = $db->prepare('select * from user where email=? and delete_flag = false');
    // SQL実行 
    $stmt->execute([$email]);
    // rowCountをすると件数が取得できる
    $count = $stmt->rowCount();
    if ($count === 0){
        $stmt = $db->prepare('update user set email=? where id=?');
        $stmt->execute([$email, $user_id]);
        $stmt = $db->prepare('select * from subscription where email=? and delete_flag = false');
        $stmt->execute([$user_email]);
        
        // rowCountをすると件数が取得できる
        $count1 = $stmt->rowCount();
        var_dump($stmt);
        if ($count1 >= 1){
            $stmt = $db->prepare('update subscription set email=? where email=? ');
            $stmt->execute([$email, $user_email]);
        } else {
            $_SESSION["user"]["email"] = [$email];
        }

        $_SESSION["user"]["email"] = [$email];

        header("Location:../index.php");
        exit();
    } else {
        header('Location:email_address_changing.php?error=1');
        exit();
    }
} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
