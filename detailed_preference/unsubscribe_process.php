
<?php
include("../const.php");
session_start();

$user_id = $_SESSION['user']['id'];
$user_email = $_SESSION["user"]["email"];
$db = new PDO(DSN, DB_USER, '');
// $db->beginTransaction();

try {
    $stmt = $db->prepare('update user set delete_flag = true, delete_date = CURRENT_TIMESTAMP where id=?');
    $stmt->execute([$user_id]);
    $stmt = $db->prepare('select * from subscription where email=? and delete_flag = false');
    $stmt->execute([$user_email]);
    $count1 = $stmt->rowCount();

    if ($count1 >= 1) {
        $stmt = $db->prepare('update subscription set delete_flag = true, delete_date = CURRENT_TIMESTAMP where email=?');
        $stmt->execute([$user_email]);
    }
    unset($_SESSION['user']);

    header("Location:../index.php");
    exit();
} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
?>