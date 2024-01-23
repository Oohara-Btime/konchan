<?php
include("../const.php");
session_start();

// var_dump($_SESSION);
$user_id = $_SESSION["user"]["id"];
$email = filter_input(INPUT_POST, 'confirmation-email');
$db = new PDO(DSN, DB_USER, '');


try {
    $stmt = $db->prepare('update user set email=? where id=?');
    $stmt->execute([$email, $user_id]);

    header("Location:../index.php");
    exit();

} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
