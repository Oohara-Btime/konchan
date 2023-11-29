<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>こんちゃん</title>
    <link rel="stylesheet" href="../../css/chatbot1.css">
</head>

<body>
    <!-- <h1>今日はどのような味のものが食べたいですか？</h1> -->
    <div class="continput">
        <p>
            どんな感じ食事が良いですか？
        </p>
        <!-- <h4>I hope you enjoyed it</h4>   -->
        <ul>
            <li>
                <input checked type="radio" name="1">
                <label>さっぱり系の料理</label>
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
                <input type="radio" name="1">
                <label>ガッツリ系の料理</label>
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
                <input type="radio" name="1">
                <label>辛い系の料理</label>
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
            <div class="circle_number current_page" >1</div>
            <div class="circle_number">2</div>
            <div class="circle_number">3</div>
        </div>
    </div>

    <button class="next">
        <a href="chatbot2.php">next</a>
    </button>
</body>

</html>