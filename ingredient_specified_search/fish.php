<?php
include("../const.php");
session_start();

$foodstuff_id_list=filter_input(INPUT_POST, 'foodstuff_id_list' , FILTER_DEFAULT,FILTER_REQUIRE_ARRAY);

try {
    $db = new PDO(DSN, DB_USER, '');
    $stmt = $db->prepare('SELECT * FROM foodstuff WHERE ingredient_category_id = 2');

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
        <link rel="stylesheet" href="../css/fish.css">
        <title>こんちゃん</title>
    </head>

    <body>
        <h1>魚</h1>

        <form action="../index.php" method="post">
            <?php
            $fish_list=[];
            // 取得したデータを出力
            foreach ($stmt as $row) {
                $ingredient_image = $row['ingredient_image'];
                $checked="";
                if ($foodstuff_id_list != null && in_array($row['id'], $foodstuff_id_list)){
                    $checked=' checked';
                    array_push($fish_list, $row['id']);
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
            if ($foodstuff_id_list != null){
                foreach ($foodstuff_id_list as $row) {
                    if (!in_array($row, $fish_list )){
                ?>
                <input type="hidden" name="foodstuff_id_list[]" value="<?php echo $row ?>">
                <?php
                    }
                }
            }
                ?>
            <button type="submit">確定</button>
        </form>
    </body>
</html>