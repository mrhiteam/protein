<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>벨지안 블루</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='p.css?after'>
    
</head>
<body>
    <div class ="container">
    <header>
        <?php include "header.php"?>
    </header>
     <section>
    <?php 
    $acount = $_POST["acount"];
    $pcredit = $_POST["pcredit"];
<<<<<<< HEAD
   
    $addresset = $_POST["addr"];

=======
    $addrset = $_POST["addr[]"];
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
    $address = $_POST["address"];
    $daddress = $_POST["daddress"];
    $phone = $_POST["phone"];
    $rname = $_POST["rname"];
    $rphone = $_POST["rphone"];
    $request = $_POST["request"]
    
   

    ?>


    
     <h2>주문/결제</h2>
    
    <div class="section__inner">
      <h3>상품정보</h3>
      <div class="box inner__info">
      <table>
        <tr align="center" class="info__line">
            <td width="55%">주문상품</td>
            <td width="15%">수량</td>
            <td width="15%">총 상품 금액</td>
            <td width="15%">적립금</td>
        </tr>
        <tr>
      
            <td><?=$_GET["pname"]?></td>
            <td><?=$_GET["pcount"]?></td>
            <td><?=$_GET["price"]?></td>
            <td><?=$pcredit?></td>
        </tr>
      </table>
      </div>
      <h3>최종 결제 금액</h3>
      <div class="box inner__finalpay">
        <div class="finalpay__one">
            <p>사용할 적립금 <?=$pcredit?></p>
            <p>계좌번호 <?=$acount?></p>

        </div>
        <div class="finalpay__two">
            <table class="two__board">
                             
                <tr>
                    <td>총 상품 금액</td>
<<<<<<< HEAD
                    <td align="right"><?=$_GET["price"]?>원</td>
                </tr>
                <tr>
                    <td>총 배송비</td>
                    <td align="right"><?=$_GET["sendfee"]?>원</td>
=======
                    <td align="right"><?=$price?>원</td>
                </tr>
                <tr>
                    <td>총 배송비</td>
                    <td align="right"><?=$sendfee?>원</td>
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
                </tr>
                <tr>
                    <td>사용 적립금</td>
                    <td align="right"><?=$pcredit?>원</td>
                </tr>
                <tr class="board__third">
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>총 결제금액</td>
                    <td align="right"><?=$total?></td>
                </tr>
            </table>
            </div>
        </div>
        <h3>주문자 정보</h3>
        <div class="box inner__member">
         <h4>보내는 분</h4>   
            <p> 이름 <?=$_SESSION["username"]?></p>
            <p> 휴대폰 <?=$phone?></p>
            <p> 이메일 <?=$_SESSION["useremail"]?></p>
        
        <h4>받는 분</h4>
            <p> 이름 <?=$rname?></p>
            <p> 휴대폰 <?=$rphone?></p>
            
        </div>
        <h3>주문 배송</h3>
        <div class="box inner__send">
        <h4>받는 주소</h4>
<<<<<<< HEAD
        <p><?=$addresset?>로 보냅니다.</p>
=======
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
        <p><?=$address?>,<?=$daddress?></p>

        <h4>배송 요청사항</h4>
        <p><?=$request?></p>


        </div>
        <h3>결제 정보 입력</h3>
        <div class="box inner__finish">
        <div class="finish__one">
            <h4>결제수단</h4>
            <ul>
                <li><button>무통장입금</button></li>
                <li><button>실시간 이체</button></li>
                <li><button>신용카드</button></li>
            </ul>
        </div>
        <div class="finish__two">
            <table>
                <tr>
                    <td><h3>최종 결제 금액</h3></td>
                    <td align="right">php원</td>
                </tr>
            </table>
        </div>   
        </div>
        <div id="result">결제하기</div>
        <div class="rmodal hidden">
        <div class="rmodal__overlay"></div>
            <div class="rmodal__content">
                <h1>"결제가 완료되었습니다!"</h1>
                
                <hr>
                <h3>이용해주셔서 감사합니다!</h3>
                <button><a href="checkorder.php">주문 확인</a></button>
            </div>
        </div>
      </div> 
     </section>
     <footer>
         <?php include "footer.php"?>
     </footer>   
    </div>
   
</body>
<script src="pay.js"></script>
</html>