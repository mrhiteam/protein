<?php

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
    //모바일 카테고리 열기 닫기
    function mobcateon() {
        document.querySelector(".mobmodal").style.display = "block";
    }

    function mobcateoff() {
        document.querySelector(".mobmodal").style.display = "none";
    }
    //모바일 카테고리 메뉴 열기 닫기
    var mobmenu1_1 = 1;
    var mobmenu2_1 = 1;
    var mobmenu3_1 = 1;
    var mobmenu4_1 = 1;

    function mobmenu1(a) {
        if (a == 1) {
            if (mobmenu1_1 == 1) {
                document.querySelector(".mobmenu1").style.display = "block";
                mobmenu1_1 = 0;
            } else {
                document.querySelector(".mobmenu1").style.display = "none";
                mobmenu1_1 = 1;
            }
        } else if (a == 2) {
            if (mobmenu2_1 == 1) {
                document.querySelector(".mobmenu2").style.display = "block";
                mobmenu2_1 = 0;
            } else {
                document.querySelector(".mobmenu2").style.display = "none";
                mobmenu2_1 = 1;
            }
        } else if (a == 3) {
            if (mobmenu3_1 == 1) {
                document.querySelector(".mobmenu3").style.display = "block";
                mobmenu3_1 = 0;
            } else {
                document.querySelector(".mobmenu3").style.display = "none";
                mobmenu3_1 = 1;
            }
        } else if (a == 4) {
            if (mobmenu4_1 == 1) {
                document.querySelector(".mobmenu4").style.display = "block";
                mobmenu4_1 = 0;
            } else {
                document.querySelector(".mobmenu4").style.display = "none";
                mobmenu4_1 = 1;
            }
        }


    }
</script>

<header id="mobheader">
    <?php
    if (!$userid) {
    ?>
        <div id="mobheadtop">
                    <a><i class="xi-list catedeco1" class="mobcateon" onclick="mobcateon()"></i></a>
                    <!--<a href="#" class="mobcateon" onclick="mobcateon()">카테고리</a>-->
                    <div id="moblogo"><a href="index.php"><img src="image/logo4.png" alt="logo"></a></div>
                    <a href="basket.php"><i class="xi-cart"></i></a>
                </div>
                <div class="mobmodal">
                    <div class="mobcatebg"></div>
                    <div class="mobcate-1">
                        <div>
                            <a href="#" class="mobcateoff" onclick="mobcateoff()">
                                <div></div>
                                <div></div>
                            </a>
                        </div>

                        <div class="moblogin-join">
                            <a href="login_form.php" class="moblogin">로그인</a>
                            <a href="sign_in_form.php" class="mobjoin">회원가입</a>
                        </div>
            <?php
        } else {
            ?>
                <div id="mobheadtop">
                    <a><i class="xi-list catedeco1" class="mobcateon" onclick="mobcateon()"></i></a>
                    <!--<a href="#" class="mobcateon" onclick="mobcateon()">카테고리</a>-->
                    <div id="moblogo"><a href="index.php"><img src="image/logo4.png" alt="logo"></a></div>
                    <a href="basket.php"><i class="xi-cart"></i></a>
                </div>
                <div class="mobmodal">
                    <div class="mobcatebg"></div>
                    <div class="mobcate-1">
                        <div>
                            <p><?= $_SESSION["userid"] ?>님 환영합니다.</p>
                            <p>잔여포인트는 <?= $_SESSION["userpoint"]?> 입니다.</p>
                            <a href="#" class="mobcateoff" onclick="mobcateoff()">
                                <div></div>
                                <div></div>
                            </a>
                        </div>

                        <div class="moblogin-join">
                            <a href="logout.php" class="moblogin">로그아웃</a>
                            <a href="mypage.php" class="mobjoin">마이페이지</a>
                        </div>
                    <?php
                }
                    ?>
                    <div class="mobmenu">
                        <ul><a href="#" onclick="mobmenu1(1)">쉐이크/보조제<div class="boxrota"></div>
                                <div></div>
                            </a>
                            <div class="mobmenu1">
                                <li><a href="product.php?kate=쉐이크/보조제&sub_kate=all">전체</a></li>
                                <li><a href="product.php?kate=쉐이크/보조제&sub_kate=단백질쉐이크">단백질 쉐이크</a></li>
                                <li><a href="product.php?kate=쉐이크/보조제&sub_kate=웨이트보조제">웨이트 보조제</a></li>
                                <li><a href="product.php?kate=쉐이크/보조제&sub_kate=체중조절">체중 조절</a></li>
                            </div>
                        </ul>
                        <ul><a href="#" onclick="mobmenu1(2)">스포츠웨어<div class="boxrota"></div>
                                <div></div>
                            </a>
                            <div class="mobmenu2">
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
                            </div>
                        </ul>
                        <ul><a href="#" onclick="mobmenu1(3)">헬스 용품<div class="boxrota"></div>
                                <div></div>
                            </a>
                            <div class="mobmenu3">
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
                            </div>
                        </ul>
                        <ul><a href="#" onclick="mobmenu1(4)">웨이트 식품<div class="boxrota"></div>
                                <div></div>
                            </a>
                            <div class="mobmenu4">
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
                            </div>
                        </ul>
                        <sub>이용해주셔서 감사합니다.</ㄴ>
                    </div>
                    </div>

                </div>
</header>