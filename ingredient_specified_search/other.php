<?php
include("../const.php");
session_start();

$ingredient_category_id = filter_input(INPUT_POST, 'ingredient_category_id');

try {
    $db = new PDO(DSN, DB_USER, '');
    $stmt = $db->prepare('SELECT * FROM foodstuff WHERE ingredient_category_id = 4');

    // SQL実行
    $stmt->execute();
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
    <link rel="stylesheet" href="../css/other.css">
    <title>こんちゃん</title>
</head>
<body>
    <h1>その他</h1>

    <form action="index.php" method="post">
        <?php
        // 取得したデータを出力
        foreach ($stmt as $row) {
            ?>
            <li>
                <input type="checkbox" name="ingredient_category_id" value="<?php echo $row['id'] ?>">
                <label>
                    <?php echo $row['ingredient_name'] ?>
                </label>
            </li>
            <?php
        }
        ?>
        <button class="next">
            <a href="vegetable.php">←</a>
        </button>
        
        <button type="button" onclick="location.href='../index.php'">
            確定
        </button>
    </form>
</body>
</html>