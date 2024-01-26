<?php
include("../const.php");
session_start();

$genre_id = filter_input(INPUT_POST, 'genre_id');
$taste_id = filter_input(INPUT_POST, 'taste_id');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>こんちゃん</title>
    <link rel="stylesheet" href="../css/chatbot.css">
</head>

<body>
    <!-- <h1>今日はどのような味のものが食べたいですか？</h1> -->
    <div class="continput">
        <p>
            調理時間はどれくらいがですか？
        </p>
        <!-- <h4>I hope you enjoyed it</h4>   -->
        <form action="../recipi_list_screen/recipi_list_screen.php" method="post">
            <input type="hidden" name="taste_id" value="<?php echo $taste_id ?>">
            <input type="hidden" name="genre_id" value="<?php echo $genre_id ?>">
            <ul>
                <li>
                    <input type="radio" name="cooking_time" value="10">
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
                    <input type="radio" name="cooking_time" value="30">
                    <label>30分以内</label>
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
                    <input type="radio" name="cooking_time" value="60">
                    <label>60分以内</label>
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
        next
    </button>

    </form>
</body>

</html>