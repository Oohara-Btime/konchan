<?php
include("../const.php");
session_start();

$prefectures_id = filter_input(INPUT_POST, 'prefectures_id');
$taste_id = filter_input(INPUT_POST, 'taste_id');
$genre_id = filter_input(INPUT_POST, 'genre_id');
$cooking_time = filter_input(INPUT_POST, 'cooking_time');
$sql = '';

if ($prefectures_id != '' && $prefectures_id != null) {
    $sql .= 'SELECT * FROM recipe WHERE prefectures_id = ' . $prefectures_id;
} elseif (
    $taste_id != '' && $taste_id != null &&
    $genre_id != '' && $genre_id != null &&
    $cooking_time != '' && $cooking_time != null
) {
    $sql .= 'SELECT * FROM recipe JOIN recipe_taste on recipe.id = recipe_taste.recipe_id and recipe_taste.taste_id = ' . $taste_id . ' and recipe_taste.delete_flag = false ' .
        ' JOIN recipe_genre on recipe.id = recipe_genre.recipe_id and recipe_genre.genre_id = ' . $genre_id . ' and recipe_genre.delete_flag = false ' .
        ' WHERE recipe.cooking_time <= ' . $cooking_time . ' and recipe.delete_flag = false';
}
try {
    $db = new PDO(DSN, DB_USER, '');
    if ($sql != '') {
        $stmt = $db->prepare($sql);
        // SQL実行
        $stmt->execute();
    }
} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>無題ドキュメント</title>
    <link href="../css/local_cuisine.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
</head>

