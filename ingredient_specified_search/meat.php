<?php
include("../const.php");
session_start();

// $ingredient_category_id = filter_input(INPUT_POST, 'ingredient_category_id');
$foodstuff_id_list=filter_input(INPUT_POST, 'foodstuff_id_list' , FILTER_DEFAULT,FILTER_REQUIRE_ARRAY);

try {
    $db = new PDO(DSN, DB_USER, '');
    $stmt = $db->prepare('SELECT * FROM foodstuff WHERE ingredient_category_id = 1');

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
        <link rel="stylesheet" href="../css/meat.css">
        <title>こんちゃん</title>
    </head>

    <body>
        <h1>肉</h1>

        <form action="../index.php" method="post">
            <?php
            $meat_list=[];
            // 取得したデータを出力
            foreach ($stmt as $row) {
                $ingredient_image = $row['ingredient_image'];
                $checked="";
                if ($foodstuff_id_list != null && in_array($row['id'], $foodstuff_id_list )){
                    $checked=' checked';
                    array_push($meat_list, $row['id']);
                }
                ?>
                <li>
                    <input type="image" src=<?php echo ("../img/" . $ingredient_image); ?> width="250px" height="250px">
                    <input type="checkbox" name="foodstuff_id_list[]" value="<?php echo $row['id'] ?>" <?php echo $checked?>>
                    <label>
                        <?php echo $row['ingredient_name'] ?>
                    </label>
                </li>
                <?php
            }
            foreach ($foodstuff_id_list as $row) {
                if (!in_array($row, $meat_list )){

                
                ?>
                <input type="hidden" name="foodstuff_id_list[]" value="<?php echo $row ?>">
                <?php
                }
            }
                ?>

            <button type="submit" class="next">
                <a href="fish.php">→</a>
            </button>
            <button type="submit">確定</button>
        </form>
    </body>
</html>