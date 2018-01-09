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
    <div class="container">
    <?php
        $keyword = "%".$_GET['keyword']."%";
        $conn = pg_connect("host = localhost user=j150719j dbname=j150719j");
        $query = "SELECT * FROM items WHERE name like $1";
        $result = pg_prepare($conn, "search", $query);
        $result = pg_execute($conn, "search", array($keyword));
        $num = pg_num_rows($result);
       

        print "<h1>検索結果</h1>";
        for ($i = 0; $i < $num; $i++){
            $row = pg_fetch_assoc($result, $i);
            $image = $row['pict'];
            if($row['sold_out'] == 't'){
                // print "<p>この商品は売り切れています</p>";
            }else{
                print <<< EOF
                <div class = "item">
                    <img src="{$image}" alt="検索結果" width="300">
                    <p>{$row['name']}</p>
                    <h2>¥ {$row['price']}</h2>
                    <a href="./detail.php?id={$row['id']}">詳細をみる</a>
                </div>
EOF;
            }

        }

        print "<a href=\"index.php\">topページへ</a>"

        // print "<table border = 1>";

        // for ($i = 0; $i < $num; $i++){
        //     $row = pg_fetch_assoc($result, $i);
        //     $image = $row['pict'];
        //     print "<tr>";
        //     print "<td>".$row['name']."</td>";
        //     print "<img src=\"{$image}\" alt=\"\">";
        //     if ($row['sold_out'] == 'f'){
        //         print '<td>販売中</td>';
        //     }else{
        //         print '<td>売り切れ</td>';
        //     }
        //     print "</tr>";
        // }
        // print "</table>";
    ?>
    </div>
</body>
</html>