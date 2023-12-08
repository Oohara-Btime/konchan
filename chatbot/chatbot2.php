<?php
include("../const.php");
session_start();

$taste_id = filter_input(INPUT_POST, 'taste_id');

try {
    $db = new PDO(DSN, DB_USER, '');
    $stmt = $db->prepare('SELECT * FROM genre');

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
    <link rel="stylesheet" href="../css/chatbot2.css">
</head>

<body>
    <!-- <h1>今日はどのような味のものが食べたいですか？</h1> -->
    <div class="continput">
        <p>
            何風の料理が食べたいですか？
        </p>
        <!-- <h4>I hope you enjoyed it</h4>   -->
        <form action="chatbot3.php" method="post">
            <input type="hidden" name="taste_id" value="<?php echo $taste_id?>">
            <ul>
                <?php
                // 取得したデータを出力
                foreach ($stmt as $row) {
                ?>
                    <li>
                        <input type="radio" name="genre_id" value="<?php echo $row['id'] ?>">
                        <label><?php echo $row['genre_name']?></label>
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
                <?php
                }
                ?>
            </ul>

            <div class="parent">
                <div class="circle_number">1</div>
                <div class="circle_number current_page" >2</div>
                <div class="circle_number">3</div>
            </div>
        </div>

    <button type="submit" class="next">
        next
    </button>
    </form>
</body>

</html>