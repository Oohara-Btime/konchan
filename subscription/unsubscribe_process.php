
<?php
include("../const.php");
if (isset($_SESSION['email'])) {
    $sql=$pdo->prepare('update user set delete_flag=true');
    $sql->execute([$_REQUEST['delete_flag']]);
    header("Location:../index.php");
    exit();
} else {
    header("Location:unsubscribe.php");
    exit();
}
?>