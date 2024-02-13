<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/gty.css">
    <link rel="stylesheet" href="../css/menu_bar.css">
    <link rel="stylesheet" href="../css/top.css">
    <link rel="stylesheet" href="../css/au.css">
    <link rel="stylesheet" href="../css/checkbox.css">
</head>

<body>
    <header id="header">
        <div class="inner">
            <p class=logo>こんちゃん</p>
        </div>
        <div class="input-keyword">
            <form method="post" action="recipe_list_screen/recipe_list_screen.php" class="search_container">
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



    <div class="images">
        <img src="https://kohacu.com/wp-content/uploads/2021/01/kohacu.com_samune_002789.png" alt="">
    </div>

    <!-- ボタン -->
    <div class="gacha-container">
        <!-- <div class="gacha-handle" ></div> -->
        <button class="gacha-body" id="start" onclick="disabled = true; random()">
            <div class="gacha-handle"></div>
            <class="gacha-image">
        </button>
    </div>




    <div id="overlay1"></div>

    <div id="popup1">
        <h2>表示された郷土料理を作ってみよう</h2>
        <p><span id="gty">表示場所</span></p>
        <button type="button" class="home" onclick="location.href='../localCuisine/local_cuisine.php'">郷土料理検索へ</button>
        <button type="button" class="home" onclick="location.href='../index.php'">ホームへ</button>
    </div>
</body>

</html>


<script>
    // ポップアップを開く関数
    function togglePopup1() {
        var overlay1 = document.getElementById("overlay1");
        var popup1 = document.getElementById("popup1");
        if (overlay1.style.display = "none") {
            overlay1.style.display = "block";
            popup1.style.display = "block";
        }
    }
</script>




<!-- ボタン動き -->
<script>
    const start = document.getElementById('start'); // 開始ボタン
    // スタートボタンをクリックしたら
    start.addEventListener('click', () => {
        // 画像を時計回りに1回転させる
        const animation = start.animate(
            // 途中の状態を表す配列
            [{
                    transform: 'rotateZ(0deg)'
                }, // 開始時の状態（0度）
                {
                    transform: 'rotateZ(120deg)'
                }, // 120度回転
            ],
            // タイミングに関する設定
            {
                fill: 'forwards', // アニメーション終了後の状態を保持
                duration: 1000, // 再生時間（1000ミリ秒）
            }
        );

        // アニメーションが120度回転した時に2秒間停止
        animation.onfinish = function() {
            setTimeout(function() {
                // もう一度120度回転して、途中でアニメーションを1秒間停止
                startAnimation();
            }, 200); // 1000ミリ秒 = 1秒
        };
    });

    // アニメーションを停止する関数
    function startAnimation() {
        start.animate(
            [{
                    transform: 'rotateZ(240deg)'
                }, // 240度回転
            ], {
                fill: 'forwards', // アニメーション終了後の状態を保持
                duration: 1000, // 再生時間（1000ミリ秒）
            }
        );



        // アニメーションが240度回転した時に2秒間停止
        setTimeout(function() {
            // さらに120度回転して、途中でアニメーションを2秒間停止
            start.animate(
                [{
                        transform: 'rotateZ(360deg)'
                    }, // 360度回転
                ], {
                    fill: 'forwards', // アニメーション終了後の状態を保持
                    duration: 1000, // 再生時間（1000ミリ秒）
                }
            );
        }, 1400); // 2000ミリ秒 = 2秒
        window.setTimeout(function() {
            togglePopup1()
        }, 3000);
    }
</script>




<script type="text/javascript">
    function random() {
        var rand = Math.floor(Math.random() * 47);
        if (rand == 0) msg = "北海道";
        if (rand == 1) msg = "青森県";
        if (rand == 2) msg = "秋田県";
        if (rand == 3) msg = "岩手県";
        if (rand == 4) msg = "山形県";
        if (rand == 5) msg = "宮城県";
        if (rand == 6) msg = "福島県";
        if (rand == 7) msg = "群馬県";
        if (rand == 8) msg = "栃木県";
        if (rand == 9) msg = "茨城県";
        if (rand == 10) msg = "千葉県";
        if (rand == 11) msg = "埼玉県";
        if (rand == 12) msg = "東京都";
        if (rand == 13) msg = "神奈川県";
        if (rand == 14) msg = "新潟県";
        if (rand == 15) msg = "富山県";
        if (rand == 16) msg = "長野県";
        if (rand == 17) msg = "山梨県";
        if (rand == 18) msg = "静岡県";
        if (rand == 19) msg = "石川県";
        if (rand == 20) msg = "福井県";
        if (rand == 21) msg = "岐阜県";
        if (rand == 22) msg = "愛知県";
        if (rand == 23) msg = "滋賀県";
        if (rand == 24) msg = "三重県";
        if (rand == 25) msg = "奈良県";
        if (rand == 26) msg = "和歌山県";
        if (rand == 27) msg = "京都府";
        if (rand == 28) msg = "大阪府";
        if (rand == 29) msg = "兵庫県";
        if (rand == 30) msg = "鳥取県";
        if (rand == 31) msg = "岡山県";
        if (rand == 32) msg = "島根県";
        if (rand == 33) msg = "広島県";
        if (rand == 34) msg = "山口県";
        if (rand == 35) msg = "愛媛県";
        if (rand == 36) msg = "香川県";
        if (rand == 37) msg = "高知県";
        if (rand == 38) msg = "徳島県";
        if (rand == 39) msg = "福岡県";
        if (rand == 40) msg = "大分県";
        if (rand == 41) msg = "宮城県";
        if (rand == 42) msg = "佐賀県";
        if (rand == 43) msg = "長崎県";
        if (rand == 44) msg = "熊本県";
        if (rand == 45) msg = "鹿児島";
        if (rand == 46) msg = "沖縄県";
        document.getElementById("gty").innerHTML = msg;
    }
</script>