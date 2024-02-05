<?php
include("../const.php");
session_start();

if($user_id = $_SESSION['user']['id']){
    $user_id = $_SESSION['user']['id'];
    $user_email = $_SESSION["user"]["email"];
    $db = new PDO(DSN, DB_USER, '');
} else {
    header('Location:login-input.php?error=3');
    exit();
}


try {
    unset($_SESSION['user']);
    header("Location:../index.php");
    exit();
} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
