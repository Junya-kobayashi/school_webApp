<?php
    session_name("j150719j");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $pwd = $_POST['pwd'];
        $newpwd = $_POST['newpwd'];
        $user_id = $_SESSION['id'];
        $conn = pg_connect("host = localhost user=j150719j dbname=j150719j");
        $query1 = "SELECT * FROM users WHERE id = $1";
        $result1 = pg_prepare($conn, "change_pwd", $query1);
        $result1 = pg_execute($conn, "change_pwd", array($user_id));
        $row = pg_fetch_assoc($result1, 0);
        if(password_verify($pwd, $row['pwd'])){
            $newpwd_hash = password_hash($newpwd, PASSWORD_DEFAULT);
            $query2 = "UPDATE users SET pwd = $1 WHERE id = $2";
            $result2 = pg_prepare($conn, "update", $query2);
            $result2 = pg_execute($conn, "update", array($newpwd_hash, $user_id));
            print "更新しました";
            print "<a href=\"index.php\">topへ</a>";
        }else{
            print "現在のパスワードが間違っています";
            print "<a href=\"index.php\">topへ</a>";
        }
    ?>
</body>
</html>