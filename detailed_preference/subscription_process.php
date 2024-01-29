
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
    $stmt = $db->prepare('select * from subscription where email=? and delete_flag=false');
    $stmt->execute([$user_email]);
    $count1 = $stmt->rowCount();
    if ($count1 >= 1) {
        $stmt = $db->prepare('select * from subscription where email=? and use_end_date > now()');
        $stmt->execute([$user_email]);
        $count2 = $stmt->rowCount();

        // プランに入っていない時
        if ($count2 === 0) {
            if ($plan === '1') {
                $stmt = $db->prepare('insert into subscription (email,plan,use_start_date,use_end_date,create_date) values(?,?,CURRENT_TIMESTAMP,DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 1 MONTH),CURRENT_TIMESTAMP)');
                $stmt->execute([$user_email, $plan]);
                header("Location:unsubscribe.php");
                exit();
            } elseif ($plan === '3') {
                $stmt = $db->prepare('insert into subscription (email,plan,use_start_date,use_end_date,create_date) values(?,?,CURRENT_TIMESTAMP,DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 3 MONTH),CURRENT_TIMESTAMP)');
                $stmt->execute([$user_email, $plan]);
                header("Location:unsubscribe.php");
                exit();
            } elseif ($plan === '6') {
                $stmt = $db->prepare('insert into subscription (email,plan,use_start_date,use_end_date,create_date) values(?,?,CURRENT_TIMESTAMP,DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 6 MONTH),CURRENT_TIMESTAMP)');
                $stmt->execute([$user_email, $plan]);
                header("Location:unsubscribe.php");
                exit();
            } elseif ($plan === '12') {
                $stmt = $db->prepare('insert into subscription (email,plan,use_start_date,use_end_date,create_date) values(?,?,CURRENT_TIMESTAMP,DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 12 MONTH),CURRENT_TIMESTAMP)');
                $stmt->execute([$user_email, $plan]);
                header("Location:unsubscribe.php");
                exit();
            }
            // 現在のプランのみを持っている時
        } elseif ($count2 === 1) {
            $stmt = $db->prepare('select * from subscription where email=? ORDER BY use_end_date DESC LIMIT 1 ; ');
            $stmt->execute([$user_email]);
            $result = $stmt->fetch();
            $before_use_end_date = $result['use_end_date'];
            


            var_dump($before_use_end_date);

            if ($plan === '1') {
                $stmt = $db->prepare("insert into subscription (email, plan, use_start_date, use_end_date, create_date) values(?,?,?,DATE_ADD(str_to_date('$before_use_end_date', '%Y-%m-%d'), INTERVAL 3 MONTH),CURRENT_TIMESTAMP)");
                $stmt->execute([$user_email, $plan, $before_use_end_date]);
                header("Location:../index.php");
                exit();
            } elseif ($plan === '3') {
                $stmt = $db->prepare("insert into subscription (email, plan, use_start_date, use_end_date, create_date) values(?,?,?,DATE_ADD(str_to_date('$before_use_end_date', '%Y-%m-%d'), INTERVAL 3 MONTH),CURRENT_TIMESTAMP)");
                $stmt->execute([$user_email, $plan, $before_use_end_date]);
                header("Location:../index.php");
                exit();
            } elseif ($plan === '6') {
                $stmt = $db->prepare("insert into subscription (email, plan, use_start_date, use_end_date, create_date) values(?,?,?,DATE_ADD(str_to_date('$before_use_end_date', '%Y-%m-%d'), INTERVAL 3 MONTH),CURRENT_TIMESTAMP)");
                $stmt->execute([$user_email, $plan, $before_use_end_date]);
                header("Location:../index.php");
                exit();
            } elseif ($plan === '12') {
                $stmt = $db->prepare("insert into subscription (email, plan, use_start_date, use_end_date, create_date) values(?,?,?,DATE_ADD(str_to_date('$before_use_end_date', '%Y-%m-%d'), INTERVAL 3 MONTH),CURRENT_TIMESTAMP)");
                $stmt->execute([$user_email, $plan, $before_use_end_date]);
                header("Location:../index.php");
                exit();
            }
        } else {
            //現在以降で１つより多いプランをもってる時
            header("Location:../index.php");
            exit();
        }
    } else {
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
    }
} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
?>