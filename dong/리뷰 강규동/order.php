<!DOCTYPE html>
<html>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<head>
   
    <title>주문하기</title>
</head>
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
       
?>
    <form name="order_form" method="post" action="pay.php?pname=<?=$pname?>&price=<?=$price?>&pcount=<?=$pcount?>&sendfee=<?=$sendfee?>">
        <div>
           
            
            <p>계좌번호</p>
            <input type="text" name="acount">
            
            <p>사용할 적립금 
                <input type="text" name="pcredit" placeholder="입력해주세요.">원</p>
                <button>전액사용</button>
                


            <h4>배송 주소</h4>
        
<<<<<<< HEAD
        <ul >
            <li><input type="radio"  name="addr" value="회원정보주소" checked >회원정보주소</li>
            <li><input type="radio" name="addr"value="최근 배송지" >최근 배송지</li>
=======
        <ul>
            <li><input type="checkbox" name="addr[]" value="1">회원정보주소</li>
            <li><input type="checkbox" name="addr[]" value="2">최근 배송지</li>
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
        </ul>
        <h4>주소록</h4>
            <p><input type="text" name="address" placeholder="우편번호 입력"> <button onclick="find()">주소찾기</button></p>
            <p><input type="text" name="daddress" placeholder="세부주소 입력"></p>
        <br>

        <P>배송 확인 전화번호</P>
            <input type="text" name="phone">

        <h4>받는 분</h4>
            <p>이름 <input type="text" name="rname"></p>
            <p>휴대폰<input type="text" name="rphone"></p>
        <br>
        <h4>배송 요청사항</h4>
            <textarea name="request" rows="5" cols="60"></textarea>
            
            
      
<<<<<<< HEAD
            <p>결제 가격:<?=$price?></p>
=======
            <p>결제 가격:<dt name="price"><?=$price?></dt></p>
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
     
        
        
        </div>
    </form>

    <a href="#" onclick="check()">결제하러 가기</a>  
    
</body>

</html>