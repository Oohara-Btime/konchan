
<?php
include("../const.php");
session_start();

$email = $_SESSION['user']['id'];
$available_period =  filter_input(INPUT_POST, 'radio');
$plan =  filter_input(INPUT_POST, 'radio');
$db = new PDO(DSN, DB_USER, '');

try {
    $stmt = $db->prepare('select * from subscription where email=? and delete_flag = false');
    $stmt->execute([$email]);
    $count = $stmt->rowCount();
    if ($count === 0){
        $stmt = $db->prepare('insert into subscription (email,available_period,plan,create_date) values(?,?,?,CURRENT_TIMESTAMP)');
        $stmt->execute([$email,$available_period,$plan]);
        header("Location:../index.php");
        exit();
    } else {
        $stmt = $db->prepare('update subscription set (email,available_period,plan,up_date) values(?,?,?,CURRENT_TIMESTAMP)');
        $stmt->execute([$email,$available_period,$plan]);
        header("Location:../index.php");
        exit();
    }
    header("Location:../index.php");
    exit();
} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
?>