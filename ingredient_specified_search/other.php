<?php
    include("../const.php");
    session_start();

    $foodstuff_id_list = filter_input(INPUT_POST, 'foodstuff_id_list', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    $other_list = [];

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
        <form action="../index.php" method="post">
            <div class="ingredient-container">
                <?php foreach ($stmt as $row): ?>
                    <?php
                    $ingredient_image = $row['ingredient_image'];
                    $checked = '';
                    if ($foodstuff_id_list !== null && in_array($row['id'], $foodstuff_id_list)) {
                        $checked = 'checked';
                        array_push($other_list, $row['id']);
                    }
                    ?>
                    <div class="ingredient-item">
                            <input id="<?php echo $row['id'] ?>" type="checkbox" name="foodstuff_id_list[]" value="<?php echo $row['id'] ?>" <?php echo $checked; ?>>
                            <label for="<?php echo $row['id'] ?>" class="check-box">
                                <img src="<?php echo "../img/" . $row['ingredient_image']; ?>" width="250px" height="200px" alt="Ingredient Image">
                                <div class="title"><?php echo $row['ingredient_name'] ?></div>
                            </label>
                        </div>
                <?php endforeach; ?>
            </div>
            <?php
            if ($foodstuff_id_list != null) {
                foreach ($foodstuff_id_list as $row) {
                    if (!in_array($row, $other_list)) {
                        ?>
                        <input type="hidden" name="foodstuff_id_list[]" value="<?php echo $row ?>">
                        <?php
                    }
                }
            }
            ?>
            <button class="finish" type="submit">確定</button>
        </form>
    </body>
</html>