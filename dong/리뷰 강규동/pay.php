<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>벨지안 블루</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/p.css?after'>
    
</head>
<body>
    <div class ="container">
    <header>
        <?php include "header.php"?>
    </header>
     <section>
    <?php 
    $acount = $_POST["acount"];
    $price = $_GET["price"];
    $pcredit = $_POST["pcredit"];
    $addresset = $_POST["addr"];
    $sendfee = $_GET["sendfee"];
    $address = $_POST["address"];
    $daddress = $_POST["daddress"];
    $phone = $_POST["phone"];
    $rname = $_POST["rname"];
    $rphone = $_POST["rphone"];
    $request = $_POST["request"];
    $total = $price + $sendfee - $_SESSION["userpoint"];
   
    $basket = $_SESSION['order_basket'];
$price = $_SESSION['order_price'];
$regist_day = date("Y-m-d (H:i)");
$acount = $_POST['acount'];
$addr = $_POST['addr'];
$phone = $_POST['phone'];

    if (isset($_SESSION["userid"])) {
        $userid = $_SESSION["userid"];
        if (isset($_SESSION["userpoint"])){
            $userpoint = $_SESSION["userpoint"];
            $userpoint = $userpoint + ($price*0.01);
            $con = mysqli_connect("localhost", "dior909homme", "ngKan11gGu!", "dior909homme");
            $sql = "update members set point = $userpoint where id = '$userid'";
            mysqli_query($con,$sql);
            $_SESSION["userpoint"] = $userpoint;
            $userid = $_SESSION["userid"];
            $useremail = $_SESSION["useremail"];
            

            if($basket==0){
                $pname = $_SESSION['order_pname'];
                $pcount = $_SESSION['order_pcount'];
                $sql = "select * from product where name = '$pname'";
                $result_p = mysqli_query($con,$sql);
                $p_result = mysqli_fetch_row($result_p);
                $sql = "insert into orederlist values('','$p_result[1]', '$p_result[0]', '$p_result[3]', '$pcount', '$phone', '$regist_day', '$p_result[6]', '$address' ,'$userid' ,'$useremail','ready')";
                mysqli_query($con,$sql);
                mysqli_close($con);
            }
            else if($basket==1){
                for($i=1;$i<20;$i++){
                    if(isset($_SESSION["product'$i'"])){
                        $pname = $_SESSION["product'$i'"];
                        $price = $_SESSION["product'$i'price"];
                        $pcount = $_SESSION["product'$i'count"];
                        $sql = "select * from product where name = '$pname'";
                        $result_p = mysqli_query($con,$sql);
                        $p_result = mysqli_fetch_row($result_p);
                        $sql = "insert into orederlist values('','$p_result[1]', '$p_result[0]', '$p_result[3]', '$pcount', '$phone', '$regist_day', '$p_result[6]', '$address' ,'$userid' ,'$useremail','ready')";
                        mysqli_query($con,$sql);
                    }
                }
                mysqli_close($con);
                for($i=1;$i<20;$i++){
                    unset($_SESSION["product'$i'"]);
                    unset($_SESSION["product'$i'count"]);
                    unset($_SESSION["product'$i'price"]);
                    unset($_SESSION["price"]);
                  }
            }
        }
        
    }
    

    ?>


    
     <h2>주문/결제</h2>
    
    <div class="section__inner">
      <h3>상품정보</h3>
      <div class="box inner__info">
      <table>
        <tr align="center" class="info__line">
            <td width="55%">주문상품</td>
            <td width="15%">수량</td>
            <td width="15%">상품 금액</td>
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
                    <td align="right"><?=$_GET["price"]?>원</td>
                </tr>
                <tr>
                    <td>총 배송비</td>
                    <td align="right"><?=$_GET["sendfee"]?>원</td>
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
                    <td align="right"><?=$total?>원</td>
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
        <p><?=$addresset?>로 보냅니다.</p>
        <p><?=$address?>,<?=$daddress?></p>

        <h4>배송 요청사항</h4>
        <p><?=$request?></p>


        </div>
        <h3>결제 정보 입력</h3>
        <div class="box inner__finish">
        <div class="finish__one">
            <h4>결제수단</h4>
            <ul>
                <li><button onclick="mu()">무통장입금</button></li>
                <li><button onclick="sil()">실시간 이체</button></li>
                <li><button onclick="sin()">신용카드</button></li>
            </ul>
            <p id="one__message"></p>
        </div>
        <div class="finish__two">
            <table>
                <tr>
                    <td><h3>최종 결제 금액</h3></td>
                    <td align="right"><?=$total?>원</td>
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
                <button><a href="checkorder.php?">주문 확인</a></button>
            </div>
        </div>
      </div> 
     </section>
     <footer>
         <?php include "footer.php"?>
     </footer>   
    </div>
   
</body>
<script>
   function mu() {
    document.getElementById("one__message").innerHTML = "무통장입금으로 결제합니다!";
    window.open("mutong.php","mutong","left=200,top=200,width=373,height=300,scrollbars=no,resizable=yes");
   }

   function sil() {
       document.getElementById("one__message").innerHTML = "실시간이체로 결제합니다!";
       window.open("sil.php","sil","left=200,top=200,width=335,height=487,scrollbars=no,resizable=yes");
   }

   function sin() {
    document.getElementById("one__message").innerHTML = "신용카드로 결제합니다!";
    window.open("sin.php","sin","left=200,top=200,width=645,height=645,scrollbars=no,resizable=yes");
   }
</script>
<script src="pay.js"></script>
</html>