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
<div id="top">상단광고창</div>
<?php
if (!$userid) {
?>
    <div class="inner">
        <ul>
            <li>
                <a href="login_form.php">로그인</a>
            </li>
            <li>
                <a href="checkorder.php">주문/배송조회</a>
            </li>
            <li>
                <a href="customercenter.html">고객센터</a>
            </li>
            <li>
                <a href="sign_in_form.php">회원가입</a>
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
        </ul>
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
                <a href="customercenter.html">고객센터</a>
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
        <a href="#" id="categori">
            <i class="xi-list">
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
</nav>
