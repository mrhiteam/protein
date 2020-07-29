<?php
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";
if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
else $userlevel = "";
if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
else $userpoint = "";
if (isset($_SESSION["checkpage"])) {
    $checkpage = $_SESSION["checkpage"];
} else {
    $_SESSION["checkpage"] = 1;
    $checkpage = $_SESSION["checkpage"];
}
?>
<script>
    function find() {
        window.open("member_find_form.php", "member_find_form", "left=400,top=100,width=800,height=800,scrollbars=no,resizable=yes");
    }
    window.addEventListener('scroll', function() {
        var scrollPos = window.scrollY || window.scrollTop || document
            .getElementsByTagName(
                "html"
            )[0]
            .scrollTop;

        console.log(scrollPos);
        if (scrollPos >= 300) {
            document
                .querySelector("#hidden_nav")
                .style
                .display = 'block';
        } else {
            document
                .querySelector("#hidden_nav")
                .style
                .display = 'none';
        }
    });

    //로그인 모달 기능구현 시작
    function membershipon() {
        document
            .querySelector("#membership")
            .style
            .display = "block";
    }

    function membershipoff() {
        document
            .querySelector("#membership")
            .style
            .display = "none";
    } //로그인 모달 기능구현 끝
    //카테고리 꾸미기
    var catedeco1 = 1;

    function catedeco() {
        if (catedeco1 == 1) {
            document
                .querySelector(".catedeco1")
                .style
                .color = "#fff";
            document
                .querySelector(".catedeco1")
                .style
                .backgroundColor = "#5763e6";
            document
                .querySelector(".catedeco1")
                .style
                .textShadow = "0 0 3px black";
            catedeco1 = 0;
        } else {
            document
                .querySelector(".catedeco1")
                .style
                .color = "black";
            document
                .querySelector(".catedeco1")
                .style
                .textShadow = "none";
            document
                .querySelector(".catedeco1")
                .style
                .backgroundColor = "#fff";
            catedeco1 = 1;
        }
    }

    var catedeco21 = 1;

    function catedeco2() {
        if (catedeco21 == 1) {
            document
                .querySelector(".catedeco2")
                .style
                .color = "#fff";
            document
                .querySelector(".catedeco2")
                .style
                .backgroundColor = "#5763e6";
            document
                .querySelector(".catedeco2")
                .style
                .textShadow = "0 0 3px black";
            catedeco21 = 0;
        } else {
            document
                .querySelector(".catedeco2")
                .style
                .color = "black";
            document
                .querySelector(".catedeco2")
                .style
                .textShadow = "none";
            document
                .querySelector(".catedeco2")
                .style
                .backgroundColor = "#fff";
            catedeco21 = 1;
        }
    } //카테고리 꾸미기 끝
    //카테고리 기능구현 시작
    $(document).ready(function() {
        $("#category").click(function() {
            $(".cate").slideToggle(300);
        });
    });
    var cateonoff1 = 1;
    var cateonoff2 = 1;
    var cateonoff3 = 1;
    var cateonoff4 = 1;

    function catebtn(a) {
        if (a == 1) {
            cateonoff1 = 1;
            if (cateonoff1 == 1) {
                document
                    .querySelector(".cate-1")
                    .style
                    .display = "block";
                document
                    .querySelector(".cate-2")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-3")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-4")
                    .style
                    .display = "none";
                cateonoff1 = 0;
                cateonoff2 = 1;
                cateonoff3 = 1;
                cateonoff4 = 1;
            } else {
                document
                    .querySelector(".cate-1")
                    .style
                    .display = "none";
                cateonoff1 = 1;
            }
        } else if (a == 2) {
            cateonoff2 = 1;
            if (cateonoff2 == 1) {
                document
                    .querySelector(".cate-1")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-2")
                    .style
                    .display = "block";
                document
                    .querySelector(".cate-3")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-4")
                    .style
                    .display = "none";
                cateonoff1 = 1;
                cateonoff2 = 0;
                cateonoff3 = 1;
                cateonoff4 = 1;
            } else {
                document
                    .querySelector(".cate-2")
                    .style
                    .display = "none";
                cateonoff2 = 1;
            }
        } else if (a == 3) {
            cateonoff3 = 1;
            if (cateonoff3 == 1) {
                document
                    .querySelector(".cate-1")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-2")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-3")
                    .style
                    .display = "block";
                document
                    .querySelector(".cate-4")
                    .style
                    .display = "none";
                cateonoff1 = 1;
                cateonoff2 = 1;
                cateonoff3 = 0;
                cateonoff4 = 1;
            } else {
                document
                    .querySelector(".cate-3")
                    .style
                    .display = "none";
                cateonoff3 = 1;
            }
        } else if (a == 4) {
            cateonoff4 = 1;
            if (cateonoff4 == 1) {
                document
                    .querySelector(".cate-1")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-2")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-3")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-4")
                    .style
                    .display = "block";
                cateonoff1 = 1;
                cateonoff2 = 1;
                cateonoff3 = 1;
                cateonoff4 = 0;
            } else {
                document
                    .querySelector(".cate-4")
                    .style
                    .display = "none";
                cateonoff4 = 1;
            }
        }
    } //카테고리 기능구현 끝

    //카테고리 상단고정 기능구현 시작 카테고리 상단고정 기능구현 끝
    $(document).ready(function() {
        $("#category1").click(function() {
            $(".cate1").slideToggle(300);
        });
    });
    var cateonoff11 = 1;
    var cateonoff21 = 1;
    var cateonoff31 = 1;
    var cateonoff41 = 1;

    function catebtn1(a) {
        if (a == 1) {
            cateonoff11 = 1;
            if (cateonoff11 == 1) {
                document
                    .querySelector(".cate-1-1")
                    .style
                    .display = "block";
                document
                    .querySelector(".cate-2-1")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-3-1")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-4-1")
                    .style
                    .display = "none";
                cateonoff11 = 0;
                cateonoff21 = 1;
                cateonoff31 = 1;
                cateonoff41 = 1;
            } else {
                document
                    .querySelector(".cate-1-1")
                    .style
                    .display = "none";
                cateonoff11 = 1;
            }
        } else if (a == 2) {
            cateonoff21 = 1;
            if (cateonoff21 == 1) {
                document
                    .querySelector(".cate-1-1")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-2-1")
                    .style
                    .display = "block";
                document
                    .querySelector(".cate-3-1")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-4-1")
                    .style
                    .display = "none";
                cateonoff11 = 1;
                cateonoff21 = 0;
                cateonoff31 = 1;
                cateonoff41 = 1;
            } else {
                document
                    .querySelector(".cate-2-1")
                    .style
                    .display = "none";
                cateonoff21 = 1;
            }
        } else if (a == 3) {
            cateonoff31 = 1;
            if (cateonoff31 == 1) {
                document
                    .querySelector(".cate-1-1")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-2-1")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-3-1")
                    .style
                    .display = "block";
                document
                    .querySelector(".cate-4-1")
                    .style
                    .display = "none";
                cateonoff11 = 1;
                cateonoff21 = 1;
                cateonoff31 = 0;
                cateonoff41 = 1;
            } else {
                document
                    .querySelector(".cate-3-1")
                    .style
                    .display = "none";
                cateonoff31 = 1;
            }
        } else if (a == 4) {
            cateonoff41 = 1;
            if (cateonoff41 == 1) {
                document
                    .querySelector(".cate-1-1")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-2-1")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-3-1")
                    .style
                    .display = "none";
                document
                    .querySelector(".cate-4-1")
                    .style
                    .display = "block";
                cateonoff11 = 1;
                cateonoff21 = 1;
                cateonoff31 = 1;
                cateonoff41 = 0;
            } else {
                document
                    .querySelector(".cate-4-1")
                    .style
                    .display = "none";
                cateonoff41 = 1;
            }
        }
    }
    //상단 광고 제거
    function topoff() {
        document.querySelector("#top").style.display = "none";
    } //상단광고 제거 끝
