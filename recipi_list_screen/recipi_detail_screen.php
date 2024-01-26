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
    <link rel="stylesheet" href="../css/recipi_detail_screen.css">
    <title>こんちゃん</title>
</head>
<body>
    <?php 
        echo '<p>';
        echo '<p>';
        echo '<p>';
        echo '料理名: ';
        echo $date[0]["recipe_name"];
        echo '<p>';
        echo 'レシピ: ';
        echo $date[0]["recipe"];
        echo '<p>';
        echo '調理時間: ';
        echo $date[0]["cooking_time"];
        echo '分';
        echo '<p>';

    ?>
    <html>
        <div class=foodimage>
            <image src=<?php echo ("../img/" . $date[0]["recipe_image"]); ?> width = "250px" height ="250px">
        </div>
    </image>
    <button type="button" onclick="location.href='../index.php'">ホームに戻る</button>
    </html>
</body>
</html>