<?php
include("../const.php");
session_start();

$cooking_time = filter_input(INPUT_POST, 'cooking_time');

try {
    $db = new PDO(DSN, DB_USER, '');
    $stmt = $db->prepare('SELECT * FROM recipe');

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
    <title>こんちゃん</title>
    <link rel="stylesheet" href="../css/chatbot3.css">
</head>

<body>
    <!-- <h1>今日はどのような味のものが食べたいですか？</h1> -->
    <div class="continput">
        <p>
            調理時間はどれくらいがですか？
        </p>
        <!-- <h4>I hope you enjoyed it</h4>   -->
        <form action="recipi_list_screen.php" method="post">
            <ul>
                <li>
                    <input type="radio" name="recipe" value="<?php echo $row['id']?>">
                    <label>10分以内</label>
                    <div class="bullet">
                        <div class="line zero"></div>
                        <div class="line one"></div>
                        <div class="line two"></div>
                        <div class="line three"></div>
                        <div class="line four"></div>
                        <div class="line five"></div>
                        <div class="line six"></div>
                        <div class="line seven"></div>
                    </div>
                </li>
                <li>
                <input type="radio" name="recipe" value="<?php echo $row['id']?>">
                    <label>10～30分</label>
                    <div class="bullet">
                        <div class="line zero"></div>
                        <div class="line one"></div>
                        <div class="line two"></div>
                        <div class="line three"></div>
                        <div class="line four"></div>
                        <div class="line five"></div>
                        <div class="line six"></div>
                        <div class="line seven"></div>
                    </div>
                </li>
                <li>
                <input type="radio" name="recipe" value="<?php echo $row['id']?>">
                    <label>30分以上</label>
                    <div class="bullet">
                        <div class="line zero"></div>
                        <div class="line one"></div>
                        <div class="line two"></div>
                        <div class="line three"></div>
                        <div class="line four"></div>
                        <div class="line five"></div>
                        <div class="line six"></div>
                        <div class="line seven"></div>
                    </div>
                </li>
            </ul>
            <div class="parent">
                <div class="circle_number">1</div>
                <div class="circle_number">2</div>
                <div class="circle_number current_page">3</div>
            </div>
        </div>

        <button type="submit" class="next">
            <a href ="../recipi_list_screen/recipi_list_screen.php">next</a>
        </button>
    </form>
</body>

</html>