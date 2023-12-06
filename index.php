<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/top.css">
    <link rel="stylesheet" href="css/menu_bar.css">
</head>

<body>
    <header id="header">
        <div class="inner">
            <p class=logo>こんちゃん</p>
        </div>
        <div class="input-keyword">
            <form method="get" action="#" class="search_container">
                <input type="text" size="60" placeholder="キーワード検索">
                <input type="submit" value="&#xf002">
            </form>
        </div>
    </header>

    <section>
        <input id="drawer_input" class="drawer_hidden" type="checkbox">
        <div class="menu">
            <a href="#" class="burger on">
                <label for="drawer_input"><span class="bar bun-top"></span></label>
                <label for="drawer_input"><span class="bar lettuce"></span></label>
                <label for="drawer_input"><span class="bar mustard"></span></label>
                <label for="drawer_input"><span class="bar ketchup"></span></label>
                <label for="drawer_input"><span class="bar patty"></span></label>
                <label for="drawer_input"><span class="bar bun-bot"></span></label>
            </a>
        </div>
        <nav class="nav_content">
            <ul class="nav_list">
                <li class="nav_item1"><a href="">⌂ホーム</a></li>
                <li class="nav_item2"><a href="">🔎検索</a></li>
                <li class="nav_item3"><a href="">肉</a></li>
                <li class="nav_item3"><a href="">魚</a></li>
                <li class="nav_item3"><a href="">野菜</a></li>
                <li class="nav_item3"><a href="">麺類、米類</a></li>
                <li class="nav_item4"><a href="">郷土料理</a></li>
                <li class="nav_item5"><a href="">⚙️詳細設定</a></li>
            </ul>
        </nav>
    </section>

    <section>
        <div class="food-button">
            <img src="../こんちゃん画像/meat.jpg" class="meat_button" alt="#" width="350" height="300">
            <img src="../こんちゃん画像/fish.jpg" class="fish_button" alt="#" width="350" height="300">
            <img src="../こんちゃん画像/vegetable.jpg" class="vegetable_button" alt="#" width="350" height="300">
        </div>

        <div class="other-button">
            <img src="../こんちゃん画像/meat.jpg" alt="#" width="528" height="150">
            <img src="../こんちゃん画像/fish.jpg" alt="#" width="528" height="150">
        </div>

        <div class="chat_bot-button">
            <img src="../こんちゃん画像/meat.jpg" alt="#" width="1061" height="200">
        </div>

        <div class="capsule_toy-button">
            <img src="../こんちゃん画像/meat.jpg" alt="#" width="1061" height="200">
        </div>
    </section>

    <section>
        <div class="text">

        </div>
    </section>

    <script src="js/menu_bar.js"></script>
</body>

</html>