<?php
include("../const.php");
session_start();

$recipe_id = filter_input(INPUT_POST, 'recipe_id');

try {
    $db = new PDO(DSN, DB_USER, '');
    
    // ----- recipe select を実施 ----------
    // echo'DB接続確認';
    $stmt = $db->prepare('SELECT * FROM recipe WHERE id = :id');

    // var_dump($_POST);
        // echo $_POST['recipe_id'];
    $inID = intval($_POST['recipe_id']);
    $stmt->bindParam(':id', $inID, PDO::PARAM_INT);
    // "select name from test where id = :id and num = :num"
    // SQL実行
    $stmt->execute();
    if ($stmt) {
        $date = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // ------------------------------------

    // ----
    

} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>こんちゃん</title>
</head>
<body>
    <?php 
        echo '  ';
        echo $date[0]["recipe_name"];
        echo '  ';
        echo $date[0]["recipe"];
        echo '  ';
        echo $date[0]["cooking_time"];
        echo '分';
    ?>
    <html>
        <image src=<?php echo ("../pic/" . $date[0]["recipe_image"]); ?>>
    </image>
    </html>
</body>
</html>