<?php
    session_name("j150719j");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>フリマサイト(情報工学科)</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>フリマアプリ</h1>
    <div class="sidemenu">
        <?php
            if(!isset($_SESSION['login_name'])){
                print "まだログインしていません";
                print "<a href='regist.php'>新規登録</a>";
                print "<a href='login.php'>ログイン</a>";
            } else {
                print $_SESSION['login_name']. "さんようこそ！";
                print "<a href='search.php'>商品検索</a>";
                print "<a href='items_list.php'>商品一覧</a>";
                print "<a href='sell_item.php'>商品出品</a>";
                print "<a href='password.php'>パスワード変更</a>";
                print "<a href='logout.php'>ログアウト</a>";
            }
        ?>
    </div>
</body>
</html>