<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/coupon.css">
    <title>クーポン表示</title>
</head>
<body>
    <!--変更の可能性あり-->
    <!--ホーム画面に戻る-->
    <!--検索バー-->
    <div class="search-container">

    <button onclick="location.href=''">こんちゃん</button>
        <form action="/search" method="get">
            <input type="text" name="q" placeholder="検索キーワード">
            <input type="submit" value="検索">
        </form>
    </div>
    <!-- ハンバーガーメニュー部分 -->
    <div class="nav">
    
        <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
        <input id="drawer_input" class="drawer_hidden" type="checkbox">
    
        <!-- ハンバーガーアイコン -->
        <label for="drawer_input" class="drawer_open"><span></span></label>
    
        <!-- メニュー -->
        <nav class="nav_content">
          <ul class="nav_list">
            <li class="nav_item"><a href="">メニュー1</a></li>
            <li class="nav_item"><a href="">メニュー2</a></li>
            <li class="nav_item"><a href="">メニュー3</a></li>
          </ul>
        </nav>

      </div>
    <div class="text">
        <h1>クーポン一覧</h1>
    </div>
    <div class="btn-wrap">
        <!-- Coupon 1 -->
        <input type="radio" name="coupon" id="coupon1" class="coupon-radio">
        <label for="coupon1" class="btn btn-coupon">
          <div class="left">
            <span class="txt1">特別割引クーポン券</span><br>
            <em>99%OFF</em>
          </div>
          <div class="right"><span>Coupon</span></div>
        </label>
      
        <!-- Coupon 2 -->
        <input type="radio" name="coupon" id="coupon2" class="coupon-radio">
        <label for="coupon2" class="btn btn-coupon">
          <div class="left">
            <span class="txt1">特別割引クーポン券</span><br>
            <em>98%OFF</em>
          </div>
          <div class="right"><span>Coupon</span></div>
        </label>
      
        <!-- Coupon 3 -->
        <input type="radio" name="coupon" id="coupon3" class="coupon-radio">
        <label for="coupon3" class="btn btn-coupon">
          <div class="left">
            <span class="txt1">特別割引クーポン券</span><br>
            <em>97%OFF</em>
          </div>
          <div class="right"><span>Coupon</span></div>
        </label>
      
        <!-- Coupon 4 -->
        <input type="radio" name="coupon" id="coupon4" class="coupon-radio">
        <label for="coupon4" class="btn btn-coupon">
          <div class="left">
            <span class="txt1">特別割引クーポン券</span><br>
            <em>27%OFF</em>
          </div>
          <div class="right"><span>Coupon</span></div>
        </label>
      </div> 
    <div class="button">
        <!--押下時クーポンID表示画面に遷移-->
        <button onclick="location.href=''">使用する</button>
        <!--押下時トップ画面に遷移-->
        <button onclick="location.href=''">キャンセル</button>
    </div>
    
</body>