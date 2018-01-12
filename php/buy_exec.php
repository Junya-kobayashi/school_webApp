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
        session_name('j150719j');
        session_start();
        $id = htmlspecialchars($_POST['id']);
        $conn = pg_connect("host = localhost user=j150719j dbname=j150719j");
        $query = "UPDATE items SET sold_out = TRUE WHERE id = $1";
        $result = pg_prepare($conn, "query", $query);
        $result = pg_execute($conn, "query", array($id));
        print '購入ありがとうございます！';
        print "<a href=\"index.php\">topへ</a>";
    ?> 
</body>
</html>