<body>
    <!-- 北海道 -->
    <!-- オーバーレイ -->
    <div id="overlay1"></div>
    <div id="overlay2"></div>
    <div id="overlay3"></div>
    <div id="overlay4"></div>
    <div id="overlay5"></div>
    <div id="overlay6"></div>
    <div id="overlay7"></div>
    <div id="overlay8"></div>
    <div id="overlay9"></div>
    <div id="overlay10"></div>
    <div id="overlay11"></div>
    <div id="overlay12"></div>
    <div id="overlay13"></div>
    <div id="overlay14"></div>
    <div id="overlay15"></div>
    <div id="overlay16"></div>
    <div id="overlay17"></div>
    <div id="overlay18"></div>
    <div id="overlay19"></div>
    <div id="overlay20"></div>
    <div id="overlay21"></div>
    <div id="overlay22"></div>
    <div id="overlay23"></div>
    <div id="overlay24"></div>
    <div id="overlay25"></div>
    <div id="overlay26"></div>
    <div id="overlay27"></div>
    <div id="overlay28"></div>
    <div id="overlay29"></div>
    <div id="overlay30"></div>
    <div id="overlay31"></div>
    <div id="overlay32"></div>
    <div id="overlay33"></div>
    <div id="overlay34"></div>
    <div id="overlay35"></div>
    <div id="overlay36"></div>
    <div id="overlay37"></div>
    <div id="overlay38"></div>
    <div id="overlay39"></div>
    <div id="overlay40"></div>
    <div id="overlay41"></div>
    <div id="overlay42"></div>
    <div id="overlay43"></div>
    <div id="overlay44"></div>
    <div id="overlay45"></div>
    <div id="overlay46"></div>
    <div id="overlay47"></div>

    <!-- ポップアップ -->
    <div id="popup1">
        <span id="closeBtn" onclick="closePopup1()">×</span>
        <h2>郷土料理</h2>
        <form action="../recipi_list_screen/recipi_list_screen.php" method="post">
            <input type="image" src=<?php echo ("../pic/" . $recipe); ?> width = "250px" height ="250px">
            <button type="button" onclick="location.href='../index.php'">ホームに戻る</button>
        </form>
    </div>


    <!-- ポップアップ -->
    <div id="popup2">
        <span id="closeBtn" onclick="closePopup2()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup3">
        <span id="closeBtn" onclick="closePopup3()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup4">
        <span id="closeBtn" onclick="closePopup4()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup5">
        <span id="closeBtn" onclick="closePopup5()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup6">
        <span id="closeBtn" onclick="closePopup6()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup7">
        <span id="closeBtn" onclick="closePopup7()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup8">
        <span id="closeBtn" onclick="closePopup8()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup9">
        <span id="closeBtn" onclick="closePopup9()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup10">
        <span id="closeBtn" onclick="closePopup10()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup11">
        <span id="closeBtn" onclick="closePopup11()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup12">
        <span id="closeBtn" onclick="closePopup12()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup13">
        <span id="closeBtn" onclick="closePopup13()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup14">
        <span id="closeBtn" onclick="closePopup14()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup15">
        <span id="closeBtn" onclick="closePopup15()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup16">
        <span id="closeBtn" onclick="closePopup16()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup17">
        <span id="closeBtn" onclick="closePopup17()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup18">
        <span id="closeBtn" onclick="closePopup18()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup19">
        <span id="closeBtn" onclick="closePopup19()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup20">
        <span id="closeBtn" onclick="closePopup20()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup21">
        <span id="closeBtn" onclick="closePopup21()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup22">
        <span id="closeBtn" onclick="closePopup22()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup23">
        <span id="closeBtn" onclick="closePopup23()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup24">
        <span id="closeBtn" onclick="closePopup24()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup25">
        <span id="closeBtn" onclick="closePopup25()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup26">
        <span id="closeBtn" onclick="closePopup26()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup27">
        <span id="closeBtn" onclick="closePopup27()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup28">
        <span id="closeBtn" onclick="closePopup28()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup29">
        <span id="closeBtn" onclick="closePopup29()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>


    <!-- ポップアップ -->
    <div id="popup30">
        <span id="closeBtn" onclick="closePopup30()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup31">
        <span id="closeBtn" onclick="closePopup31()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup32">
        <span id="closeBtn" onclick="closePopup32()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup33">
        <span id="closeBtn" onclick="closePopup33()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup34">
        <span id="closeBtn" onclick="closePopup34()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup35">
        <span id="closeBtn" onclick="closePopup35()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup36">
        <span id="closeBtn" onclick="closePopup36()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup37">
        <span id="closeBtn" onclick="closePopup37()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup38">
        <span id="closeBtn" onclick="closePopup38()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup39">
        <span id="closeBtn" onclick="closePopup39()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup40">
        <span id="closeBtn" onclick="closePopup40()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup41">
        <span id="closeBtn" onclick="closePopup41()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup42">
        <span id="closeBtn" onclick="closePopup42()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>


    <!-- ポップアップ -->
    <div id="popup43">
        <span id="closeBtn" onclick="closePopup43()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>


    <!-- ポップアップ -->
    <div id="popup44">
        <span id="closeBtn" onclick="closePopup44()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup45">
        <span id="closeBtn" onclick="closePopup45()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup46">
        <span id="closeBtn" onclick="closePopup46()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>

    <!-- ポップアップ -->
    <div id="popup47">
        <span id="closeBtn" onclick="closePopup47()">×</span>
        <h2>ポップアップ</h2>
        <p>ここにポップアップのコンテンツを追加できます。</p>
    </div>



    <!-- ボタンをクリックした時にポップアップを表示 -->
    <!-- <button onclick="togglePopup()">ポップアップを表示/非表示</button> -->

    <script>
        // ポップアップの表示/非表示を切り替える関数
        function togglePopup1() {
            var overlay1 = document.getElementById("overlay1");
            var popup1 = document.getElementById("popup1");
            if (overlay1.style.display === "none") {
                overlay1.style.display = "block";
                popup1.style.display = "block";
            } else {
                overlay1.style.display = "none";
                popup1.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup1() {
            document.getElementById("overlay1").style.display = "none";
            document.getElementById("popup1").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay1").addEventListener("click", function () {
            var overlay1 = document.getElementById("overlay1");
            var popup1 = document.getElementById("popup1");

            overlay1.style.display = "none";
            popup1.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup2() {
            var overlay2 = document.getElementById("overlay2");
            var popup2 = document.getElementById("popup2");
            if (overlay2.style.display === "none") {
                overlay2.style.display = "block";
                popup2.style.display = "block";
                document.body.style.overflow = 'hidden'; // Disable scrolling
            } else {
                overlay2.style.display = "none";
                popup2.style.display = "none";
                document.body.style.overflow = 'auto'; // Enable scrolling
            }
        }
        // ポップアップを閉じる関数
        function closePopup2() {
            document.getElementById("overlay2").style.display = "none";
            document.getElementById("popup2").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay2").addEventListener("click", function () {
            var overlay2 = document.getElementById("overlay2");
            var popup2 = document.getElementById("popup2");

            overlay2.style.display = "none";
            popup2.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        });



        // ポップアップの表示/非表示を切り替える関数
        function togglePopup3() {
            var overlay3 = document.getElementById("overlay3");
            var popup3 = document.getElementById("popup3");
            if (overlay3.style.display === "none") {
                overlay3.style.display = "block";
                popup3.style.display = "block";
            } else {
                overlay3.style.display = "none";
                popup3.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup3() {
            document.getElementById("overlay3").style.display = "none";
            document.getElementById("popup3").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay3").addEventListener("click", function () {
            var overlay3 = document.getElementById("overlay3");
            var popup3 = document.getElementById("popup3");

            overlay3.style.display = "none";
            popup3.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup4() {
            var overlay4 = document.getElementById("overlay4");
            var popup4 = document.getElementById("popup4");
            if (overlay4.style.display === "none") {
                overlay4.style.display = "block";
                popup4.style.display = "block";
            } else {
                overlay4.style.display = "none";
                popup4.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup4() {
            document.getElementById("overlay4").style.display = "none";
            document.getElementById("popup4").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay4").addEventListener("click", function () {
            var overlay4 = document.getElementById("overlay4");
            var popup4 = document.getElementById("popup4");

            overlay4.style.display = "none";
            popup4.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup5() {
            var overlay5 = document.getElementById("overlay5");
            var popup5 = document.getElementById("popup5");
            if (overlay5.style.display === "none") {
                overlay5.style.display = "block";
                popup5.style.display = "block";
            } else {
                overlay5.style.display = "none";
                popup5.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup5() {
            document.getElementById("overlay5").style.display = "none";
            document.getElementById("popup5").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay5").addEventListener("click", function () {
            var overlay5 = document.getElementById("overlay5");
            var popup5 = document.getElementById("popup5");

            overlay5.style.display = "none";
            popup5.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup6() {
            var overlay6 = document.getElementById("overlay6");
            var popup6 = document.getElementById("popup6");
            if (overlay6.style.display === "none") {
                overlay6.style.display = "block";
                popup6.style.display = "block";
            } else {
                overlay6.style.display = "none";
                popup6.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup6() {
            document.getElementById("overlay6").style.display = "none";
            document.getElementById("popup6").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay6").addEventListener("click", function () {
            var overlay6 = document.getElementById("overlay6");
            var popup6 = document.getElementById("popup6");

            overlay6.style.display = "none";
            popup6.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup7() {
            var overlay7 = document.getElementById("overlay7");
            var popup7 = document.getElementById("popup7");
            if (overlay7.style.display === "none") {
                overlay7.style.display = "block";
                popup7.style.display = "block";
            } else {
                overlay7.style.display = "none";
                popup7.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup7() {
            document.getElementById("overlay7").style.display = "none";
            document.getElementById("popup7").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay7").addEventListener("click", function () {
            var overlay7 = document.getElementById("overlay7");
            var popup7 = document.getElementById("popup7");

            overlay7.style.display = "none";
            popup7.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup8() {
            var overlay8 = document.getElementById("overlay8");
            var popup8 = document.getElementById("popup8");
            if (overlay8.style.display === "none") {
                overlay8.style.display = "block";
                popup8.style.display = "block";
            } else {
                overlay8.style.display = "none";
                popup8.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup8() {
            document.getElementById("overlay8").style.display = "none";
            document.getElementById("popup8").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay8").addEventListener("click", function () {
            var overlay8 = document.getElementById("overlay8");
            var popup8 = document.getElementById("popup8");

            overlay8.style.display = "none";
            popup8.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup9() {
            var overlay9 = document.getElementById("overlay9");
            var popup9 = document.getElementById("popup9");
            if (overlay9.style.display === "none") {
                overlay9.style.display = "block";
                popup9.style.display = "block";
            } else {
                overlay9.style.display = "none";
                popup9.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup9() {
            document.getElementById("overlay9").style.display = "none";
            document.getElementById("popup9").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay9").addEventListener("click", function () {
            var overlay9 = document.getElementById("overlay9");
            var popup9 = document.getElementById("popup9");

            overlay9.style.display = "none";
            popup9.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup10() {
            var overlay10 = document.getElementById("overlay10");
            var popup10 = document.getElementById("popup10");
            if (overlay10.style.display === "none") {
                overlay10.style.display = "block";
                popup10.style.display = "block";
            } else {
                overlay10.style.display = "none";
                popup10.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup10() {
            document.getElementById("overlay10").style.display = "none";
            document.getElementById("popup10").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay10").addEventListener("click", function () {
            var overlay10 = document.getElementById("overlay10");
            var popup10 = document.getElementById("popup10");

            overlay10.style.display = "none";
            popup10.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup11() {
            var overlay11 = document.getElementById("overlay11");
            var popup11 = document.getElementById("popup11");
            if (overlay11.style.display === "none") {
                overlay11.style.display = "block";
                popup11.style.display = "block";
            } else {
                overlay11.style.display = "none";
                popup11.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup11() {
            document.getElementById("overlay11").style.display = "none";
            document.getElementById("popup11").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay11").addEventListener("click", function () {
            var overlay11 = document.getElementById("overlay11");
            var popup11 = document.getElementById("popup11");

            overlay11.style.display = "none";
            popup11.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup12() {
            var overlay12 = document.getElementById("overlay12");
            var popup12 = document.getElementById("popup12");
            if (overlay12.style.display === "none") {
                overlay12.style.display = "block";
                popup12.style.display = "block";
            } else {
                overlay12.style.display = "none";
                popup12.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup12() {
            document.getElementById("overlay12").style.display = "none";
            document.getElementById("popup12").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay12").addEventListener("click", function () {
            var overlay12 = document.getElementById("overlay12");
            var popup12 = document.getElementById("popup12");

            overlay12.style.display = "none";
            popup12.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup13() {
            var overlay13 = document.getElementById("overlay13");
            var popup13 = document.getElementById("popup13");
            if (overlay13.style.display === "none") {
                overlay13.style.display = "block";
                popup13.style.display = "block";
            } else {
                overlay13.style.display = "none";
                popup13.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup13() {
            document.getElementById("overlay13").style.display = "none";
            document.getElementById("popup13").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay13").addEventListener("click", function () {
            var overlay13 = document.getElementById("overlay13");
            var popup13 = document.getElementById("popup13");

            overlay13.style.display = "none";
            popup13.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup14() {
            var overlay14 = document.getElementById("overlay14");
            var popup14 = document.getElementById("popup14");
            if (overlay14.style.display === "none") {
                overlay14.style.display = "block";
                popup14.style.display = "block";
            } else {
                overlay14.style.display = "none";
                popup14.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup14() {
            document.getElementById("overlay14").style.display = "none";
            document.getElementById("popup14").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay14").addEventListener("click", function () {
            var overlay14 = document.getElementById("overlay14");
            var popup14 = document.getElementById("popup14");

            overlay14.style.display = "none";
            popup14.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup15() {
            var overlay15 = document.getElementById("overlay15");
            var popup15 = document.getElementById("popup15");
            if (overlay15.style.display === "none") {
                overlay15.style.display = "block";
                popup15.style.display = "block";
            } else {
                overlay15.style.display = "none";
                popup15.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup15() {
            document.getElementById("overlay15").style.display = "none";
            document.getElementById("popup15").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay15").addEventListener("click", function () {
            var overlay15 = document.getElementById("overlay15");
            var popup15 = document.getElementById("popup15");

            overlay15.style.display = "none";
            popup15.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup16() {
            var overlay16 = document.getElementById("overlay16");
            var popup16 = document.getElementById("popup16");
            if (overlay16.style.display === "none") {
                overlay16.style.display = "block";
                popup16.style.display = "block";
            } else {
                overlay16.style.display = "none";
                popup16.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup16() {
            document.getElementById("overlay16").style.display = "none";
            document.getElementById("popup16").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay16").addEventListener("click", function () {
            var overlay16 = document.getElementById("overlay16");
            var popup16 = document.getElementById("popup16");

            overlay16.style.display = "none";
            popup16.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup17() {
            var overlay17 = document.getElementById("overlay17");
            var popup17 = document.getElementById("popup17");
            if (overlay17.style.display === "none") {
                overlay17.style.display = "block";
                popup17.style.display = "block";
            } else {
                overlay17.style.display = "none";
                popup17.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup17() {
            document.getElementById("overlay17").style.display = "none";
            document.getElementById("popup17").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay17").addEventListener("click", function () {
            var overlay17 = document.getElementById("overlay17");
            var popup17 = document.getElementById("popup17");

            overlay17.style.display = "none";
            popup17.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup18() {
            var overlay18 = document.getElementById("overlay18");
            var popup18 = document.getElementById("popup18");
            if (overlay18.style.display === "none") {
                overlay18.style.display = "block";
                popup18.style.display = "block";
            } else {
                overlay18.style.display = "none";
                popup18.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup18() {
            document.getElementById("overlay18").style.display = "none";
            document.getElementById("popup18").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay18").addEventListener("click", function () {
            var overlay18 = document.getElementById("overlay18");
            var popup18 = document.getElementById("popup18");

            overlay18.style.display = "none";
            popup18.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup19() {
            var overlay19 = document.getElementById("overlay19");
            var popup19 = document.getElementById("popup19");
            if (overlay19.style.display === "none") {
                overlay19.style.display = "block";
                popup19.style.display = "block";
            } else {
                overlay19.style.display = "none";
                popup19.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup19() {
            document.getElementById("overlay19").style.display = "none";
            document.getElementById("popup19").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay19").addEventListener("click", function () {
            var overlay19 = document.getElementById("overlay19");
            var popup19 = document.getElementById("popup19");

            overlay19.style.display = "none";
            popup19.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup20() {
            var overlay20 = document.getElementById("overlay20");
            var popup20 = document.getElementById("popup20");
            if (overlay20.style.display === "none") {
                overlay20.style.display = "block";
                popup20.style.display = "block";
            } else {
                overlay20.style.display = "none";
                popup20.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup20() {
            document.getElementById("overlay20").style.display = "none";
            document.getElementById("popup20").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay20").addEventListener("click", function () {
            var overlay20 = document.getElementById("overlay20");
            var popup20 = document.getElementById("popup20");

            overlay20.style.display = "none";
            popup20.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup21() {
            var overlay21 = document.getElementById("overlay21");
            var popup21 = document.getElementById("popup21");
            if (overlay21.style.display === "none") {
                overlay21.style.display = "block";
                popup21.style.display = "block";
            } else {
                overlay21.style.display = "none";
                popup21.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup21() {
            document.getElementById("overlay21").style.display = "none";
            document.getElementById("popup21").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay21").addEventListener("click", function () {
            var overlay21 = document.getElementById("overlay21");
            var popup21 = document.getElementById("popup21");

            overlay21.style.display = "none";
            popup21.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup22() {
            var overlay22 = document.getElementById("overlay22");
            var popup22 = document.getElementById("popup22");
            if (overlay22.style.display === "none") {
                overlay22.style.display = "block";
                popup22.style.display = "block";
            } else {
                overlay22.style.display = "none";
                popup22.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup22() {
            document.getElementById("overlay22").style.display = "none";
            document.getElementById("popup22").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay22").addEventListener("click", function () {
            var overlay22 = document.getElementById("overlay22");
            var popup22 = document.getElementById("popup22");

            overlay22.style.display = "none";
            popup22.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup23() {
            var overlay23 = document.getElementById("overlay23");
            var popup23 = document.getElementById("popup23");
            if (overlay23.style.display === "none") {
                overlay23.style.display = "block";
                popup23.style.display = "block";
            } else {
                overlay23.style.display = "none";
                popup23.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup23() {
            document.getElementById("overlay23").style.display = "none";
            document.getElementById("popup23").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay23").addEventListener("click", function () {
            var overlay23 = document.getElementById("overlay23");
            var popup23 = document.getElementById("popup23");

            overlay23.style.display = "none";
            popup23.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup24() {
            var overlay24 = document.getElementById("overlay24");
            var popup24 = document.getElementById("popup24");
            if (overlay24.style.display === "none") {
                overlay24.style.display = "block";
                popup24.style.display = "block";
            } else {
                overlay24.style.display = "none";
                popup24.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup24() {
            document.getElementById("overlay24").style.display = "none";
            document.getElementById("popup24").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay24").addEventListener("click", function () {
            var overlay24 = document.getElementById("overlay24");
            var popup24 = document.getElementById("popup24");

            overlay24.style.display = "none";
            popup24.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup25() {
            var overlay25 = document.getElementById("overlay25");
            var popup25 = document.getElementById("popup25");
            if (overlay25.style.display === "none") {
                overlay25.style.display = "block";
                popup25.style.display = "block";
            } else {
                overlay25.style.display = "none";
                popup25.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup25() {
            document.getElementById("overlay25").style.display = "none";
            document.getElementById("popup25").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay25").addEventListener("click", function () {
            var overlay25 = document.getElementById("overlay25");
            var popup25 = document.getElementById("popup25");

            overlay25.style.display = "none";
            popup25.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup26() {
            var overlay26 = document.getElementById("overlay26");
            var popup26 = document.getElementById("popup26");
            if (overlay26.style.display === "none") {
                overlay26.style.display = "block";
                popup26.style.display = "block";
            } else {
                overlay26.style.display = "none";
                popup26.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup26() {
            document.getElementById("overlay26").style.display = "none";
            document.getElementById("popup26").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay26").addEventListener("click", function () {
            var overlay26 = document.getElementById("overlay26");
            var popup26 = document.getElementById("popup26");

            overlay26.style.display = "none";
            popup26.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup27() {
            var overlay27 = document.getElementById("overlay27");
            var popup27 = document.getElementById("popup27");
            if (overlay27.style.display === "none") {
                overlay27.style.display = "block";
                popup27.style.display = "block";
            } else {
                overlay27.style.display = "none";
                popup27.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup27() {
            document.getElementById("overlay27").style.display = "none";
            document.getElementById("popup27").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay27").addEventListener("click", function () {
            var overlay27 = document.getElementById("overlay27");
            var popup27 = document.getElementById("popup27");

            overlay27.style.display = "none";
            popup27.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup28() {
            var overlay28 = document.getElementById("overlay28");
            var popup28 = document.getElementById("popup28");
            if (overlay28.style.display === "none") {
                overlay28.style.display = "block";
                popup28.style.display = "block";
            } else {
                overlay28.style.display = "none";
                popup28.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup28() {
            document.getElementById("overlay28").style.display = "none";
            document.getElementById("popup28").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay28").addEventListener("click", function () {
            var overlay28 = document.getElementById("overlay28");
            var popup28 = document.getElementById("popup28");

            overlay28.style.display = "none";
            popup28.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup29() {
            var overlay29 = document.getElementById("overlay29");
            var popup29 = document.getElementById("popup29");
            if (overlay29.style.display === "none") {
                overlay29.style.display = "block";
                popup29.style.display = "block";
            } else {
                overlay29.style.display = "none";
                popup29.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup29() {
            document.getElementById("overlay29").style.display = "none";
            document.getElementById("popup29").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay29").addEventListener("click", function () {
            var overlay29 = document.getElementById("overlay29");
            var popup29 = document.getElementById("popup29");

            overlay29.style.display = "none";
            popup29.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup30() {
            var overlay30 = document.getElementById("overlay30");
            var popup30 = document.getElementById("popup30");
            if (overlay30.style.display === "none") {
                overlay30.style.display = "block";
                popup30.style.display = "block";
            } else {
                overlay30.style.display = "none";
                popup30.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup30() {
            document.getElementById("overlay30").style.display = "none";
            document.getElementById("popup30").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay30").addEventListener("click", function () {
            var overlay30 = document.getElementById("overlay30");
            var popup30 = document.getElementById("popup30");

            overlay30.style.display = "none";
            popup30.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup31() {
            var overlay31 = document.getElementById("overlay31");
            var popup31 = document.getElementById("popup31");
            if (overlay31.style.display === "none") {
                overlay31.style.display = "block";
                popup31.style.display = "block";
            } else {
                overlay31.style.display = "none";
                popup31.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup31() {
            document.getElementById("overlay31").style.display = "none";
            document.getElementById("popup31").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay31").addEventListener("click", function () {
            var overlay31 = document.getElementById("overlay31");
            var popup31 = document.getElementById("popup31");

            overlay31.style.display = "none";
            popup31.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup32() {
            var overlay32 = document.getElementById("overlay32");
            var popup32 = document.getElementById("popup32");
            if (overlay32.style.display === "none") {
                overlay32.style.display = "block";
                popup32.style.display = "block";
            } else {
                overlay32.style.display = "none";
                popup32.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup32() {
            document.getElementById("overlay32").style.display = "none";
            document.getElementById("popup32").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay32").addEventListener("click", function () {
            var overlay32 = document.getElementById("overlay32");
            var popup32 = document.getElementById("popup32");

            overlay32.style.display = "none";
            popup32.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup33() {
            var overlay33 = document.getElementById("overlay33");
            var popup33 = document.getElementById("popup33");
            if (overlay33.style.display === "none") {
                overlay33.style.display = "block";
                popup33.style.display = "block";
            } else {
                overlay33.style.display = "none";
                popup33.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup33() {
            document.getElementById("overlay33").style.display = "none";
            document.getElementById("popup33").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay33").addEventListener("click", function () {
            var overlay33 = document.getElementById("overlay33");
            var popup33 = document.getElementById("popup33");

            overlay33.style.display = "none";
            popup3.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup34() {
            var overlay34 = document.getElementById("overlay34");
            var popup34 = document.getElementById("popup34");
            if (overlay34.style.display === "none") {
                overlay34.style.display = "block";
                popup34.style.display = "block";
            } else {
                overlay34.style.display = "none";
                popup34.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup34() {
            document.getElementById("overlay34").style.display = "none";
            document.getElementById("popup34").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay34").addEventListener("click", function () {
            var overlay34 = document.getElementById("overlay34");
            var popup34 = document.getElementById("popup34");

            overlay34.style.display = "none";
            popup34.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup35() {
            var overlay35 = document.getElementById("overlay35");
            var popup35 = document.getElementById("popup35");
            if (overlay35.style.display === "none") {
                overlay35.style.display = "block";
                popup35.style.display = "block";
            } else {
                overlay35.style.display = "none";
                popup35.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup35() {
            document.getElementById("overlay35").style.display = "none";
            document.getElementById("popup35").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay35").addEventListener("click", function () {
            var overlay35 = document.getElementById("overlay35");
            var popup35 = document.getElementById("popup35");

            overlay35.style.display = "none";
            popup35.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup36() {
            var overlay36 = document.getElementById("overlay36");
            var popup36 = document.getElementById("popup36");
            if (overlay36.style.display === "none") {
                overlay36.style.display = "block";
                popup36.style.display = "block";
            } else {
                overlay36.style.display = "none";
                popup36.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup36() {
            document.getElementById("overlay36").style.display = "none";
            document.getElementById("popup36").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay36").addEventListener("click", function () {
            var overlay36 = document.getElementById("overlay36");
            var popup36 = document.getElementById("popup36");

            overlay36.style.display = "none";
            popup36.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup37() {
            var overlay37 = document.getElementById("overlay37");
            var popup37 = document.getElementById("popup37");
            if (overlay37.style.display === "none") {
                overlay37.style.display = "block";
                popup37.style.display = "block";
            } else {
                overlay37.style.display = "none";
                popup37.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup37() {
            document.getElementById("overlay37").style.display = "none";
            document.getElementById("popup37").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay37").addEventListener("click", function () {
            var overlay37 = document.getElementById("overlay37");
            var popup37 = document.getElementById("popup37");

            overlay37.style.display = "none";
            popup37.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup38() {
            var overlay38 = document.getElementById("overlay38");
            var popup38 = document.getElementById("popup38");
            if (overlay38.style.display === "none") {
                overlay38.style.display = "block";
                popup38.style.display = "block";
            } else {
                overlay38.style.display = "none";
                popup38.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup38() {
            document.getElementById("overlay38").style.display = "none";
            document.getElementById("popup38").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay38").addEventListener("click", function () {
            var overlay38 = document.getElementById("overlay38");
            var popup38 = document.getElementById("popup38");

            overlay38.style.display = "none";
            popup38.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup39() {
            var overlay39 = document.getElementById("overlay39");
            var popup39 = document.getElementById("popup39");
            if (overlay39.style.display === "none") {
                overlay39.style.display = "block";
                popup39.style.display = "block";
            } else {
                overlay39.style.display = "none";
                popup39.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup39() {
            document.getElementById("overlay39").style.display = "none";
            document.getElementById("popup39").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay39").addEventListener("click", function () {
            var overlay39 = document.getElementById("overlay39");
            var popup39 = document.getElementById("popup39");

            overlay39.style.display = "none";
            popup39.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup40() {
            var overlay40 = document.getElementById("overlay40");
            var popup40 = document.getElementById("popup40");
            if (overlay40.style.display === "none") {
                overlay40.style.display = "block";
                popup40.style.display = "block";
            } else {
                overlay40.style.display = "none";
                popup40.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup40() {
            document.getElementById("overlay40").style.display = "none";
            document.getElementById("popup40").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay40").addEventListener("click", function () {
            var overlay40 = document.getElementById("overlay40");
            var popup40 = document.getElementById("popup40");

            overlay40.style.display = "none";
            popup40.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup41() {
            var overlay41 = document.getElementById("overlay41");
            var popup41 = document.getElementById("popup41");
            if (overlay41.style.display === "none") {
                overlay41.style.display = "block";
                popup41.style.display = "block";
            } else {
                overlay41.style.display = "none";
                popup41.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup41() {
            document.getElementById("overlay41").style.display = "none";
            document.getElementById("popup41").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay41").addEventListener("click", function () {
            var overlay41 = document.getElementById("overlay41");
            var popup41 = document.getElementById("popup41");

            overlay41.style.display = "none";
            popup41.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup42() {
            var overlay42 = document.getElementById("overlay42");
            var popup42 = document.getElementById("popup42");
            if (overlay42.style.display === "none") {
                overlay42.style.display = "block";
                popup42.style.display = "block";
            } else {
                overlay42.style.display = "none";
                popup42.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup42() {
            document.getElementById("overlay42").style.display = "none";
            document.getElementById("popup42").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay42").addEventListener("click", function () {
            var overlay42 = document.getElementById("overlay42");
            var popup42 = document.getElementById("popup42");

            overlay42.style.display = "none";
            popup42.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup43() {
            var overlay43 = document.getElementById("overlay43");
            var popup43 = document.getElementById("popup43");
            if (overlay43.style.display === "none") {
                overlay43.style.display = "block";
                popup43.style.display = "block";
            } else {
                overlay43.style.display = "none";
                popup43.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup43() {
            document.getElementById("overlay43").style.display = "none";
            document.getElementById("popup43").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay43").addEventListener("click", function () {
            var overlay43 = document.getElementById("overlay43");
            var popup43 = document.getElementById("popup43");

            overlay43.style.display = "none";
            popup43.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup44() {
            var overlay44 = document.getElementById("overlay44");
            var popup44 = document.getElementById("popup44");
            if (overlay44.style.display === "none") {
                overlay44.style.display = "block";
                popup44.style.display = "block";
            } else {
                overlay44.style.display = "none";
                popup44.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup44() {
            document.getElementById("overlay44").style.display = "none";
            document.getElementById("popup44").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay44").addEventListener("click", function () {
            var overlay44 = document.getElementById("overlay44");
            var popup44 = document.getElementById("popup44");

            overlay44.style.display = "none";
            popup44.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup45() {
            var overlay45 = document.getElementById("overlay45");
            var popup45 = document.getElementById("popup45");
            if (overlay45.style.display === "none") {
                overlay45.style.display = "block";
                popup45.style.display = "block";
            } else {
                overlay45.style.display = "none";
                popup45.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup45() {
            document.getElementById("overlay45").style.display = "none";
            document.getElementById("popup45").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay45").addEventListener("click", function () {
            var overlay45 = document.getElementById("overlay45");
            var popup45 = document.getElementById("popup1");

            overlay45.style.display = "none";
            popup45.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup46() {
            var overlay46 = document.getElementById("overlay46");
            var popup46 = document.getElementById("popup46");
            if (overlay46.style.display === "none") {
                overlay46.style.display = "block";
                popup46.style.display = "block";
            } else {
                overlay46.style.display = "none";
                popup46.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup46() {
            document.getElementById("overlay46").style.display = "none";
            document.getElementById("popup46").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay46").addEventListener("click", function () {
            var overlay46 = document.getElementById("overlay46");
            var popup46 = document.getElementById("popup46");

            overlay46.style.display = "none";
            popup46.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


        // ポップアップの表示/非表示を切り替える関数
        function togglePopup47() {
            var overlay47 = document.getElementById("overlay47");
            var popup47 = document.getElementById("popup47");
            if (overlay47.style.display === "none") {
                overlay47.style.display = "block";
                popup47.style.display = "block";
            } else {
                overlay47.style.display = "none";
                popup47.style.display = "none";
            }
        }
        // ポップアップを閉じる関数
        function closePopup47() {
            document.getElementById("overlay47").style.display = "none";
            document.getElementById("popup47").style.display = "none";
        }
        // オーバーレイをクリックしたときにポップアップを非表示にする
        document.getElementById("overlay47").addEventListener("click", function () {
            var overlay47 = document.getElementById("overlay47");
            var popup47 = document.getElementById("popup47");

            overlay47.style.display = "none";
            popup47.style.display = "none";
            document.body.style.overflow = 'auto'; // Enable scrolling
        })


    </script>


    <!-- 日本地図 -->
    <div id="japan-map" class="clearfix">

        <div id="hokkaido-touhoku" class="clearfix">
            <p class="area-title">北海道・東北</p>
            <div class="area">
                <a href="javascript:void(0)" onclick="togglePopup1()">
                    <div id="hokkaido">
                        <p>北海道</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup2()" >
                    <div id="aomori">
                        <p>青森</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup3()">
                    <div id="akita">
                        <p>秋田</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup4()">
                    <div id="iwate">
                        <p>岩手</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup5()">
                    <div id="yamagata">
                        <p>山形</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup6()">
                    <div id="miyagi">
                        <p>宮城</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup7()">
                    <div id="fukushima">
                        <p>福島</p>
                    </div>
                </a>
            </div>
        </div>

        <div id="kantou">
            <p class="area-title">関東</p>
            <div class="area">
                <a href="javascript:void(0)" onclick="togglePopup8()">
                    <div id="gunma">
                        <p>群馬</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup9()">
                    <div id="tochigi">
                        <p>栃木</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup10()">
                    <div id="ibaraki">
                        <p>茨城</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup11()">
                    <div id="saitama">
                        <p>埼玉</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup12()">
                    <div id="chiba">
                        <p>千葉</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup13()">
                    <div id="tokyo">
                        <p>東京</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup14()">
                    <div id="kanagawa">
                        <p>神奈川</p>
                    </div>
                </a>
            </div>
        </div>

        <div id="tyubu" class="clearfix">
            <p class="area-title">中部</p>
            <div class="area">
                <a href="javascript:void(0)" onclick="togglePopup15()">
                    <div id="nigata">
                        <p>新潟</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup16()">
                    <div id="toyama">
                        <p>富山</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup17()">
                    <div id="ishikawa">
                        <p>石川</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup18()">
                    <div id="fukui">
                        <p>福井</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup19()">
                    <div id="nagano">
                        <p>長野</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup20()">
                    <div id="gifu">
                        <p>岐阜</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup21()">
                    <div id="yamanashi">
                        <p>山梨</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup22()">
                    <div id="aichi">
                        <p>愛知</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup23()">
                    <div id="shizuoka">
                        <p>静岡</p>
                    </div>
                </a>
            </div>
        </div>

        <div id="kinki" class="clearfix">
            <p class="area-title">近畿</p>
            <div class="area">
                <a href="javascript:void(0)" onclick="togglePopup24()">
                    <div id="kyoto">
                        <p>京都</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup25()">
                    <div id="shiga">
                        <p>滋賀</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup26()">
                    <div id="osaka">
                        <p>大阪</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup27()">
                    <div id="nara">
                        <p>奈良</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup28()">
                    <div id="mie">
                        <p>三重</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup29()">
                    <div id="wakayama">
                        <p>和歌山</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup30()">
                    <div id="hyougo">
                        <p>兵庫</p>
                    </div>
                </a>
            </div>
        </div>

        <div id="tyugoku" class="clearfix">
            <p class="area-title">中国</p>
            <div class="area">
                <a href="javascript:void(0)" onclick="togglePopup31()">
                    <div id="tottori">
                        <p>鳥取</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup32()">
                    <div id="okayama">
                        <p>岡山</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup33()">
                    <div id="shimane">
                        <p>島根</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup34()">
                    <div id="hiroshima">
                        <p>広島</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup35()">
                    <div id="yamaguchi">
                        <p>山口</p>
                    </div>
                </a>
            </div>
        </div>

        <div id="shikoku" class="clearfix">
            <p class="area-title">四国</p>
            <div class="area">
                <a href="javascript:void(0)" onclick="togglePopup36()">
                    <div id="kagawa">
                        <p>香川</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup37()">
                    <div id="ehime">
                        <p>愛媛</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup38()">
                    <div id="tokushima">
                        <p>徳島</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup39()">
                    <div id="kouchi">
                        <p>高知</p>
                    </div>
                </a>
            </div>
        </div>

        <div id="kyusyu" class="clearfix">
            <p class="area-title">九州・沖縄</p>
            <div class="area">
                <a href="javascript:void(0)" onclick="togglePopup40()">
                    <div id="fukuoka">
                        <p>福岡</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup41()">
                    <div id="saga">
                        <p>佐賀</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup42()">
                    <div id="nagasaki">
                        <p>長崎</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup43()">
                    <div id="oita">
                        <p>大分</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup44()">
                    <div id="kumamoto">
                        <p>熊本</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup45()">
                    <div id="miyazaki">
                        <p>宮崎</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup46()">
                    <div id="kagoshima">
                        <p>鹿児島</p>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="togglePopup47()">
                    <div id="okinawa">
                        <p>沖縄</p>
                    </div>
                </a>
            </div>
        </div>

    </div> <!-- japan-map -->

</body>

</html>