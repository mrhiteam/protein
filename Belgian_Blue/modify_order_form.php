
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/jquery-migrate-1.4.1.min.js"></script>
	<script src="js/jquery.color-2.1.2.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link rel="stylesheet" type="text/css" href="./css/header-footer.css">
</head>
<script>
    
</script>
<body> 
<header id="pcheader">
        <?php include "header.php";?>
    </header>
	<section>
        <?php
        $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
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

