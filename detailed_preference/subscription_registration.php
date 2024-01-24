<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/subscription_registration.css">
</head>

<body>
    <form action="subscription_process.php" method="post">
        <h1>有料会員登録</h1>
        <h2>広告が非表示に！</h2>
        <p>出てくる広告が非表示！ストレスなく快適にご利用できます。</p>
        <div class="container">
            <div class="radio-tile-group">
                <div class="input-container">
                    <input id="walk" class="radio-button" type="radio" name="radio" value="１か月" />
                    <div class="radio-tile">
                        <!-- <div class="icon walk-icon">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7 23h2.1l1.8-8 2.1 2v6h2v-7.5l-2.1-2 .6-3C14.8 12 16.8 13 19 13v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1L6 8.3V13h2V9.6l1.8-.7" />
                        </svg>
                    </div> -->
                        <label for="fly" class="radio-tile-label">お試しにいかがですか？</label>
                        <label for="fly" class="number-tile-label">1</label>
                        <label for="fly" class="months-tile-label">カ月</label>
                        <label for="fly" class="transparency-tile-label">透明</label>
                        <hr>
                        <label for="fly" class="price-tile-label">￥100</label>
                    </div>
                </div>

                <div class="input-container">
                    <input id="bike" class="radio-button" type="radio" name="radio" value="３か月"/>
                    <div class="radio-tile">
                        <!-- <div class="icon bike-icon">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M15.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM5 12c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8.5c-1.9 0-3.5-1.6-3.5-3.5s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm5.8-10l2.4-2.4.8.8c1.3 1.3 3 2.1 5.1 2.1V9c-1.5 0-2.7-.6-3.6-1.5l-1.9-1.9c-.5-.4-1-.6-1.6-.6s-1.1.2-1.4.6L7.8 8.4c-.4.4-.6.9-.6 1.4 0 .6.2 1.1.6 1.4L11 14v5h2v-6.2l-2.2-2.3zM19 12c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8.5c-1.9 0-3.5-1.6-3.5-3.5s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5z" />
                        </svg>
                    </div> -->
                        <label for="fly" class="radio-tile-label">1番人気!</label>
                        <label for="fly" class="number-tile-label">3</label>
                        <label for="fly" class="months-tile-label">カ月</label>
                        <label for="fly" class="transparency-tile-label">透明</label>
                        <hr>
                        <label for="fly" class="price-tile-label">￥300</label>
                    </div>
                </div>

                <div class="input-container">
                    <input id="drive" class="radio-button" type="radio" name="radio" value="６か月"/>
                    <div class="radio-tile">
                        <!-- <div class="icon car-icon">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z" />
                            <path d="M0 0h24v24H0z" fill="none" />
                        </svg>
                    </div> -->
                        <label for="fly" class="radio-tile-label">1番おすすめ!</label>
                        <label for="fly" class="number-tile-label">6</label>
                        <label for="fly" class="months-tile-label">カ月</label>
                        <label for="fly" class="transparency-tile-label">透明</label>
                        <hr>
                        <label for="fly" class="price-tile-label">￥600</label>
                    </div>
                </div>

                <div class="input-container">
                    <input id="fly" class="radio-button" type="radio" name="radio" value="１２か月"/>
                    <div class="radio-tile">
                        <!-- <div class="icon fly-icon">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.18 9" />
                            <path
                                d="M21 16-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z" />
                            <path d="M0 0h24v24H0z" fill="none" />
                        </svg>
                    </div> -->
                        <label for="fly" class="radio-tile-label">1番お得!</label>
                        <label for="fly" class="number-tile-label">12</label>
                        <label for="fly" class="months-tile-label">カ月</label>
                        <label for="fly" class="discount-tile-label">18%割引</label>
                        <hr>
                        <label for="fly" class="price-tile-label">￥1,000</label>

                    </div>
                </div>
            </div>
        </div>

        <div class="button">
            <button type="submit" name="sumbit" id="submit" class="registration">登録する</button><br>
            <button type="button" onclick="location.href='../index.php'" class="cancel">キャンセル</button>
        </div>

        <script src="menu_bar.js"></script>

    </form>
</body>

</html>