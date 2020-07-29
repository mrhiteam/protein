
<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.4.1.min.js"></script>
    <script src="js/jquery.color-2.1.2.min.js"></script>
    <script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" type="text/css" href="./css/header-footer.css">
    <link rel="stylesheet" href="css/header-footer.css?after">
<script type="text/javascript" src="./js/login.js"></script>
</head>
<body> 
    <header id="pcheader">
        <?php include "header.php";?>
    </header>
	<section>
        <?php
        $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
        $sql = "select * from orederlist";
        $result_order = mysqli_query($con,$sql);
        $result_ordercount = mysqli_num_rows($result_order);
        $totalprice=0;
        //$scale = 5;
        for($i=0;$i<$result_ordercount;$i++){
            mysqli_data_seek($result_order,$i);
            $orderlist = mysqli_fetch_array($result_order);
            $totalprice = $totalprice+($orderlist["price"]*$orderlist["ordercount"]);
        ?>
            <div>
               <p>상품명:<?=$orderlist["name"]?> | 주문개수:<?=$orderlist["ordercount"]?> | 주문자:<?=$orderlist["userid"]?> | 주소:<?=$orderlist["addr"]?> | 연락처:<?=$orderlist["selphone"]?> | 총 가격:<?=$orderlist["price"]*$orderlist["ordercount"]?> | 주문상태:<?=$orderlist["status"]?></p>
            </div>
            <?php
        }
        ?>
        <p>총 판매액: <?=$totalprice?></p>
	</section> 
</body>
</html>

