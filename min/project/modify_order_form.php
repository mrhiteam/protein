
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title></title>

<script type="text/javascript" src="./js/login.js"></script>
</head>
<script>
    
</script>
<body> 
<header>
        <?php include "header.php";?>
    </header>
	<section>
        <?php
        $con = mysqli_connect("localhost", "project", "1234", "project");
        $sql = "select * from orederlist where status = 'ready' or status = 'going'";
        $result_order = mysqli_query($con,$sql);
        $result_ordercount = mysqli_num_rows($result_order);
        //$scale = 5;
        for($i=0;$i<$result_ordercount;$i++){
            mysqli_data_seek($result_order,$i);
            $orderlist = mysqli_fetch_array($result_order);
        ?>
            <div>
               <p>상품명:<?=$orderlist["name"]?> | 주문개수:<?=$orderlist["ordercount"]?> | 주문자:<?=$orderlist["userid"]?> | 주소:<?=$orderlist["addr"]?> | 연락처:<?=$orderlist["selphone"]?> | 주문상태:<?=$orderlist["status"]?></p>
               <a href="modify_order.php?num=<?=$orderlist['num']?>&fin=0">배송하기</a> 
               <a href="modify_order.php?num=<?=$orderlist['num']?>&fin=1" onclick="ordered()">배송완료</a>
            </div>
            <?php
        }
        ?>
        
	</section> 
</body>
</html>