</script>

<div id="top">
    <span class="topoff" onclick="topoff()">✖</span>
    <a href="#">
        <div class="inner"><img src="image/top.png"></div>
    </a>
</div>

<?php
if (!$userid) {
?>
    <div class="inner">
        <ul>
            <li>
                <a href="#" id="open">로그인</a>

                <div class="modal hidden">
                    <div class="modal__overlay"></div>
                    <!-- 모달 회색배경 -->
                    <div class="bigmodal">
                        <div class="modal__content">
                            <button>✖</button>
                            <p>로그인</p>
                            <form name="login_form" method="post" action="login.php">
                                <ul>
                                    <li><input type="text" name="id" placeholder="아이디"></li>
                                    <li><input type="password" id="pass" name="pass" placeholder="비밀번호"></li>
                                    <!-- pass -->
                                </ul>
                                <div id="login_btn">
                                    <a href="#" onclick="check_input()">로그인</a>
                                </div>
                            </form>
                            <div class="login_join">
                                <ul>
                                    <li>
                                        <a href="sign_in_form.php">회원가입</a>
                                    </li>
                                    <li>
                                        <a href="" onclick="find()">아이디/비밀번호 찾기></a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="membershipon()">회원 혜택 알아보기 ></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div id="membership">
                            <a href="#" class="membershipoff" onclick="membershipoff()">✖</a>
                            <p>멤버십 혜택</p>
                            <table>
                                <tr>
                                    <th>벨지안 블루
                                        <br>
                                        <sup>50만원 이상</sup>
                                    </th>
                                    <td>적립금</td>
                                    <td>생일쿠폰</td>
                                    <td>무료반품</td>

                                </tr>
                                <tr>
                                    <th></th>
                                    <td>5%</td>
                                    <td>20%할인쿠폰<br>2장</td>
                                    <td>월2회<br>무료반품</td>

                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <th>헬창<br>
                                        <sup>20만원 이상</sup>
                                    </th>
                                    <td>적립금</td>
                                    <td>생일쿠폰</td>
                                    <td>무료반품</td>

                                </tr>
                                <tr>
                                    <th></th>
                                    <td>3%</td>
                                    <td>20%할인쿠폰<br>1장</td>
                                    <td>월1회<br>무료반품</td>

                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <th>헬린이<br>
                                        <sup>기본</sup>
                                    </th>
                                    <td>적립금</td>
                                    <td>생일쿠폰</td>
                                    <td>무료반품</td>

                                </tr>
                                <tr>
                                    <th></th>
                                    <td>2%</td>
                                    <td>10%할인쿠폰<br>1장</td>
                                    <td>없음</td>

                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="customercenter.php">고객센터</a>
            </li>
            <li>
                <a href="sign_in_form.php">회원가입</a>
            </li>
        </ul>
        <div id="logo">
            <a href="index.php"><img src="image/logo4.png" alt="logo"></a>
        </div>

    </div>
<?php
} else {
    $logged = $username . "(" . $userid . ")님 등급:" . $userlevel . ", 보유 포인트:" . $userpoint . "";
?>
    <div class="inner">
        <ul>
            <li><?= $logged ?></li>
            <li>
                <a href="logout.php">로그아웃</a>
            </li>
            <li>
                <a href="checkorder.php">주문/배송조회</a>
            </li>
            <li>
                <a href="customercenter.php">고객센터</a>
            </li>
        </ul>
        <div id="logo"><a href="index.php"><img src="image/logo4.png" alt="logo"></a></div>
        <ul>
            <li>
                <a href="basket.php">
                    <i class="xi-cart">장바구니</i>
                </a>
            </li>
            <li>
                <a href="mypage.php">
                    <i class="xi-home">마이페이지</i>
                </a>
            </li>
            <?php
            if ($userlevel == 1) {
            ?>
                <a href="management_form.php">관리자페이지</a>
            <?php
            }
            ?>
        </ul>
    </div>
<?php
}
?>
<nav>
    <div class="inner">
        <a id="category">
            <i class="xi-list catedeco1" onclick="catedeco()">
                카테고리</i>
        </a>
        <ul>
            <li>
                <a href="newproduct.php">오리진</a>
            </li>
            <li>
                <a href="bestproduct.php">인기상품</a>
            </li>
            <li>
                <a href="tip.php">건강 꿀 팁!</a>
            </li>
            <li>
                <a href="event.php">이벤트</a>
            </li>
        </ul>
    </div>
    <ul class="cate">
        <div class="inner">
            <li>
                <a href="#" onmouseover="catebtn(1)">쉐이크/보조제</a>
                <ul class="cate-1">
                    <li>
                        <a href="product.php?kate=쉐이크/보조제&sub_kate=all">전체</a>
                    </li>
                    <li>
                        <a href="product.php?kate=쉐이크/보조제&sub_kate=단백질쉐이크">단백질 쉐이크</a>
                    </li>
                    <li>
                        <a href="product.php?kate=쉐이크/보조제&sub_kate=웨이트보조제">웨이트 보조제</a>
                    </li>
                    <li>
                        <a href="product.php?kate=쉐이크/보조제&sub_kate=체중조절">체중 조절</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#" onmouseover="catebtn(2)">스포츠웨어</a>
                <ul class="cate-2">
                    <li>
                        <a href="product.php?kate=스포츠웨어&sub_kate=all">전체</a>
                    </li>
                    <li>
                        <a href="product.php?kate=스포츠웨어&sub_kate=MAN">MAN</a>
                    </li>
                    <li>
                        <a href="product.php?kate=스포츠웨어&sub_kate=WOMAN">WOMAN</a>
                    </li>
                    <li>
                        <a href="product.php?kate=스포츠웨어&sub_kate=SHOSE">SHOSE</a>
                    </li>
                    <li>
                        <a href="product.php?kate=스포츠웨어&sub_kate=CAP">CAP</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onmouseover="catebtn(3)">헬스 용품</a>
                <ul class="cate-3">
                    <li>
                        <a href="product.php?kate=헬스용품&sub_kate=all">전체</a>
                    </li>
                    <li>
                        <a href="product.php?kate=헬스용품&sub_kate=덤벨/바벨/케틀벨">덤벨/바벨/케틀벨</a>
                    </li>
                    <li>
                        <a href="product.php?kate=헬스용품&sub_kate=스트랩/랩/벨트">스트랩/랩/벨트</a>
                    </li>
                    <li>
                        <a href="product.php?kate=헬스용품&sub_kate=탄력봉">탄력봉</a>
                    </li>
                    <li>
                        <a href="product.php?kate=헬스용품&sub_kate=기타">기타</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onmouseover="catebtn(4)">웨이트 식품</a>
                <ul class="cate-4">
                    <li>
                        <a href="product.php?kate=식품&sub_kate=all">전체</a>
                    </li>
                    <li>
                        <a href="product.php?kate=식품&sub_kate=닭가슴살">닭가슴살</a>
                    </li>
                    <li>
                        <a href="product.php?kate=식품&sub_kate=다이어트도시락">다이어트 도시락</a>
                    </li>
                    <li>
                        <a href="product.php?kate=식품&sub_kate=세트">세트</a>
                    </li>
                </ul>
            </li>
        </div>
    </ul>
