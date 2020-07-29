<!DOCTYPE html>

</head>

<body>
    <?php
    /*<div>
        <a href="itempagein.php?num=<?= $num?>"><img src="image/<?= $image_file?>"></a>
        <p>상품 이름:<?= $name?></p>
        <p>가격:<?= $price?></p>
    </div>*/
    /*<div>
            <a href="itempagein.php?num=<?= $num ?>"><img src="image/<?= $image_file ?>"></a>
            <p>상품 이름:<?= $name ?></p>
            <p>가격:<?= $price ?></p>
        </div>*/
    $kate = $_GET["kate"];
    $sub_kate = $_GET["sub_kate"];
    $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
    $sql_1 = "select count(*) from product";
    $result = mysqli_query($con, $sql_1);
    $count = mysqli_fetch_array($result);

    for ($a = 1; $a <= $count[0]; $a++) {
        $sql = "select * from product where num = $a";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        if($row!=null){
        $num = $row['num'];
        $image_file = $row['image_file'];
        $name = $row['name'];
        $price = $row['price'];
        $kategorie = $row['kategorie'];
        $sub_kategorie = $row['sub_kategorie'];
        }

        if ($row == null) {
            $count[0] = $count[0] + 1;
        } elseif ($kate == $row['kategorie'] && $sub_kate == "all") {
            echo ('<div class="item-box3">
            <div class="item-card">
                <a href="itempagein.php?num='.$num.'"><img src="image/'.$image_file.'"></a>
                <h3>'.$name.'</h3>
                <p>가격:'.$price.'원</p>
                </div>
            </div>');
    
        } elseif ($sub_kategorie == $sub_kate) {
            echo('<div class="item-box3">
            <div class="item-card">
                <a href="itempagein.php?num='.$num.'"><img src="image/'.$image_file.'"></a>
                <h3>'.$name.'</h3>
                <p>가격:'.$price.'원</p>
                </div>
            </div>');
        
        }
    }
    ?>
</body>

</html>