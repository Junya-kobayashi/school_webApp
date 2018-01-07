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
        $conn = pg_connect("host = localhost user=j150719j dbname=j150719j");
        $query = "SELECT * FROM items";
        $result = pg_prepare($conn, "item_list", $query);
        $result = pg_execute($conn, "item_list", array());
        $num = pg_num_rows($result);
        
        print "<table border=1>";
        print "<tr><th>商品一覧</th></tr>";
        for($i = 0; $i < $num; $i++){
            $row = pg_fetch_assoc($result, $i);
            $image = $row['pict'];
            print "<tr>";
            print "<td>".$row['name']."</td>";
            print "<img src=\"{$image}\" alt=\"商品画像\">";
            if ($row['sold_out'] == 'f'){
                print '<td>販売中</td>';
            }else{
                print '<td>売り切れ</td>';
            }
            print "</tr>";
        }
        print <<< EOF
            <tr>
            <td><a href="./detail.php?id={$row['id']}">{$row['name']}</a></td>
            </tr>
EOF;
        print "</table>";
        print "<a href=\"index.php\">topページへ</a>";

    ?>
</body>
</html>