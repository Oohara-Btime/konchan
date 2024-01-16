<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-left justify-content-left">
            <div class="d-flex justify-content-left">
                <div class="text-center">
                    <div class=loginBtn>
                        <?php session_start(); ?>

                        <?php
                        include("const.php");
                            unset($_SESSION['user']);

                            // $pdo=new PDO('mysql:host=localhost;dbname=konchan;charset=utf8', 
                            //     'koukasokutei','kouka123');

                            $sql=$pdo->prepare('select * from login where email=? and password=?');

                            $sql->execute([$_REQUEST['login'], $_REQUEST['password']]);

                            foreach ($sql as $row) {
                                $_SESSION['login']=[
                                    'code'=>$row['code'], 'name'=>$row['name'], 
                                    'address'=>$row['address'], 'login'=>$row['login'], 
                                    'password'=>$row['password']];
                            }

                            if (isset($_SESSION['login'])) {
                                echo 'いらっしゃいませ、', $_SESSION['login']['name'], 'さん。';
                            } else {
                                echo 'ログイン名またはパスワードが違います。';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
