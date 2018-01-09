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
    <title>フリマサイト(情報工学科)</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        $login_name = $_POST['login_name'];
        $pwd = $_POST['pwd'];
        
        $conn = pg_connect("host=localhost dbname=j150719j user=j150719j");
        $query = "SELECT * FROM users WHERE login_name = $1";   
        $result = pg_prepare($conn, "myquery", $query);
        $result = pg_execute($conn, "myquery", array($login_name));

        if(pg_num_rows($result)){
            $row = pg_fetch_assoc($result, 0);
            if(password_verify($pwd, $row['pwd'])){
                print "{$row['login_name']}さん<br>ログイン成功";
                print "<a href=\"index.php\">topページへ</a>";

                $_SESSION['login_name'] = $login_name;
                $_SESSION['id'] = $row['id'];
            }else{
                print "パスワードが間違っています";
                print "<a href=\"login.php\">ログインページへ</a>";
            }
        }else{
            print "そのユーザーは存在しません";
            print "<a href=\"login.php\">ログインページへ</a>";
        }
    ?>
</body>
</html>