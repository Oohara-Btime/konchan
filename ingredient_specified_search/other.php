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

        <ul class="other-list">
            <?php foreach ($stmt as $row): ?>
                <?php
                $ingredient_image = $row['ingredient_image'];
                $checked = '';
                if ($foodstuff_id_list !== null && in_array($row['id'], $foodstuff_id_list)) {
                    $checked = 'checked';
                    array_push($other_list, $row['id']);
                }
                ?>
                <li class="other-item">
                    <input type="image" src="<?php echo "../img/" . $ingredient_image; ?>" width="250px" height="250px">
                    <input type="checkbox" name="foodstuff_id_list[]" value="<?php echo $row['id']; ?>" <?php echo $checked; ?>>
                    <label>
                        <?php echo $row['ingredient_name']; ?>
                    </label>
                </li>
            <?php endforeach; ?>
        </ul>
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
    
    .other-list {
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        gap: 60px; /* 適切な間隔を設定してください */
    }

    .other-item {
        text-align: center;
        width: 250px; /* 要素の横幅を調整してください */
    }
</style>
</body>

</html>