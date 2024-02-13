<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>無題ドキュメント</title>
    <link href="../css/local_cuisine.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/menu_bar.css">
    <link rel="stylesheet" href="../css/top.css">
    <link rel="stylesheet" href="../css/au.css">
    <link rel="stylesheet" href="../css/checkbox.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
</head>

<body>
    <header id="header">
        <div class="inner">
            <p class=logo>こんちゃん</p>
        </div>
        <div class="input-keyword">
            <form method="post" action="../recipe_list_screen/recipe_list_screen.php" class="search_container">
                <input type="text" name="keyword" size="60" placeholder="キーワード検索">
                <input type="submit" value="&#xf002">
            </form>
        </div>
    </header>

    <section>
        <input id="drawer_input" class="drawer_hidden" type="checkbox">
        <div class="menu">
            <a href="#" class="burger">
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
                <li class="nav_item1"><a href="../index.php" onclick="ingredientSpecification('../index.php'); return false">⌂ホーム</a></li>
                <li class="nav_item2"><a href="">🔎検索</a></li>
                <li class="nav_item3"><a href="../ingredient_specified_search/meat.php" onclick="ingredientSpecification('../ingredient_specified_search/meat.php'); return false">🥩肉</a></li>
                <li class="nav_item3"><a href="../ingredient_specified_search/fish.php" onclick="ingredientSpecification('../ingredient_specified_search/fish.php'); return false">🐟魚</a></li>
                <li class="nav_item3"><a href="../ingredient_specified_search/vegetable.php" onclick="ingredientSpecification('../ingredient_specified_search/vegetable.php'); return false">🥬野菜</a></li>
                <li class="nav_item3"><a href="../ingredient_specified_search/other.php" onclick="ingredientSpecification('../ingredient_specified_search/other.php'); return false">☣その他</a></li>
                <li class="nav_item4"><a href="localCuisine/local_cuisine.php" onclick="ingredientSpecification('localCuisine/local_cuisine.php'); return false">郷土料理</a></li>
            </ul>
            <select class="old-select">
                <option value="../detailed_preference/login-input">新規登録</option>
                <option value="../detailed_preference/subscription_registration">有料会員登録</option>
                <option value="../detailed_preference/login-input">ログイン</option>
                <option value="../detailed_preference/email_address_changing">メールアドレス変更</option>
                <!-- <option value="detailed_preference/password_changing">パスワード変更</option> -->
                <!-- <option value="detailed_preference/password_resetting">パスワード再設定</option> -->
                <option value="../detailed_preference/password_reset">パスワードリセット</option>
                <option value="../detailed_preference/logout-input">ログアウト</option>
                <option value="../detailed_preference/unsubscribe">退会</option>
                <option value="../index" selected>⚙️詳細設定</option>
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
    <script>
        var form = document.ingredientSpecificationForm;

        function ingredientSpecification(page) {
            form.action = page;
            form.submit();
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/menu_bar.js"></script>

    <script>
        function togglePopup(prefectures_id) {
            document.map.prefectures_id.value = prefectures_id;
            document.map.submit();
        }
    </script>


    <!-- 日本地図 -->
    <form name="map" action="../recipe_list_screen/recipe_list_screen.php" method="post">
        <input type="hidden" name="prefectures_id">
        <div id="japan-map" class="clearfix">

            <div id="hokkaido-touhoku" class="clearfix">
                <p class="area-title">北海道・東北</p>
                <div class="area">
                    <div id="hokkaido" onclick="togglePopup(1)">
                        <p>北海道</p>
                    </div>


                    <div id="aomori" onclick="togglePopup(2)">
                        <p>青森</p>
                    </div>


                    <div id="akita" onclick="togglePopup(3)">
                        <p>秋田</p>
                    </div>


                    <div id="iwate" onclick="togglePopup(4)">
                        <p>岩手</p>
                    </div>

                    <div id="yamagata" onclick="togglePopup(5)">
                        <p>山形</p>
                    </div>

                    <div id="miyagi" onclick="togglePopup(6)">
                        <p>宮城</p>
                    </div>


                    <div id="fukushima" onclick="togglePopup(7)">
                        <p>福島</p>
                    </div>

                </div>
            </div>

            <div id="kantou">
                <p class="area-title">関東</p>
                <div class="area">

                    <div id="gunma" onclick="togglePopup(8)">
                        <p>群馬</p>
                    </div>


                    <div id="tochigi" onclick="togglePopup(9)">
                        <p>栃木</p>
                    </div>


                    <div id="ibaraki" onclick="togglePopup(10)">
                        <p>茨城</p>
                    </div>


                    <div id="saitama" onclick="togglePopup(11)">
                        <p>埼玉</p>
                    </div>

                    <div id="chiba" onclick="togglePopup(12)">
                        <p>千葉</p>
                    </div>

                    <div id="tokyo" onclick="togglePopup(13)">
                        <p>東京</p>
                    </div>

                    <div id="kanagawa" onclick="togglePopup(14)">
                        <p>神奈川</p>
                    </div>

                </div>
            </div>

            <div id="tyubu" class="clearfix">
                <p class="area-title">中部</p>
                <div class="area">

                    <div id="nigata" onclick="togglePopup(15)">
                        <p>新潟</p>
                    </div>


                    <div id="toyama" onclick="togglePopup(16)">
                        <p>富山</p>
                    </div>

                    <div id="ishikawa" onclick="togglePopup(17)">
                        <p>石川</p>
                    </div>

                    <div id="fukui" onclick="togglePopup(18)">
                        <p>福井</p>
                    </div>

                    <div id="nagano" onclick="togglePopup(19)">
                        <p>長野</p>
                    </div>

                    <div id="gifu" onclick="togglePopup(20)">
                        <p>岐阜</p>
                    </div>

                    <div id="yamanashi" onclick="togglePopup(21)">
                        <p>山梨</p>
                    </div>

                    <div id="aichi" onclick="togglePopup(22)">
                        <p>愛知</p>
                    </div>

                    <div id="shizuoka" onclick="togglePopup(23)">
                        <p>静岡</p>
                    </div>

                </div>
            </div>

            <div id="kinki" class="clearfix">
                <p class="area-title">近畿</p>
                <div class="area">

                    <div id="kyoto" onclick="togglePopup(24)">
                        <p>京都</p>
                    </div>

                    <div id="shiga" onclick="togglePopup(25)">
                        <p>滋賀</p>
                    </div>

                    <div id="osaka" onclick="togglePopup(26)">
                        <p>大阪</p>
                    </div>

                    <div id="nara" onclick="togglePopup(27)">
                        <p>奈良</p>
                    </div>

                    <div id="mie" onclick="togglePopup(28)">
                        <p>三重</p>
                    </div>

                    <div id="wakayama" onclick="togglePopup(29)">
                        <p>和歌山</p>
                    </div>

                    <div id="hyougo" onclick="togglePopup(30)">
                        <p>兵庫</p>
                    </div>

                </div>
            </div>

            <div id="tyugoku" class="clearfix">
                <p class="area-title">中国</p>
                <div class="area">

                    <div id="tottori" onclick="togglePopup(31)">
                        <p>鳥取</p>
                    </div>

                    <div id="okayama" onclick="togglePopup(32)">
                        <p>岡山</p>
                    </div>

                    <div id="shimane" onclick="togglePopup(33)">
                        <p>島根</p>
                    </div>

                    <div id="hiroshima" onclick="togglePopup(34)">
                        <p>広島</p>
                    </div>


                    <div id="yamaguchi" onclick="togglePopup(35)">
                        <p>山口</p>
                    </div>

                </div>
            </div>

            <div id="shikoku" class="clearfix">
                <p class="area-title">四国</p>
                <div class="area">

                    <div id="kagawa" onclick="togglePopup(36)">
                        <p>香川</p>
                    </div>

                    <div id="ehime" onclick="togglePopup(37)">
                        <p>愛媛</p>
                    </div>

                    <div id="tokushima" onclick="togglePopup(38)">
                        <p>徳島</p>
                    </div>

                    <div id="kouchi" onclick="togglePopup(39)">
                        <p>高知</p>
                    </div>

                </div>
            </div>

            <div id="kyusyu" class="clearfix">
                <p class="area-title">九州・沖縄</p>
                <div class="area">

                    <div id="fukuoka" onclick="togglePopup(40)">
                        <p>福岡</p>
                    </div>

                    <div id="saga" onclick="togglePopup(41)">
                        <p>佐賀</p>
                    </div>

                    <div id="nagasaki" onclick="togglePopup(42)">
                        <p>長崎</p>
                    </div>

                    <div id="oita" onclick="togglePopup(43)">
                        <p>大分</p>
                    </div>

                    <div id="kumamoto" onclick="togglePopup(44)">
                        <p>熊本</p>
                    </div>

                    <div id="miyazaki" onclick="togglePopup(45)">
                        <p>宮崎</p>
                    </div>

                    <div id="kagoshima" onclick="togglePopup(46)">
                        <p>鹿児島</p>
                    </div>

                    <div id="okinawa" onclick="togglePopup(47)">
                        <p>沖縄</p>
                    </div>

                </div>
            </div>

        </div> <!-- japan-map -->
    </form>
</body>

</html>