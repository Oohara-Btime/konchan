<?php
include("../const.php");
session_start();

$next = filter_input(INPUT_POST, 'next');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>こんちゃん</title>
</head>
<body>
    <?php 
    echo $_POST;
    
    
    ?>
</body>
</html>