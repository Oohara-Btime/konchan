<?php
include("../const.php");
session_start();

$prefectures_id = filter_input(INPUT_POST, 'prefectures_id');
$taste_id = filter_input(INPUT_POST, 'taste_id');
$genre_id = filter_input(INPUT_POST, 'genre_id');
$cooking_time = filter_input(INPUT_POST, 'cooking_time');
$foodstuff_id_list = filter_input(INPUT_POST, 'foodstuff_id_list', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
$sql = '';
$stmt = null;

$keyword = filter_input(INPUT_POST, 'keyword');

$db = new PDO(DSN, DB_USER, '');

if ($prefectures_id != '' && $prefectures_id != null) {
    $sql .= 'SELECT id as recipe_id,prefectures_id,recipe_name,recipe,cooking_time,recipe_image FROM recipe WHERE prefectures_id = ' . $prefectures_id . ' and recipe.delete_flag = false';
} elseif (
    $taste_id != '' && $taste_id != null &&
    $genre_id != '' && $genre_id != null &&
    $cooking_time != '' && $cooking_time != null
) {
    $sql .= 'SELECT * FROM recipe JOIN recipe_taste on recipe.id = recipe_taste.recipe_id and recipe_taste.taste_id = ' . $taste_id . ' and recipe_taste.delete_flag = false ' .
        ' JOIN recipe_genre on recipe.id = recipe_genre.recipe_id and recipe_genre.genre_id = ' . $genre_id . ' and recipe_genre.delete_flag = false ' .
        ' WHERE recipe.cooking_time <= ' . $cooking_time . ' and recipe.delete_flag = false';
} elseif ($foodstuff_id_list != '' && $foodstuff_id_list != null) {
    $ids = implode(',', $foodstuff_id_list);
    $sql .= 'SELECT r.id as recipe_id ,r.recipe_image FROM recipe AS r ' .
        ' LEFT JOIN(SELECT distinct recipe_id FROM recipe_ingredient WHERE ingredient_id NOT IN (' . $ids . ')) AS ri' .
        ' ON r.id = ri.recipe_id';
    foreach ($foodstuff_id_list as $i => $foodstuff_id) {
        $sql .= ' JOIN recipe_ingredient AS ri' . $i .
            ' ON r.id = ri' . $i . '.recipe_id and ri' . $i . '.ingredient_id =' . $foodstuff_id;
    }
    $sql .= ' WHERE ri.recipe_id IS NULL';
} elseif ($keyword != '' && $keyword != null ){
    $sql = 'SELECT id as recipe_id, prefectures_id, recipe_name, recipe, cooking_time, recipe_image FROM recipe WHERE recipe_name like :keyword AND recipe.delete_flag = false';
}
try {
    $db = new PDO(DSN, DB_USER, '');
    if ($sql != '') {
        $stmt = $db->prepare($sql);
        if ($keyword != '' && $keyword != null){
            $keyword = '%'. $keyword .'%';
            $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
        }
        // SQL実行
        $stmt->execute();
        // $count=$stmt->rowCount();
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
    <title>こんちゃん</title>
</head>
<link rel="stylesheet" href="../css/recipi_list_screen.css">

<body>
    <?php
        if ($stmt && $stmt->rowCount() > 0) {
    ?>
        <h1>画像を押してレシピを表示！</h1>
    <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $recipe = $row['recipe_image'];
                $recipe_id = $row['recipe_id'];
                $recipe_name = $row['recipe_name'];
    ?>
        <div class="r_name">
            <h3>
                <?php
                    echo $recipe_name;
                ?>
            </h3>
        </div>
        <form action="recipi_detail_screen.php" method="post">
            <!-- <input type="text" name="recipe_id" src=<?php echo ("../img/" . $recipe); ?> alt="画像なし" value="<?php echo ($recipe_id); ?>"> -->
            <div class="foodimage">
                <input type="image" src=<?php echo ("../img/" . $recipe); ?> width="250px" height="250px">
                <input type="hidden" name="recipe_id" alt="画像なし" value="<?php echo ($recipe_id); ?>">
                </input>
                </input>
            </div>
        </form>
    <?php
        }
    } else {
        echo '<p>検索結果がありません。</p>';
    }
    ?>
    <button type="button" onclick="location.href='../index.php'">ホームに戻る</button>
</body>

</html>