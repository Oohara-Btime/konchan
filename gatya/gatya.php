<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/gty.css">
    </head>

<body>
    <!-- <form><input type="button" id="start" class="btn-circle-fishy" value="ガチャ" onClick="random()">
        <span id="gty">表示場所</span>
    </form> -->



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
            [
                { transform: 'rotateZ(0deg)' },    // 開始時の状態（0度）
                { transform: 'rotateZ(120deg)' },  // 120度回転
            ],
            // タイミングに関する設定
            {
                fill: 'forwards',  // アニメーション終了後の状態を保持
                duration: 1000,     // 再生時間（1000ミリ秒）
            }
        );

        // アニメーションが120度回転した時に2秒間停止
        animation.onfinish = function () {
            setTimeout(function () {
                // もう一度120度回転して、途中でアニメーションを1秒間停止
                startAnimation();
            }, 200); // 1000ミリ秒 = 1秒
        };
    });

    // アニメーションを停止する関数
    function startAnimation() {
        start.animate(
            [
                { transform: 'rotateZ(240deg)' },  // 240度回転
            ],
            {
                fill: 'forwards',  // アニメーション終了後の状態を保持
                duration: 1000,     // 再生時間（1000ミリ秒）
            }
        );



        // アニメーションが240度回転した時に2秒間停止
        setTimeout(function () {
            // さらに120度回転して、途中でアニメーションを2秒間停止
            start.animate(
                [
                    { transform: 'rotateZ(360deg)' },  // 360度回転
                ],
                {
                    fill: 'forwards',  // アニメーション終了後の状態を保持
                    duration: 1000,     // 再生時間（1000ミリ秒）
                }
            );
        }, 1400); // 2000ミリ秒 = 2秒
        window.setTimeout(function(){
            togglePopup1()
        },3000);
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