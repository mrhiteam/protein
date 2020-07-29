<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.4.1.min.js"></script>
	<script src="js/jquery.color-2.1.2.min.js"></script>
	<script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link rel="stylesheet" type="text/css" href="./css/header-footer.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
	<link rel="stylesheet" href="css/header-footer.css?after">
	<link rel="stylesheet" href="css/main.css?after" />
	<link rel="stylesheet" type="text/css" href="./css/item-card.css">
	<script type="text/javascript" src="./js/login.js"></script>
    <?php
session_start();
    ?>
    <script>
        function check_input(a) {
            var b = document.querySelector("#checked").innerHTML;
            var k = a + " 아이디는 사용 가능합니다."
            if (document.formf.jook2.value != "동의") {
                alert("동의를 하셔야 합니다!");
                return;
            }
            if (document.formff.jook1.value != "동의") {
                alert("동의를 하셔야 합니다!");
                return;
            }
            if (!document.member_form.id.value) {
                alert("아이디를 입력하세요!");
                document.member_form.id.focus();
                return;
            }
            if (b != k) {
                alert("아이디 중복체크를 해주세요!");
                return;
            }

            if (!document.member_form.pass.value) {
                alert("비밀번호를 입력하세요!");
                document.member_form.pass.focus();
                return;
            }

            if (!document.member_form.pass_confirm.value) {
                alert("비밀번호확인을 입력하세요!");
                document.member_form.pass_confirm.focus();
                return;
            }

            if (!document.member_form.name.value) {
                alert("이름을 입력하세요!");
                document.member_form.name.focus();
                return;
            }

            if (!document.member_form.address.value) {
                alert("주소를 입력하세요!");
                document.member_form.address.focus();
                return;
            }

            if (!document.member_form.email1.value) {
                alert("이메일 주소를 입력하세요!");
                document.member_form.email1.focus();
                return;
            }

            if (!document.member_form.email2.value) {
                alert("이메일 주소를 입력하세요!");
                document.member_form.email2.focus();
                return;
            }
            if (!document.member_form.selphone.value) {
                alert("전화번호를 입력하세요!");
                document.member_form.selphone.focus();
                return;
            }

            if (document.member_form.pass.value !=
                document.member_form.pass_confirm.value) {
                alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
                document.member_form.pass.focus();
                document.member_form.pass.select();
                return;
            }

            document.member_form.submit();
        }

        function reset_form() {
            document.member_form.id.value = "";
            document.member_form.pass.value = "";
            document.member_form.pass_confirm.value = "";
            document.member_form.name.value = "";
            document.member_form.address.value = "";
            document.member_form.email1.value = "";
            document.member_form.email2.value = "";
            document.member_form.selphone.value = "";
            document.member_form.id.focus();
            return;

        }

        function check_id() {
            var a = document.member_form.id.value;
            fetch('member_check_id.php?id=' + a).then(function(response) {
                response.text().then(function(text) {
                    document.querySelector('#checked').innerHTML = text;
                })
            })
            // window.open("member_check_id.php?id=" + document.member_form.id.value,"IDcheck","left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
        }
    </script>
    <style>
        #join_ok>h2 {
            color: #313cad;
            margin-bottom: 100px;
        }

        #join_box {
            width: 1024px;
            margin: 0 auto;
            padding:30px;
        }

        .oksign {
            width: 100%;
            height: 120px;
            overflow: auto;
            border: 1px solid #313cad60;
        }

        legend {
            margin-top: 20px;
            font-weight: bold;
        }

        .formf {
            border-bottom: 1px solid #313cad60;
            padding-bottom: 40px;
        }

        .joinclear,
        .joincancel {
            width: 240px;
            height: 60px;
            display: inline-block;
            text-decoration: none;
            font-weight: bold;
            font-size: 24px;
            padding: 10px;
            text-align: center;
            box-sizing: border-box;
            margin-left: 10px;
            margin-top: 60px;
            margin-bottom: 100px;
        }

        .joinclear {
            color: #fff;
            background-color: #313cad;
            margin-left: 262px;
        }

        .joincancel {
            color: #313cad;
            border: 1px solid #313cad;
        }

        .buttons {
            margin-top: 30px;
            border-top: 1px solid #313cad60;
        }

        .col1 {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <header id="pcheader">
        <?php include "header.php"; ?>
    </header>
    <?php include "mobheader.php" ?>
    <div id="join_box">
        <div id="join_ok">
            <h2>회원 가입</h2>

            <form name="formff">
                <legend>회원 약관</legend>
                <div class="oksign">전자상거래(인터넷사이버몰) 표준약관

                    표준약관 제10023호
                    (2010. 12. 17. 개정)



                    제1조(목적) 이 약관은재미어트 회사(전자상거래 사업자)가 운영하는 재미어트 사이버 몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.

                    ※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다」

                    제2조(정의)

                    ① “몰”이란 재미어트 회사가 재화 또는 용역(이하 “재화등”이라 함)을 이용자에게 제공하기 위하여 컴퓨터등 정보통신설비를 이용하여 재화등을 거래할 수 있도록 설정한 가상의 영업장을 말하며, 아울러 사이버몰을 운영하는 사업자의 의미로도 사용합니다.

                    ② “이용자”란 “몰”에 접속하여 이 약관에 따라 “몰”이 제공하는 서비스를 받는 회원 및 비회원을 말합니다.

                    ③ ‘회원’이라 함은 “몰”에 개인정보를 제공하여 회원등록을 한 자로서, “몰”의 정보를 지속적으로 제공받으며, “몰”이 제공하는 서비스를 계속적으로 이용할 수 있는 자를 말합니다.

                    ④ ‘비회원’이라 함은 회원에 가입하지 않고 “몰”이 제공하는 서비스를 이용하는 자를 말합니다.

                    제3조 (약관등의 명시와 설명 및 개정)
                    ① “몰”은 이 약관의 내용과 상호 및 대표자 성명, 영업소 소재지 주소(소비자의 불만을 처리할 수 있는 곳의 주소를 포함), 전화번호·모사전송번호·전자우편주소, 사업자등록번호, 통신판매업신고번호, 개인정보관리책임자등을 이용자가 쉽게 알 수 있도록 00 사이버몰의 초기 서비스화면(전면)에 게시합니다. 다만, 약관의 내용은 이용자가 연결화면을 통하여 볼 수 있도록 할 수 있습니다.

                    ② “몰은 이용자가 약관에 동의하기에 앞서 약관에 정하여져 있는 내용 중 청약철회·배송책임·환불조건 등과 같은 중요한 내용을 이용자가 이해할 수 있도록 별도의 연결화면 또는 팝업화면 등을 제공하여 이용자의 확인을 구하여야 합니다.

                    ③ “몰”은 전자상거래등에서의소비자보호에관한법률, 약관의규제에관한법률, 전자거래기본법, 전자서명법, 정보통신망이용촉진등에관한법률, 방문판매등에관한법률, 소비자보호법 등 관련법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.

                    ④ “몰”이 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 몰의 초기화면에 그 적용일자 7일이전부터 적용일자 전일까지 공지합니다.
                    다만, 이용자에게 불리하게 약관내용을 변경하는 경우에는 최소한 30일 이상의 사전 유예기간을 두고 공지합니다. 이 경우 "몰“은 개정전 내용과 개정후 내용을 명확하게 비교하여 이용자가 알기 쉽도록 표시합니다.

                    ⑤ “몰”이 약관을 개정할 경우에는 그 개정약관은 그 적용일자 이후에 체결되는 계약에만 적용되고 그 이전에 이미 체결된 계약에 대해서는 개정전의 약관조항이 그대로 적용됩니다. 다만 이미 계약을 체결한 이용자가 개정약관 조항의 적용을 받기를 원하는 뜻을 제3항에 의한 개정약관의 공지기간내에 ‘몰“에 송신하여 ”몰“의 동의를 받은 경우에는 개정약관 조항이 적용됩니다.

                    ⑥ 이 약관에서 정하지 아니한 사항과 이 약관의 해석에 관하여는 전자상거래등에서의소비자보호에관한법률, 약관의규제등에관한법률, 공정거래위원회가 정하는 전자상거래등에서의소비자보호지침 및 관계법령 또는 상관례에 따릅니다.

                    제4조(서비스의 제공 및 변경)

                    ① “몰”은 다음과 같은 업무를 수행합니다.

                    1. 재화 또는 용역에 대한 정보 제공 및 구매계약의 체결
                    2. 구매계약이 체결된 재화 또는 용역의 배송
                    3. 기타 “몰”이 정하는 업무

                    ② “몰”은 재화 또는 용역의 품절 또는 기술적 사양의 변경 등의 경우에는 장차 체결되는 계약에 의해 제공할 재화 또는 용역의 내용을 변경할 수 있습니다. 이 경우에는 변경된 재화 또는 용역의 내용 및 제공일자를 명시하여 현재의 재화 또는 용역의 내용을 게시한 곳에 즉시 공지합니다.

                    ③ “몰”이 제공하기로 이용자와 계약을 체결한 서비스의 내용을 재화등의 품절 또는 기술적 사양의 변경 등의 사유로 변경할 경우에는 그 사유를 이용자에게 통지 가능한 주소로 즉시 통지합니다.

                    ④ 전항의 경우 “몰”은 이로 인하여 이용자가 입은 손해를 배상합니다. 다만, “몰”이 고의 또는 과실이 없음을 입증하는 경우에는 그러하지 아니합니다.</div>
                <input type="radio" name="jook1" value="동의"> 약관에 동의합니다.
                <input type="radio" name="jook1" value="동의x" checked> 동의하지않습니다.
            </form>


            <form name="formf" class="formf">
                <legend>개인정보 수집 및 이용에 대한 안내</legend>
                <div class="oksign">벨지안블루는 회원가입 및 비회원 구매 시 서비스 제공을 위해 필요한 최소한의 개인정보를 수집하고 있습니다. 재미어트는 아래 명시된 목적 외에는 고객의 개인정보를 이용 또는 제공하지 않습니다. 본 동의서 내용은 정부의 법률 및 지침 변경이나 회사 정책에 따라 변경될 수 있으며, 변경 내용은 재미어트 홈페이지(www.jamietshop.co.kr)에 공지함으로써 회원에게 고지한 것으로 간주합니다.

                    [개인정보 수집 및 이용목적]
                    ① 재미어트는 고객님께서 비회원으로 주문하거나 각종 서비스를 이용하는데 있어, 원활한 주문 및 서비스 접수, 물품 배송, 대금 결제 및 편리하고 유익한 맞춤정보를 제공하기 위한 최소한의 정보를 수집합니다.
                    - E-mail, 연락처 : 고지의 전달. 불만처리나 주문/배송정보 안내 등 원할한 의사소통 경로의 확보.
                    - 성명, 주소 : 고지의 전달, 청구서, 정확한 상품 배송지의 확보.
                    - 은행계좌번호, 신용카드번호 : 유료정보에 대한 이용 및 상품구매에 대한 결제
                    ② 비회원주문 시 제공하신 모든 정보는 상기 목적에 필요한 용도 이외로는 사용되지 않습니다.

                    [수집하는 개인정보 항목]
                    - 성명, E-mail, 전화번호, 주소, 은행계좌번호, 신용카드번호

                    [수집하는 개인정보의 보유 및 이용기간]
                    원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 바로 파기합니다. 단, 서비스 이용의 혼선을 방지하기 위해 이용계약 해지일로부터 1년간 해당 회원의 수집된 개인정보를 보존합니다. 그리고 상법, 전자상거래 등에서의 소비자보호에 관한 법률 등 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 관계법령에서 정한 기간 동안 회원정보를 보관합니다. 이 경우 회사는 보관하는 정보를 그 보관의 목적으로만 이용하며 보존기간은 아래와 같습니다.

                    -계약 또는 청약철회 등에 관한 기록 : 5년 (전자상거래등에서의 소비자보호에 관한 법률)
                    -대금결제 및 재화 등의 공급에 관한 기록 : 5년 (전자상거래등에서의 소비자보호에 관한 법률)
                    -소비자의 불만 또는 분쟁처리에 관한 기록 : 3년 (전자상거래등에서의 소비자보호에 관한 법률)
                    -신용정보의 수집/처리 및 이용 등에 관한 기록 : 3년 (신용정보의 이용 및 보호에 관한 법률)</div>
                <input type="radio" name="jook2" value="동의"> 개인정보 수집 및 이용에 대해 동의합니다.
                <input type="radio" name="jook2" value="동의x" checked> 동의하지않습니다.
            </form>
            <form name="member_form" method="post" action="sign_in.php" class="forms">

                <div class="form id">
                    <legend>회원 정보 입력</legend>
                    <div class="col1">아이디</div>
                    <div class="col2">
                        <input type="text" name="id">
                    </div>
                    <div class="col3">
                        <div id="checked"></div>
                        <input type="button" value="중복체크" onclick="check_id()">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="form">
                    <div class="col1">비밀번호</div>
                    <div class="col2">
                        <input type="password" name="pass" autocomplete="on">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="form">
                    <div class="col1">비밀번호 확인</div>
                    <div class="col2">
                        <input type="password" name="pass_confirm" autocomplete="on">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="form">
                    <div class="col1">이름</div>
                    <div class="col2">
                        <input type="text" name="name">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="form">
                    <div class="col1">주소</div>
                    <div class="col2">
                        <input type="text" name="address">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="form email">
                    <div class="col1">이메일</div>
                    <div class="col2">
                        <input type="text" name="email1">@<input type="text" name="email2">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="form">
                    <div class="col1">전화번호</div>
                    <div class="col2">
                        <input type="text" name="selphone">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="bottom_line"> </div>
                <div class="buttons">

                    <a href="#" onclick="check_input(document.member_form.id.value)" class="joinclear">가입하기</a>
                    <a href="#" onclick="reset_form()" class="joincancel">재입력</a>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>