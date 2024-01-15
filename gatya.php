<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/gty.css">
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
        <h2>クーポン取得</h2>
        <span id="gty">表示場所</span>
        <p><a href="index.php">ホームに戻る</a></p>
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
        var rand = Math.floor(Math.random() * 4);
        if (rand == 0) msg = "A賞";
        if (rand == 1) msg = "B賞";
        if (rand == 2) msg = "C賞";
        if (rand == 3) msg = "D賞";
        document.getElementById("gty").innerHTML = msg;
    }
</script>