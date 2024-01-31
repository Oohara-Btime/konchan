<?php
include("../const.php");
session_start();

try {
    $db = new PDO(DSN, DB_USER, '');
    $stmt = $db->prepare('SELECT * FROM taste');

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
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/top.css">
        <link rel="stylesheet" href="../css/menu_bar.css">
        <link rel="stylesheet" href="../css/au.css">
        <link rel="stylesheet" href="../css/chatbot.css">
    </head>

    <body>
    <!-- <header id="header">
                <div class="inner">
                    <p class = logo>こんちゃん</p>
                </div>
                <div class="input-keyword">    
                    <form method="get" action="#" class="search_container">
                        <input type="text" size="60" placeholder="キーワード検索">
                        <input type="submit" value="&#xf002">
                    </form>
                </div>
            </header> -->

            <form action="" name="ingredientSpecificationForm" method="post">
            <section>
                <input id="drawer_input" class="drawer_hidden" type="checkbox">
                <div class="menu">
                    <a href="#" class="burger ">
                        <label for="drawer_input"><span class="bar bun-top"></span></label>
                        <label for="drawer_input"><span class="bar lettuce"></span></label>
                        <label for="drawer_input"><span class="bar mustard"></span></label>
                        <label for="drawer_input"><span class="bar ketchup"></span></label>
                        <label for="drawer_input"><span class="bar patty"></span></label>
                        <label for="drawer_input"><span class="bar bun-bot"></span></label>
                    </a>
                <nav class="nav_content">
                    <ul class="nav_list">
                        <li class="nav_item1"><a href="" onclick="ingredientSpecification('index.html'); return false">⌂ホーム</a></li>
                        <li class="nav_item2"><a href="">🔎検索</a></li>
                        <li class="nav_item3"><a href="" onclick="ingredientSpecification('ingredient_specified_search/meat.php'); return false">🥩肉</a></li>
                        <li class="nav_item3"><a href="" onclick="ingredientSpecification('ingredient_specified_search/fish.php'); return false">🐟魚</a></li>
                        <li class="nav_item3"><a href="" onclick="ingredientSpecification('ingredient_specified_search/vegetable.php'); return false">🥬野菜</a></li>
                        <li class="nav_item3"><a href="" onclick="ingredientSpecification('ingredient_specified_search/other.php'); return false">☣その他</a></li>
                        <li class="nav_item4"><a href="" onclick="ingredientSpecification('localCuisine/local_cuisine.php'); return false">郷土料理</a></li>
                    </ul>
                    <select class="old-select">
                        <option value="detailed_preference/login-input">新規登録</option>
                        <option value="detailed_preference/subscription_registration">有料会員登録</option>
                        <option value="detailed_preference/login-input">ログイン</option>
                        <option value="detailed_preference/email_address_changing">メールアドレス変更</option>
                        <option value="detailed_preference/password_changing">パスワード変更</option>
                        <option value="detailed_preference/password_resetting">パスワード再設定</option>
                        <option value="detailed_preference/password_reset">パスワードリセット</option>
                        <option value="detailed_preference/logout">ログアウト</option>
                        <option value="detailed_preference/unsubscribe">退会</option>
                        <option value="index" selected>⚙️詳細設定</option>
                    </select>

                    <!-- Bouton Select reconstruit -->
                    <div class="new-select">
                        <div class="selection">
                            <p>
                                <span></span>
                                <i></i>
                            </p>
                            <span></span>
                        </div>
                    </div>
                </nav>
            </section>
            </form>

    <!-- <h1>今日はどのような味のものが食べたいですか？</h1> -->
    <div class="continput">
        <p>
            どんな感じ食事が良いですか？
        </p>
        <!-- <h4>I hope you enjoyed it</h4>   -->
        <form action="chatbot2.php" method="post">
            <ul>
                <?php
                // 取得したデータを出力
                foreach ($stmt as $row) {
                ?>
                    <li>
                        <input type="radio" name="taste_id" value="<?php echo $row['id'] ?>">
                        <label><?php echo $row['taste_name'] ?>の料理</label>
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
                <div class="circle_number current_page">1</div>
                <div class="circle_number">2</div>
                <div class="circle_number">3</div>
            </div>
        </div>

        <button type="submit" class="next">
            next
        </button>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../js/menu_bar2.js"></script>
</body>

</html>