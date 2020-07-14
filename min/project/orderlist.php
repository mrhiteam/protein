
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title></title>

<script type="text/javascript" src="./js/login.js"></script>
</head>
<body> 
<header>
        <?php include "header.php";?>
    </header>
	<section>
        <?php
        $con = mysqli_connect("localhost", "project", "1234", "project");
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

