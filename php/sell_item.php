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
    <form action="./sell_exec.php" method="POST" enctype="multipart/form-data">
        商品名: <input type="text" name="item_name"><br>
        値段: <input type="number" name="price"><br>
        備考: <textarea name="description" cols="60" rows="10"></textarea><br>
        <input type="hidden" name="MAX_FILE_SIZE" value="500000"/>
            商品画像 <input type="file" name="image"><br>
        <input type="submit" value="出品"/>
    </form>
</body>
</html>