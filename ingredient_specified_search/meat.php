<?php
include("../const.php");
session_start();

$foodstuff_id_list = filter_input(INPUT_POST, 'foodstuff_id_list', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

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
        <div class="ingredient-container">
            <?php foreach ($stmt as $row): ?>
                <div class="ingredient-item">
                    <input type="image" src="<?php echo "../img/" . $row['ingredient_image']; ?>" width="250px"
                        height="200px">
                    <input type="checkbox" name="foodstuff_id_list[]" value="<?php echo $row['id'] ?>">
                    <label>
                        <?php echo $row['ingredient_name'] ?>
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
        if ($foodstuff_id_list != null) {
            foreach ($foodstuff_id_list as $row) {
                if (!in_array($row, $meat_list)) {
                    ?>
                    <input type="hidden" name="foodstuff_id_list[]" value="<?php echo $row ?>">
                    <?php
                }
            }
        }
        ?>
        <button class="finish" type="submit">確定</button>
    </form>
    <style>
        .finish {
            /* フォント関連のスタイル */
            font-size: 40px;

            /* サイズを大きくする */
            font-weight: bold;

            /* ボタンの色と背景色 */
            color: #ffffff;
            background-color: black;

            /* ボタンを中央に配置する */
            display: block;
            margin: 0 auto;
            margin-top: 100px;
            margin-bottom: 20px;
        }

        /* マウスホバー時のスタイル */
        button:hover {
            background-color: #2980b9;
            border-color: #3498db;
        }

        /* アクティブ（クリック時）のスタイル */
        button:active {
            background-color: #1f618d;
            border-color: #2874a6;
        }

        .ingredient-container {
            display: flex;
            flex-wrap: wrap;
            gap: 75px;
            /* 適切な間隔を設定してください */
        }

        .ingredient-item {
            text-align: center;
            width: 250px;
            /* 要素の横幅を調整してください */
        }
    </style>
</body>

</html>