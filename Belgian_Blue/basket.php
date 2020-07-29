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
    <link rel="stylesheet" href="css/mypage.css?after">
    <link rel="stylesheet" href="css/basket.css?after">

    <script>
        function sub_basket(a) {
            window.open("sub_basket.php?name=" + a, "basket", "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");

        }

        function order(a, b) {

            location.replace(`order.php?sendfee=${b}&price=${a}&basket=1`);
        }
    </script>
</head>

<body>
    <header id="pcheader">
        <?php include "header.php"; ?>

    </header>
    <?php
    $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
    /*$sql = "select * from orederlist where userid = '$userid' and status !='finish'";
    $result_order = mysqli_query($con, $sql);
    $result_ordercount = mysqli_num_rows($result_order) - 1;*/
    if (!isset($_SESSION["price"])) {
        $_SESSION['price'] = 0;
    } else {
        if ($_SESSION["price"] >= 30000) {
            $sendfee = 0;
        } else {
            $sendfee = 2500;
        }
    }
    if (isset($_GET["checkpage"])) {
        $checkpage = $_GET["checkpage"];
    }
    $basketcount = 0;
    ?>
    <section>
        <div id="wrap" class="clearfix">
            <h1>마이페이지</h1>
            <!-- 사이드 네비게이션  -->
            <nav id="mynav">
                <ul class="mgnb">
                    <li>
                        <a href="#">나의 쇼핑</a>

                        <ul class="msub1">
                            <li><a href="checkorder.php">주문/배송조회</a></li>
                            <li><a href="checkordered.php">주문 내역</a></li>
                            <li><a href="basket.php">장바구니</a></li>
                            <li><a href="pick_form.php">나의 찜 목록</a></li>
                        </ul>
                    </li>
                    <li><a href="#">나의 혜택</a>

                        <ul class="msub">
                            <li><a href="mypoint.php">적립금 내역</a></li>
                        </ul>
                    </li>
                    <li><a href="#">나의 활동</a>

                        <ul class="msub">
                            <li><a href="myquestion.php">내가 쓴 상품문의</a></li>
                            <li><a href="myreview.php">내가 쓴 상품리뷰</a></li>
                        </ul>
                    </li>
                    <li><a href="#">나의 정보</a>

                        <ul class="msub">
                            <li><a href="modify_members_form.php">회원정보수정</a></li>
                            <li><a href="sign_out_form.php">회원 탈퇴</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- 섹션 상단쪽 자기정보 -->
            <article>
                <!-- 장바구니 미리보기 -->
                <div id="list">
                    <div class="mypage_subtitle">
                        <div>
                            <h2>장바구니 목록</h2>
                        </div>

                    </div>
                    <div class="mypage_subcontent">
                        <ul class="basket_style1">
                            <li>주문상품</li>
                            <li>수량</li>
                            <li>상품금액</li>
                            <li>적립금</li>
                            <li>취소</li>
                        </ul>

                        <?php
                        for ($i = 19; $i > 0; $i--) {
                            if (isset($_SESSION["product'$i'"])) {
                                $prod_name = $_SESSION["product'$i'"];
                                $sql = "select * from product where name = '$prod_name'";
                                $result_product = mysqli_query($con, $sql);
                                $product = mysqli_fetch_array($result_product);

                        ?>
                                <ul class="basket_style2">
                                    <li>
                                        <img src="image/<?= $product['image_file'] ?>">
                                    </li>
                                    <li><?= $_SESSION["product'$i'"] ?></li>
                                    <li><?= $_SESSION["product'$i'count"] ?>개</li>
                                    <li><?= $_SESSION["product'$i'price"] ?></li>
                                    <li><?= $_SESSION["product'$i'price"] * 0.01 ?>point</li>
                                    <li><a href="basket.php" onclick="sub_basket(<?= $i ?>)">X</a></li>
                                </ul>
                        <?php
                                $basketcount++;
                            }
                        }
                        $count_split = ($basketcount) / 10;
                        if ($_SESSION["price"] == 0) {
                            echo "장바구니에 담은 상품이 없습니다.";
                        }
                        ?>
                    </div>

                </div>
                <div class="pagechange">
                    <div>
                        < </div> <?php

                                    for ($i = 0; $i < $count_split; $i++) {
                                    ?> <div onclick="checkpage(<?= $i + 1 ?>)"> <?= $i + 1 ?>
                    </div>
                <?php
                                    }
                ?>
                <div> > </div>
                </div>
                <div id="basket_price">
                    <p>총 결제금액: <?= $_SESSION['price'] ?></p>
                    <p>총 적립금액: <?= $_SESSION['price'] * 0.01 ?></p>
                </div>
                <div id="btnorder">
                    <a href="#" onclick="order(<?= $_SESSION['price'] ?>,<?= $sendfee ?>)">결제하기</a>
                </div>
            </article>

        </div>

    </section>

    <?php
    mysqli_close($con);
    ?>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>