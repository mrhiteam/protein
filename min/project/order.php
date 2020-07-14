<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
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
<?php
    $price = $_GET["price"];
    $basket = $_GET["basket"];
    session_start();
    $_SESSION['order_price'] = $price;
    if($basket==0){
        $pname = $_GET["pname"];
        $pcount = $_GET["pcount"];
        $price = $price*$pcount;
        $_SESSION['order_basket'] = $basket;
        $_SESSION['order_pname'] = $pname;
        $_SESSION['order_pcount'] = $pcount;
    }
?>
    <form name="order_form" method="post" action="pay.php">
        <div>
            <p>계좌번호:</p>
            <input type="text" name="acount">
            <p>배송주소:</p>
            <input type="text" name="addr">
            <P>배송 확인 전화번호</P>
            <input type="text" name="phone">
        </div>
    </form>
    <p>결제 가격:<?=$price?></p>
    <a href="#" onclick="check()">결제완료</a>
</body>

</html>