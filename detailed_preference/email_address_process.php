<?php
include("../const.php");
session_start();

// var_dump($_SESSION);
$user_id = $_SESSION["user"]["id"];
$user_email = $_SESSION["user"]["email"];
$email = filter_input(INPUT_POST, 'confirmation-email');
$db = new PDO(DSN, DB_USER, '');
$db->beginTransaction();


try {
    $stmt = $db->prepare('update user set email=? where id=?');
    $stmt->execute([$email, $user_id]);
    $stmt = $db->prepare('update subscription set email=? where email=? ');
    $stmt->execute([$email, $user_email]);
    $db->commit();

    $_SESSION["user"]["email"]=$email;

    header("Location:../index.php");
    exit();

} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
