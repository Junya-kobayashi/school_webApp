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
        $keyword = "%".$_GET['keyword']."%";
        $conn = pg_connect("host = localhost user=j150719j dbname=j150719j");
        $query = "SELECT * FROM items WHERE name like $1";
        $result = pg_prepare($conn, "search", $query);
        $result = pg_execute($conn, "search", array($keyword));
        $num = pg_num_rows($result);
       
        print "<table border = 1>";

        for ($i = 0; $i < $num; $i++){
            $row = pg_fetch_assoc($result, $i);
            $image = $row['pict'];
            print "<tr>";
            print "<td>".$row['name']."</td>";
            print "<img src=\"{$image}\" alt=\"\">";
            if ($row['sold_out'] == 'f'){
                print '<td>販売中</td>';
            }else{
                print '<td>売り切れ</td>';
            }
            print "</tr>";
        }
        print "</table>";
    ?>
</body>
</html>