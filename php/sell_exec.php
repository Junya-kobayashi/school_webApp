<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        session_name('j150719j');
        session_start();
        $conn = pg_connect("host = localhost user=j150719j dbname=j150719j");
        $user_id = $_SESSION['id'];
        $item_name = htmlspecialchars($_POST['item_name']);
        $price = htmlspecialchars($_POST['price']);
        // $image = $_FILES['image'];
        $description = htmlspecialchars($_POST['description']);
        $query = "INSERT INTO items (name, price, description, seller, pict) VALUES ($1, $2, $3, $4, $5)";
        $result = pg_prepare($conn, "sell", $query);
        $uploaddir = "./images/";
        $uploadfile = $uploaddir . $_SESSION['id']."_".basename($_FILES['image']['name']);
        if (is_uploaded_file($_FILES['image']['tmp_name'])){
            if(move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)){
                $result = pg_execute($conn, "sell", array($item_name, $price, $description, $user_id, $uploadfile));
                print "アップロードに成功しました。";
                print "<a href=\"index.php\">topへ</a>";
            }
        }else{
            $default_pass = './images/default.png';
            $result = pg_execute($conn, "sell", array($item_name, $price, $description, $user_id, $default_pass));
            print "<a href=\"index.php\">topへ</a>";
        }
    ?>
</body>
</html>