<?php
include("../const.php");
session_start();

$user_id = $_SESSION["user"]["id"];
$password = filter_input(INPUT_POST, 'password');
$retype_password = filter_input(INPUT_POST, 'retype_password');
if ($password !== $retype_password){
    header("Location:password_reset.php?error=2");
    exit();
}
$db = new PDO(DSN, DB_USER, '');

try {
    $stmt = $db->prepare('update user set  password=? where id=? and delete_flag = false');
    $stmt->execute([$retype_password,$user_id]);

    unset($_SESSION['user']);

    header("Location:password_reset_result.php?error=1");
    exit();

} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
?>