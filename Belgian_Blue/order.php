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
    <link rel="stylesheet" type="text/css" href="./css/mypage.css">
    <script type="text/javascript" src="./js/login.js"></script>
    <style>
        #paying .inner{
            width: 1024px;
            margin:0 auto;
            padding:10px;
        }
        #paying h2{
            color:#313cad;
            margin-top: 20px;
            margin-bottom:40px;
            font-size: 28px;
        }
        .paying_con{
            border:1px solid #00000030;
            padding: 10px;
        }
        .paying_con p{
            font-weight: bold;
            margin-top: 10px;
        }
        .max{
            border:1px solid #00000060;
            width: 120px;
            margin-top: 3px;
            text-align: center;
            color:#00000060;
        }
        .max:hover{
            border: 1px solid #000000;
            color:#000000;
            cursor:pointer;
        }
        .paying_ok{
            width: 100%;
            text-align: center;
            display: flex;
            margin-bottom: 60px;
        }
        .paying_ok p{
            width: 60%;
            height: 60px;
            font-size: 24px;
            background-color: #00000040;
            color:#000000;
            padding-top: 12px;
        }
        .paying_ok a{
            display: block;
            width: 40%;
            height: 60px;
            font-size: 24px;
            background-color: #000000;
            color:#fff;
            padding-top: 12px;
        }
    </style>
</head>
<script>
    function check(){
        if(!document.order_form.acount.value){
            alert("계좌를 입력하세요");
            document.order_form.acount.focus();
            return;
        }
        if(!document.order_form.addr.value){
            alert("주소를 입력하세요");
            document.order_form.addr.focus();
            return;
        }
        if(!document.order_form.phone.value){
            alert("전화번호를 입력하세요");
            document.order_form.phone.focus();
            return;
        }
        document.order_form.submit();
        //window.open("pay.php?phone="+document.order_form.phone.value+"&addr="+document.order_form.addr.value+"&acount="+document.order_form.acount.value,"order","left=700,top=300,width=700,height=500,scrollbars=no,resizable=yes");
    }
</script>
<body>
    <header id="pcheader">
    <?php include "header.php"?>
    </header>
    <section id="paying">
        <div class="inner">
            <h2>결제하기</h2>
<?php
    $price = $_GET["price"];
    $basket = $_GET["basket"];
    $sendfee = $_GET["sendfee"];
    $_SESSION['order_price'] = $price;
    $_SESSION['order_sendfee'] =$sendfee;
    if($basket==0){
        $pname = $_GET["pname"];
        $pcount = $_GET["pcount"];
        $price = $price*$pcount;
        $_SESSION['order_basket'] = $basket;
        $_SESSION['order_pname'] = $pname;
        $_SESSION['order_pcount'] = $pcount;
    }
    if($basket==1){
        $_SESSION['order_basket'] = $basket;
    }
?>
    <form name="order_form" method="post" action="pay.php">
        <div class="paying_con">
            <p>계좌번호 :</p>
            <input type="text" name="acount">
            <p>사용할 적립금 :</p>
            <input type="text" name="point" value="0">
            <div class="max" onclick="max()">적립금 전부사용</div>
            
            <p>받는 분</>
            <p>이름 :
                <br>
            <input type="text" name="rname"></p>
            <p>휴대폰 :
                <br>
            <input type="text" name="rphone"></p>
            
            <p>배송주소 :</p>
            <input type="text" name="addr">
            <P>배송 확인 전화번호</P>
            <input type="text" name="phone">
            
            <p>배송 요청사항</p>
            <textarea name="request" rows="5" cols="60" placeholder="문 앞에 놓아주세요"></textarea>

        </div>
    </form>
    <div class="paying_ok">
    <p>총 결제 금액: <?=($price+$sendfee)?>  [<?=$price?>+배송비<?=$sendfee?>]</p>
    <a href="#" onclick="check()">결제하기</a>
    </div>
    </div>
    </section>
    <footer>
    <?php include "footer.php"?>
    </footer>
</body>
<script>
    function max() {
            if (<?= $_SESSION["userpoint"] ?> > <?= $price ?>) {
                document.order_form.point.value = '<?= $price ?>';
            } else {
                document.order_form.point.value = '<?= $_SESSION["userpoint"] ?>';
            }
        }
</script>
</html>