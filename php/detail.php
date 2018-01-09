<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/tile.css">
    <title>Document</title>
</head>
<body>
    <?php
        $id = $_GET['id'];
        $conn = pg_connect("host = localhost user=j150719j dbname=j150719j");
        $query = "SELECT * FROM items WHERE id = $1";

        $result = pg_prepare($conn, "my_query", $query);
        $result = pg_execute($conn, "my_query", array($id));
        $row = pg_fetch_assoc($result, 0);
        $image = $row['pict'];

        print <<< EOF
        <div class="item">
            <img src="{$image}" alt="商品画像" width="300">
            <p>{$row['name']}</p>
            <h2>¥ {$row['price']}</h2>
            <form action="./buy_exec" method="POST">
                <input type="hidden" name="id" value="{$row['id']}">
                <input type="submit" value="購入">
            </form>  
        </div>
EOF;
?>
    
</body>
</html>