</nav>
<nav id="hidden_nav">
    <div class="inner">
        <a id="category1">
            <i class="xi-list catedeco2" onclick="catedeco2()">
                카테고리</i>
        </a>
        <ul>
            <li>
                <a href="newproduct.php">신상품</a>
            </li>
            <li>
                <a href="bestproduct.php">인기상품</a>
            </li>
            <li>
                <a href="tippage.html">건강 꿀 팁!</a>
            </li>
            <li>
                <a href="event.php">이벤트</a>
            </li>
        </ul>
    </div>
    <ul class="cate1">
        <div class="inner">
            <li>
                <a href="" onmouseover="catebtn1(1)">쉐이크/보조제</a>
                <ul class="cate-1-1">
                    <li>
                        <a href="product.php?kate=쉐이크/보조제">전체</a>
                    </li>
                    <li>
                        <a href="product.php?sub_kate=단백질쉐이크">단백질 쉐이크</a>
                    </li>
                    <li>
                        <a href="product.php?sub_kate=웨이트보조제">웨이트 보조제</a>
                    </li>
                    <li>
                        <a href="product.php?sub_kate=체중조절">체중 조절</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#" onmouseover="catebtn1(2)">스포츠웨어</a>
                <ul class="cate-2-1">
                    <li>
                        <a href="product.php?kate=스포츠웨어">전체</a>
                    </li>
                    <li>
                        <a href="product.php?sub_kate=MAN">MAN</a>
                    </li>
                    <li>
                        <a href="product.php?sub_kate=WOMAN">WOMAN</a>
                    </li>
                    <li>
                        <a href="product.php?sub_kate=SHOSE">SHOSE</a>
                    </li>
                    <li>
                        <a href="product.php?sub_kate=CAP">CAP</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onmouseover="catebtn1(3)">헬스 용품</a>
                <ul class="cate-3-1">
                    <li>
                        <a href="product.php?kate=헬스용품">전체</a>
                    </li>
                    <li>
                        <a href="product.php?sub_kate=덤벨/바벨/케틀벨">덤벨/바벨/케틀벨</a>
                    </li>
                    <li>
                        <a href="product.php?sub_kate=스트랩/랩/벨트">스트랩/랩/벨트</a>
                    </li>
                    <li>
                        <a href="product.php?sub_kate=탄력봉">탄력봉</a>
                    </li>
                    <li>
                        <a href="product.php?sub_kate=기타">기타</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onmouseover="catebtn1(4)">웨이트 식품</a>
                <ul class="cate-4-1">
                    <li>
                        <a href="product.php?kate=식품">전체</a>
                    </li>
                    <li>
                        <a href="product.php?sub_kate=닭가슴살">닭가슴살</a>
                    </li>
                    <li>
                        <a href="product.php?sub_kate=다이어트도시락">다이어트 도시락</a>
                    </li>
                    <li>
                        <a href="product.php?sub_kate=세트">세트</a>
                    </li>
                </ul>
            </li>
        </div>
    </ul>
</nav>

<script>
    const openButton = document.querySelector("#open");

    const modal = document.querySelector(".modal");

    const closeButton = modal.querySelector("button");
    const openModal = function() {
        modal
            .classList
            .remove("hidden");
    };
    const closeModal = function() {
        modal
            .classList
            .add("hidden");
    };

    closeButton.addEventListener("click", closeModal);
    openButton.addEventListener("click", openModal);
</script>

</body>

</html>