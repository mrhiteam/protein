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
        <?php include "header2.php"?>
    </header>
     <section>
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
       
            <td>php</td>
            <td>php</td>
            <td>php</td>
            <td>php</td>
        </tr>
      </table>
      </div>
      <h3>최종 결제 금액</h3>
      <div class="box inner__finalpay">
        <div class="finalpay__one">
            <form name="form1" method="POST" action="credit.php">
            <p>적립금 
                <input type="text" name="pcredit" placeholder="입력해주세요.">원</p>
                <input type="submit" value="입력">
                <input type="submit" value="전액사용">
                <p>보유한 적립금: php원</p>
                <p>총 적립금: php원</p>
            </form>
        </div>
        <div class="finalpay__two">
            <table class="two__board">
                             
                <tr>
                    <td>총 상품 금액</td>
                    <td align="right">php원</td>
                </tr>
                <tr>
                    <td>총 배송비</td>
                    <td align="right">php원</td>
                </tr>
                <tr>
                    <td>사용 적립금</td>
                    <td align="right">php원</td>
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
                    <td align="right">php원</td>
                </tr>
            </table>
            </div>
        </div>
        <h3>주문자 정보</h3>
        <div class="box inner__member">
            
            <p> 이름 php</p>
            <p> 유선 전화 php</p>
            <p> 휴대폰 php</p>
            <p> 이메일 php</p>
            
        </div>
        <h3>주문 배송</h3>
        <div class="box inner__send">
        <h4>배송 주소</h4>
        <form name="form2" method="POST" action="sendinfo.php">
        <ul>
            <li><input type="checkbox" name="addr[]" value="amember">회원정보주소</li>
            <li><input type="checkbox" name="addr[]" value="cursend">최근 배송지</li>
        </ul>
        <h4>주소록</h4>
            <p><input type="text" name="address" placeholder="우편번호 입력"> <button onclick="find()">주소찾기</button></p>
            <p><input type="text" name="daddress" placeholder="세부주소 입력"></p>
        <br>
        <h4>받는 분</h4>
            <p>이름 <input type="text" name="rname"></p>
            <p>연락처 <input type="text" name="rphone"></p>
        <br>
        <h4>배송 요청사항</h4>
            <textarea name="request" rows="5" cols="60"></textarea>
            <br><input type="submit" value="입력">
    </form>  
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
                <table>
                    <tr>
                        <td align="left">가맹점명</td>
                        <td align="right">벨지안 블루</td>
                    </tr>
                    <tr>
                        <td align="left">결제일시</td>
                        <td align="right">php</td>
                    </tr>
                    <tr>
                        <td align="left">결제수단</td>
                        <td align="right">php</td>
                    </tr>
                    <tr>
                        <td align="left">총 결제금액</td>
                        <td align="right">php</td>
                    </tr>
                   
                </table>
                <hr>
                <h3>이용해주셔서 감사합니다!</h3>
                <button><a href="index.php">홈으로 이동</a></button>
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