<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

    <script type="text/javascript" src="./js/login.js"></script>
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section>
        <?php

        $con = mysqli_connect("localhost", "project", "1234", "project");
        for ($a = 1; $a < 5; $a++) {
            $sql = "select * from product where num = $a";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
        ?>
            <div>
                <a href="product_detail.php?num=<?=$row['num']?>"><img src="image/<?= $row['image_file'] ?>"></a>
                <p>상품 이름:<?= $row['name'] ?></p>
                <p>가격:<?= $row['price'] ?></p>
            </div>
        <?php
        }
        ?>
    </section>
</body>

</html>