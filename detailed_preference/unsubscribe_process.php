
<?php
include("../const.php");
session_start();

$user_id = $_SESSION['user']['id'];

try {
    $db = new PDO(DSN, DB_USER, '');
    $stmt = $db->prepare('update user set delete_flag = 1 , delete_date = CURRENT_TIMESTAMP where id=?');
    $stmt->execute([$user_id]);

    unset($_SESSION['user']);

    header("Location:../index.php");
    exit();
} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
?>