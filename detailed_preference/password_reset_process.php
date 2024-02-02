<?php
include("../const.php");
session_start();

$user_id = $_SESSION["user"]["id"];
$password = filter_input(INPUT_POST, 'retype_password');
$db = new PDO(DSN, DB_USER, '');

try {
    $stmt = $db->prepare('update user set  password=? where id=? and delete_flag = false');
    $stmt->execute([$password,$user_id]);

    unset($_SESSION['user']);

    header("Location:../index.php");
    exit();

} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
?>