<?php
    session_name('j150719j');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
    <form action="change_pwd.php" method="POST">
            現在のパスワード: <input type="password" name="pwd"><br>
            新しいパスワード: <input type="password" name="newpwd"><br>
            <input type="submit" value="変更">
    </form>
    
</body>
</html>