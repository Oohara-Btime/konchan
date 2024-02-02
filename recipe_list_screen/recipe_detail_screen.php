<?php
include("../const.php");
session_start();

$recipe_id = filter_input(INPUT_POST, 'recipe_id');

try {
    $db = new PDO(DSN, DB_USER, '');

    // recipeテーブルから詳細情報を取得
    $stmt = $db->prepare('SELECT * FROM recipe WHERE id = :id');
    $inID = intval($recipe_id);
    $stmt->bindParam(':id', $inID, PDO::PARAM_INT);
    $stmt->execute();
    if ($stmt) {
        $recipe_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    $stmt_ingredient = $db->prepare('SELECT * FROM recipe_ingredient WHERE recipe_id = :id');
    $stmt_ingredient->bindParam(':id', $inID, PDO::PARAM_INT);
    $stmt_ingredient->execute();
    if ($stmt_ingredient) {
        $ingredients = $stmt_ingredient->fetchAll(PDO::FETCH_ASSOC);
    }
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
    <link rel="stylesheet" href="../css/recipe_detail_screen.css">
    <title>こんちゃん</title>
</head>

<body>
    <header>
        <button type="button" onclick="location.href='../index.php'" class="headerButton">ホームに戻る</button>
    </header>
    <div class="three_line">
        <div class="foodimage">
            <img src=<?php echo ("../img/" . $recipe_data[0]["recipe_image"]); ?> width="400px" height="400px"
                alt="Recipe Image">
        </div>

<!-- 既存のコードの後に追加 -->
<div class="foodstuff">
    <div class="title">
        材料
    </div>
    <ul>
        <?php
        foreach ($ingredients as $ingredient) {
            // 食材情報を取得
            $ingredientId = $ingredient['ingredient_id'];
            $stmt_ingredient_info = $db->prepare('SELECT * FROM foodstuff WHERE id = :id');
            $stmt_ingredient_info->bindParam(':id', $ingredientId, PDO::PARAM_INT);
            $stmt_ingredient_info->execute();
            $ingredientInfo = $stmt_ingredient_info->fetch(PDO::FETCH_ASSOC);

            // 食材名を表示
        ?>
        <h3>
            <?php
                echo '<li>' . $ingredientInfo['ingredient_name'] . '</li>';
            ?>
        </h3>
        <?php    
        }
        ?>
    </ul>

        <div class="cookingtime">
            <div class="title">
                調理時間
            </div>
            <div class="cooktime">
                <h2>
                    <?php echo $recipe_data[0]["cooking_time"]; ?>分
                </h2>
            </div>
        </div>
    </div>

    <div class="recipe">
        <?php
        echo $recipe_data[0]["recipe"];
        ?>
    </div>
    <!-- <button type="button" onclick="location.href='../index.php'">ホームに戻る</button> -->
</body>

</html>