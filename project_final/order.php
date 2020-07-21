<!DOCTYPE html>
<html>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<head>
   
    <title>주문하기</title>
<style>
    .max {
        display: inline-block;
        cursor:pointer;
        border: 1px solid black;
    }
</style>
</head>

<header>
    <?php include "header.php";?>
</header>
<body>
<?php
    $price = $_GET["price"];
    $basket = $_GET["basket"];
    $sendfee = $_GET["sendfee"];
   
    $_SESSION['order_price'] = $price;
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
      //endoffile 에러가 나면 괄호문제이다.
?>
    <form name="order_form" method="post" action="pay.php?pname=<?=$pname?>&price=<?=$price?>&pcount=<?=$pcount?>&sendfee=<?=$sendfee?>">
        <div>
           
            
            <p>계좌번호</p>
            <input type="text" name="acount">
            
            <p>사용할 적립금</p>
            <input type="text" name="pcredit">
            <div class="max" onclick="max()">전액사용</div>
                


            <h4>배송 주소</h4>
        
        <ul >
            <li><input type="radio"  name="addr" value="회원정보주소" checked >회원정보주소</li>
            <li><input type="radio" name="addr"value="최근 배송지" >최근 배송지</li>
        </ul>
        <h4>주소록</h4>
            <p><input type="text" name="address" placeholder="주소 입력"></p>
            <p><input type="text" name="daddress" placeholder="상세주소 입력"></p>
        <br>

        <P>배송 확인 전화번호</P>
            <input type="text" name="phone">

        <h4>받는 분</h4>
            <p>이름 <input type="text" name="rname"></p>
            <p>휴대폰<input type="text" name="rphone"></p>
        <br>
        <h4>배송 요청사항</h4>
            <textarea name="request" rows="5" cols="60"></textarea>
            
            
      
            
     
        
        
        </div>
    </form>
    <p>결제 가격:<?=$price?></p>
    <button onclick="check()">결제하러 가기</button>  
    <footer>
        <?php include "footer.php";?>
    </footer>
    
    <script>
    function check(){
        if(!document.order_form.acount.value){
            alert("계좌를 입력하세요");
            document.order_form.acount.focus();
            return;
        }
        if(!document.order_form.address.value){
            alert("주소를 입력하세요");
            document.order_form.addr.focus();
            return;
        }
        if(!document.order_form.phone.value){
            alert("전화번호를 입력하세요");
            document.order_form.phone.focus();
            return;
        }

        if(document.order_form.pcredit.value > <?=$_SESSION["userpoint"]?>){
            alert("가지고 있는 포인트보다 높게 입력하셨습니다!");
            document.order_form.pcredit.value.focus();
            return;
        }

        
        
        document.order_form.submit();
       
    }

    
</script>
<script>
    function max(){
       
            document.order_form.pcredit.value = '<?=$_SESSION["userpoint"]?>'
        }
</script>
</body>

</html>