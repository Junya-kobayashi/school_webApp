<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>フリマサイト(情報工学科)</title>
</head>
<body>
    <?php
        if(!isset($_POST['login_name']) || !isset($_POST['pwd'])){
            print "URLを直接入力してアクセスすることはできません";
        }else if(empty($_POST['login_name']) || empty($_POST['pwd'])){
            print "ユーザー名とパスワードを入力してください<br>";
        } else {
            $login_name = $_POST['login_name'];
            $pwd = $_POST['pwd'];
            $byear = $_POST['byear'];

            $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);

            $conn = pg_connect("host=localhost dbname=j150719j user=j150719j");
            $query = "INSERT INTO users (login_name, pwd, byear) VALUES($1,$2,$3)";
            $result = pg_prepare($conn, "q1", $query);
            $result = pg_execute($conn, "q1", array($login_name, $hashpwd, $byear));
            print '登録完了いたしました。';
            print '<a href="index.php">topページへ</a>';
        }
    ?>
</body>
</html>