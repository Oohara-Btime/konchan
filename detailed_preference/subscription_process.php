
<?php
include("../const.php");
session_start();

$user_id = $_SESSION['user']['id'];
$user_email = $_SESSION["user"]["email"];
$plan =  filter_input(INPUT_POST, 'radio');
$db = new PDO(DSN, DB_USER, '');

$date = date("Y/m/d H:i:s");


try {
    // 現在プランに入っているかを確認
    $stmt = $db->prepare('select * from subscription where email=? and use_end_date > date=?');
    $stmt->execute([$user_email]);
    $count = $stmt->rowCount();
    // プランに入っていない時
    if ($count === 0) {
        if ($plan === '1') {
            $stmt = $db->prepare('insert into subscription (email,plan,use_start_date,use_end_date,create_date) values(?,?,CURRENT_TIMESTAMP,DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 1 MONTH),CURRENT_TIMESTAMP)');
            $stmt->execute([$user_email, $plan]);
            header("Location:subscription_registration.php");
            exit();
        } elseif ($plan === '3') {
            $stmt = $db->prepare('insert into subscription (email,plan,use_start_date,use_end_date,create_date) values(?,?,CURRENT_TIMESTAMP,DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 3 MONTH),CURRENT_TIMESTAMP)');
            $stmt->execute([$user_email, $plan]);
            header("Location:subscription_registration.php");
            exit();
        } elseif ($plan === '6') {
            $stmt = $db->prepare('insert into subscription (email,plan,use_start_date,use_end_date,create_date) values(?,?,CURRENT_TIMESTAMP,DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 6 MONTH),CURRENT_TIMESTAMP)');
            $stmt->execute([$user_email, $plan]);
            header("Location:subscription_registration.php");
            exit();
        } elseif ($plan === '12') {
            $stmt = $db->prepare('insert into subscription (email,plan,use_start_date,use_end_date,create_date) values(?,?,CURRENT_TIMESTAMP,DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 12 MONTH),CURRENT_TIMESTAMP)');
            $stmt->execute([$user_email, $plan]);
            header("Location:subscription_registration.php");
            exit();
        }
    // 現在のプランのみを持っている時
    } elseif ($count === 1) {
        $result = $stmt->fetch();
        $before_use_end_date = ['use_end_date'=>$result['use_end_date']];
        if ($plan === '1') {
            $stmt = $db->prepare('insert into subscription (email,plan,use_start_date,use_end_date,create_date) values(?,?,?,date($before_use_end_date,strtotime("+1 month")),CURRENT_TIMESTAMP)');
            $stmt->execute([$user_email, $plan,$before_use_end_date]);
            header("Location:../index.php");
            exit();
        } elseif ($plan === '3') {
            $stmt = $db->prepare('insert into subscription (email,plan,use_start_date,use_end_date,create_date) values(?,?,?,date($before_use_end_date,strtotime("+3 month")),CURRENT_TIMESTAMP)');
            $stmt->execute([$user_email, $plan,$before_use_end_date]);
            header("Location:../index.php");
            exit();
        } elseif ($plan === '6') {
            $stmt = $db->prepare('insert into subscription (email,plan,use_start_date,use_end_date,create_date) values(?,?,?,date($before_use_end_date,strtotime("+6 month")),CURRENT_TIMESTAMP)');
            $stmt->execute([$user_email, $plan,$before_use_end_date]);
            header("Location:../index.php");
            exit();
        } elseif ($plan === '12') {
            $stmt = $db->prepare('insert into subscription (email,plan,use_start_date,use_end_date,create_date) values(?,?,?,date($before_use_end_date,strtotime("+12 month")),CURRENT_TIMESTAMP)');
            $stmt->execute([$user_email, $plan,$before_use_end_date]);
            header("Location:../index.php");
            exit();
        }
    } else  {
        //現在以降で１つより多いプランをもってる時
        header("Location:..index.php");
        exit();
    }
} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
?>