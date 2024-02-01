<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログアウト</title>
    <link rel="stylesheet" href="../css/logout.css">
</head>

<body>

    <form action="logout-output.php" method="post">
        <div class="logout-container">
            <h2>ログアウトしますか？</h2>
            <button type="hidden">YES</button>
            <button onclick="location.href='../index.php'">NO</button>
        </div>
    </form>

</body>

</html>