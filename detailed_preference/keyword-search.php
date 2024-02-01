<?php
include("../const.php");
session_start();
$keyword = filter_input(INPUT_POST, 'keyword');


try {
    $db = new PDO(DSN, DB_USER, '');
    $stmt = $db->prepare('select * from recipe where recipe_name like ? ');
    $stmt->execute([$keyword]);
    $count = $stmt->rowCount();
    if ($count >= 1) {
        $result = $stmt->fetch();
        $_SESSION['recipe_name'] = [
            // resultのidの中身をSESSIONに入れる(ここにSESSIONに入れることで他の画面でidが使用できる)
            'id' => $result['id'],
            'recipe_name' => $result['recipe_name']
        ];
        header('Location:../recipi_list_screen/recipi_list_screen.php?');
        exit();
    } else {
        header("Location:../index.php");
        exit();
    }
} catch (PDOException $e) {
    echo "接続に失敗しました。";
    echo $e->getMessage();
    exit;
}
