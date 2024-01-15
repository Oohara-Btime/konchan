<?php
include("../const.php");
session_start();

$prefectures_id = filter_input(INPUT_POST, 'prefectures_id');
$taste_id = filter_input(INPUT_POST, 'taste_id');
$genre_id = filter_input(INPUT_POST, 'genre_id');
$cooking_time = filter_input(INPUT_POST, 'cooking_time');
$sql = '';

if ($prefectures_id != '' && $prefectures_id != null) {
    $sql .= 'SELECT * FROM recipe WHERE prefectures_id = ' . $prefectures_id;
} elseif (
    $taste_id != '' && $taste_id != null &&
    $genre_id != '' && $genre_id != null &&
    $cooking_time != '' && $cooking_time != null
) {
    $sql .= 'SELECT * FROM recipe JOIN recipe_taste on recipe.id = recipe_taste.recipe_id and recipe_taste.taste_id = ' . $taste_id . ' and recipe_taste.delete_flag = false ' .
        ' JOIN recipe_genre on recipe.id = recipe_genre.recipe_id and recipe_genre.genre_id = ' . $genre_id . ' and recipe_genre.delete_flag = false ' .
        ' WHERE recipe.cooking_time <= ' . $cooking_time . ' and recipe.delete_flag = false';
}
try {
    $db = new PDO(DSN, DB_USER, '');
    if ($sql != '') {
        $stmt = $db->prepare($sql);
        // SQL実行
        $stmt->execute();
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
    <link rel="stylesheet" href="../css/recipe_list_screen.css">
    <title>こんちゃん</title>
</head>

<body>
    <?php
    if ($stmt) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $recipe = $row['recipe_image'];
            $recipe_id = $row['recipe_id'];
    ?>
            <html>
            <form action="recipi_detail_screen.php" method="post">                
                <!-- <input type="text" name="recipe_id" src=<?php echo ("../pic/" . $recipe); ?> alt="画像なし" value="<?php echo ($recipe_id); ?>"> -->
                <input type="image" src=<?php echo ("../pic/" . $recipe); ?>>
                    <input type="hidden" name="recipe_id" alt="画像なし" value="<?php echo ($recipe_id); ?>">
                    </input>
                </input>
            </form>
            </html>
    <?php
        }
    }
    ?>
</body>

</html>