<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

    <script type="text/javascript" src="./js/login.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" href="css/header-footer.css?after">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/jquery-migrate-1.4.1.min.js"></script>
	<script src="js/jquery.color-2.1.2.min.js"></script>
	<script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/item-card.css">
    <link rel="stylesheet" type="text/css" href="./css/event-tip.css">
	<script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
	
</head>

<body>
    <header id="pcheader">
        <?php include "header.php"; ?>
    </header>
    <section>
    <article id="conta">
    <h1>상품 관리페이지</h2>
			<div class="inner">
            <div class="sub-contents2">
        <?php
        $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
        $sql_1 = "select count(*) from product";
        $result = mysqli_query($con, $sql_1);
        $count = mysqli_fetch_array($result);
        $temp = array(1, 1, 1, 1);
        
        //수정 필요...
        for ($a = 1; $a <= $count[0]; $a++) {
            $sql = "select * from product where num = $a";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
           
                        ?>
                        <div class="item-box3">
                        <div class="item-card">
                            <a href="product_management_form.php?num=<?=$row['num']?>"><img src="image/<?= $row['image_file'] ?>"></a>
                            <p>상품 이름:<?= $row['name'] ?></p>
                            <p>가격:<?= $row['price'] ?></p>
                        </div>  
                        </div>  
                        <?php
                    

            
        
        }
        ?>
        </div>
        </div>
    </section>
</body>

</html>
