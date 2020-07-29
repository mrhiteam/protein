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
    <script type="text/javascript" src="./js/login.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='css/p.css?after'>
    <style>
        
        .section__inner >h2{
            color:#313cad;
            margin-top: 40px;
            margin-bottom:40px;
            font-size: 28px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header id="pcheader">
            <?php include "header.php" ?>
        </header>
        <section id="paying2">
            <?php
            $acount = $_POST["acount"];
            $point = $_POST["point"];
            $addresset = $_POST["addr"];
            $phone = $_POST["phone"];
            $rname = $_POST["rname"];
            $rphone = $_POST["rphone"];
            $request = $_POST["request"];
            $price = $_SESSION['order_price'];
            $pname = $_SESSION['order_pname'];
            $pcount = $_SESSION['order_pcount'];
            $sendfee = $_SESSION['order_sendfee'];

            $_SESSION['order_acount'] = $acount;
            $_SESSION['order_addr'] = $addresset;
            $_SESSION['order_point'] = $point;
            $_SESSION['order_phone'] = $phone;
            $_SESSION['order_rname'] = $rname;
            $_SESSION['order_rphone'] = $rphone;
            $_SESSION['order_request'] = $request;
            $total = $price + $sendfee - $point;


            ?>



            

            <div class="section__inner">
            <h2>주문/결제</h2>
                <h3>상품정보</h3>
                <div class="box10 inner__info">
                    <table>
                        <tr align="center" class="info__line">
                            <td width="55%">주문상품</td>
                            <td width="15%">수량</td>
                            <td width="15%">상품 금액</td>
                            <td width="15%">적립금</td>
                        </tr>
                        <?php
                        if ($_SESSION['order_basket'] == 0) {
                        ?>
                            <tr align="center">

                                <td><?= $pname ?></td>
                                <td><?= $pcount ?></td>
                                <td><?= $price ?></td>
                                <td><?= floor($price * 0.005) ?></td>
                            </tr>
                            <?php
                        } elseif ($_SESSION['order_basket'] == 1) {
                            for ($i = 1; $i < 20; $i++) {
                                if (isset($_SESSION["product'$i'"])) {
                            ?>
                                    <tr align="center">
                                        <td><?= $_SESSION["product'$i'"] ?></td>
                                        <td><?= $_SESSION["product'$i'count"] ?></td>
                                        <td><?= $_SESSION["product'$i'price"] ?></td>
                                        <td><?= $_SESSION["product'$i'price"] * 0.005 ?></td>
                                    </tr>
                        <?php
                                }
                            }
                        }
                        ?>
                    </table>
                </div>
                <h3>최종 결제 금액</h3>
                <div class="box10 inner__finalpay">
                    <div class="finalpay__one">
                        <p>사용할 적립금 <?= $point ?></p>
                        <p>계좌번호 <?= $acount ?></p>

                    </div>
                    <div class="finalpay__two">
                        <table class="two__board">

                            <tr>
                                <td>총 상품 금액</td>
                                <td align="right"><?= $price ?>원</td>
                            </tr>
                            <tr>
                                <td>총 배송비</td>
                                <td align="right"><?= $sendfee ?>원</td>
                            </tr>
                            <tr>
                                <td>사용 적립금</td>
                                <td align="right"><?= $point ?>원</td>
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
                                <td align="right"><?= $total ?>원</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <h3>주문자 정보</h3>
                <div class="box10 inner__member">
                    <h4>보내는 분</h4>
                    <p> 이름 <?= $_SESSION["username"] ?></p>
                    <p> 휴대폰 <?= $phone ?></p>
                    <p> 이메일 <?= $_SESSION["useremail"] ?></p>

                    <h4>받는 분</h4>
                    <p> 이름 <?= $rname ?></p>
                    <p> 휴대폰 <?= $rphone ?></p>

                </div>
                <h3>주문 배송</h3>
                <div class="box10 inner__send">
                    <h4>받는 주소</h4>
                    <p><?= $addresset ?>로 보냅니다.</p>

                    <h4>배송 요청사항</h4>
                    <p><?= $request ?></p>


                </div>
                <h3>결제 정보 입력</h3>
                <div class="box10 inner__finish">
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
                                <td>
                                    <h3>최종 결제 금액</h3>
                                </td>
                                <td align="right"><?= $total ?>원</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="result" onclick="payfunc()">결제하기</div>
                <div class="rmodal hidden">
                    <div class="rmodal__overlay"></div>
                    <div class="rmodal__content">
                        <h1>"결제가 완료되었습니다!"</h1>

                        <hr>
                        <h3>이용해주셔서 감사합니다!</h3>
                        <button><a href="pay_insert.php?">주문 확인</a></button>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <?php include "footer.php" ?>
        </footer>
    </div>

</body>
<script>
    function payfunc() {
        location.replace("payfunc.php");
    }

    function mu() {
        document.getElementById("one__message").innerHTML = "무통장입금으로 결제합니다!";
        window.open("mutong.php", "mutong", "left=200,top=200,width=373,height=300,scrollbars=no,resizable=yes");
    }

    function sil() {
        document.getElementById("one__message").innerHTML = "실시간이체로 결제합니다!";
        window.open("sil.php", "sil", "left=200,top=200,width=335,height=487,scrollbars=no,resizable=yes");
    }

    function sin() {
        document.getElementById("one__message").innerHTML = "신용카드로 결제합니다!";
        window.open("sin.php", "sin", "left=200,top=200,width=645,height=645,scrollbars=no,resizable=yes");
    }
</script>
<script src="pay.js"></script>

</html>