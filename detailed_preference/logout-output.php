<?php
include("../const.php");
session_start();

$user_id = $_SESSION['user']['id'];
$user_email = $_SESSION["user"]["email"];
$db = new PDO(DSN, DB_USER, '');


try {
    unset($_SESSION['user']);
    header("Location:../index.php");
    exit();
} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
