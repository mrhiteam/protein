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
        $sql_1 = "select count(*) from product";
        $result = mysqli_query($con,$sql_1);
        $count = mysqli_fetch_array($result);
        $temp = array(1,1,1,1);
        for ($a = 1; $a <= $count[0]; $a++) {
            $sql = "select * from product where num = $a";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            
            switch($row['kategorie']){
                case "쉐이크/보조제" :
                    {
                        if($temp[0]==1){
                        ?>
                            <h2>쉐이크/보조제</h2>
                        <?php
                            $temp[0]=2;
                        }
                        ?>
                        <div>
                            <a href="product_detail.php?num=<?=$row['num']?>"><img src="image/<?= $row['image_file'] ?>"></a>
                            <p>상품 이름:<?= $row['name'] ?></p>
                            <p>가격:<?= $row['price'] ?></p>
                        </div>    
                        <?php
                    break;
                    }
                case "헬스용품" :
                    {
                        if($temp[1]==1){
                        ?>
                            <h2>헬스용품</h2>
                        <?php
                            $temp[1]=2;
                        }
                        ?>
                        <div>
                            <a href="product_detail.php?num=<?=$row['num']?>"><img src="image/<?= $row['image_file'] ?>"></a>
                            <p>상품 이름:<?= $row['name'] ?></p>
                            <p>가격:<?= $row['price'] ?></p>
                        </div>    
                        <?php
                    break;
                    }
                case "스포츠웨어":
                    {
                        if($temp[2]==1){
                        ?>
                            <h2>스포츠웨어</h2>
                        <?php
                            $temp[2]=2;
                        }
                        ?>
                        <div>
                            <a href="product_detail.php?num=<?=$row['num']?>"><img src="image/<?= $row['image_file'] ?>"></a>
                            <p>상품 이름:<?= $row['name'] ?></p>
                            <p>가격:<?= $row['price'] ?></p>
                        </div>    
                        <?php
                    break;
                    }
                case "식품":
                    {
                        if($temp[3]==1){
                        ?>
                            <h2>식품</h2>
                        <?php
                            $temp[3]=2;
                        }
                        ?>
                        <div>
                            <a href="product_detail.php?num=<?=$row['num']?>"><img src="image/<?= $row['image_file'] ?>"></a>
                            <p>상품 이름:<?= $row['name'] ?></p>
                            <p>가격:<?= $row['price'] ?></p>
                        </div>    
                        <?php
                    break;
                    }

            }
        }
        ?>
    </section>
</body>

</html>