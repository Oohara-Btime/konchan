<?php
    include("const.php");
    session_start();
    $foodstuff_id_list=filter_input(INPUT_POST, 'foodstuff_id_list' , FILTER_DEFAULT,FILTER_REQUIRE_ARRAY);
    $stmt=null;
    // idをコンマ区切りの文字列にする。(配列を文字列に変換)
    if($foodstuff_id_list != null){
    $ids = implode( ',', $foodstuff_id_list);
        try {
            $db = new PDO(DSN, DB_USER, '');
            // 受けとったidの食材情報を取得
            $stmt = $db->prepare('SELECT * FROM foodstuff where id in ('.$ids.') and delete_flag = false');
        
            // SQL実行
            $stmt->execute();
            $count = $stmt->rowCount();
        } catch (PDOException $e) {
            echo "接続に失敗しました。";
            echo $e->getMessage();
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/top.css">
        <link rel="stylesheet" href="css/menu_bar.css">
        <link rel="stylesheet" href="css/au.css">
    </head>
    <body>
        <header id="header">
            <div class="inner">
                <p class = logo>こんちゃん</p>
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
                    <li class="nav_item1"><a href="index.html">⌂ホーム</a></li>
                    <li class="nav_item2"><a href="">🔎検索</a></li>
                    <li class="nav_item3"><a href="ingredient_specified_search/meat.php">肉</a></li>
                    <li class="nav_item3"><a href="ingredient_specified_search/fish.php">魚</a></li>
                    <li class="nav_item3"><a href="ingredient_specified_search/vegetable.php">野菜</a></li>
                    <li class="nav_item3"><a href="ingredient_specified_search/other.php">その他</a></li>
                    <li class="nav_item4"><a href="localCuisine/local_cuisine.php">郷土料理</a></li>
                </ul>
                    <select class="old-select">
                        <option value="detailed_preference/login-input">新規登録</option>
                        <option value="detailed_preference/subscription_registration">有料会員登録</option>
                        <option value="detailed_preference/login-input">ログイン</option>
                        <option value="detailed_preference/email_address_changing">メールアドレス変更</option>
                        <!-- <option value="detailed_preference/password_changing">パスワード変更</option> -->
                        <!-- <option value="detailed_preference/password_resetting">パスワード再設定</option> -->
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

        <form action="" name="ingredientSpecificationForm" method="post">
            <section>
                    <div class="food-button">
                            <button type="button" onclick="ingredientSpecification('ingredient_specified_search/meat.php')"><img src="img/meat.jpg" class="meat_button" alt="#" width="350" height="300"></button>
                            <button type="button" onclick="ingredientSpecification('ingredient_specified_search/fish.php')"><img src="img/fish.jpg" class="fish_button" alt="#" width="350" height="300"></button>
                            <button type="button" onclick="ingredientSpecification('ingredient_specified_search/vegetable.php')"><img src="img/vegetable.jpg" class="vegetable_button" alt="#" width="350" height="300"></button>
                    </div>

                    <div class="other-button">
                            <button type="button" onclick="ingredientSpecification('ingredient_specified_search/other.php')"><img src="img/other.jpg" class="other_button" alt="#" width="528" height="230"></button>
                            <button type="button" onclick="ingredientSpecification('localCuisine/local_cuisine.php')"><img src="img/other.jpg" class="local_cuisine.button" alt="#" width="528" height="230"></button>
                    </div>

                <div class="chat_bot-button">
                        <button type="button" onclick="ingredientSpecification('chatbot/chatbot1.php')"><img src="img/ダウンロード (2).jpg" class="chatbot_button" alt="#" width="528" height="230"></button>
                        <button type="button" onclick="ingredientSpecification('ingredient_specified_search/other.php')"><img src="img/ガチャ.jpg" alt="#" width="528" height="230"></button>
                </div>

                <!-- <div class="capsule_toy-button">
                </div> -->
            </section>

            <section class="cooking">
                <div class="">
                    <!-- <form action="recipi_list_screen/recipi_list_screen.php"> -->
                    <?php
                        // 取得したデータを出力
                        if ($stmt!== null) {
                            foreach ($stmt as $row) {
                    ?>
                        <input type="checkbox" name="foodstuff_id_list[]" value="<?php echo $row['id'] ?>" checked>
                        <label><?php echo $row['ingredient_name'] ?></label><br>
                        <?php
                        }
                        ?>
                        <br>
                        <button type="button"  onclick="ingredientSpecification('recipi_list_screen/recipi_list_screen.php')">調理開始</button>
                        <?php
                        }
                        ?>
                    
                </div>
            </section>
        </form>


        <script>
            var form = document.ingredientSpecificationForm;
            function ingredientSpecification(page){
                form.action=page;
                form.submit();
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/menu_bar.js"></script>
    </body>
</html>