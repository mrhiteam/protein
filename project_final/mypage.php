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
    
    <link rel="stylesheet" type="text/css" href="./css/mypage.css">
    <link rel="stylesheet" href="css/mypage.css?after">
    <link rel="stylesheet" href="css/basket.css?after">
    <link rel="stylesheet" href="css/order.css?after">
    <link rel="stylesheet" href="css/pick.css?after">
    <script type="text/javascript" src="./js/login.js"></script>

    <script>
        $(document).ready(function() {
            $(".mgnb>li>a").click(function() {
                $(this).next().next().slideToggle(150);
                $(this).next().toggleClass("vv");
            });
            $(".mgnb>li>div").click(function() {
                $(this).next().slideToggle(150);
                $(this).toggleClass("vv");
            });
        })

        function sub_pick(a, b) {
            window.open("sub_pick.php?product_count=" + a + " &total_count=" + b, "pick", "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
        }
    </script>
</head>

<body>
    <header>
        <?php include "header.php"; ?>

    </header>
    <?php
    $con = mysqli_connect("localhost", "project", "1234", "project");
    $sql = "select * from orederlist where userid = '$userid' and status !='finish'";
    $result_order = mysqli_query($con, $sql);
    $result_ordercount = mysqli_num_rows($result_order) - 1;
    ?>
    <section>
        <div id="wrap" class="clearfix">
            <h1>MY page</h1>
            <!-- 사이드 네비게이션  -->
            <nav id="mynav">
                <ul class="mgnb">
                    <li>
                        <a>나의 쇼핑</a>
                        <div class="vv"></div>
                        <ul class="msub1">
                            <li><a href="checkorder.php">주문/배송조회</a></li>
                            <li><a href="checkordered.php">주문 내역</a></li>
                            <li><a href="basket.php">장바구니</a></li>
                            <li><a href="pick_form.php">나의 찜 목록</a></li>
                        </ul>
                    </li>
                    <li><a>나의 혜택</a>
                        <div class="vv"></div>
                        <ul class="msub">
                            <li><a href="#">적립금 내역</a></li>
                            <li><a href="#">쿠폰보관함</a></li>
                            <li><a href="#">쿠폰 등록</a></li>
                        </ul>
                    </li>
                    <li><a>나의 활동</a>
                        <div class="vv"></div>
                        <ul class="msub">
                            <li><a href="#">내가 쓴 상품문의</a></li>
                            <li><a href="#">내가 쓴 상품리뷰</a></li>
                        </ul>
                    </li>
                    <li><a>나의 정보</a>
                        <div class="vv"></div>
                        <ul class="msub">
                            <li><a href="modify_members_form.php">회원정보수정</a></li>
                            <li><a href="sign_out_form.php">회원 탈퇴</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- 섹션 상단쪽 자기정보 -->
            <article>
                <div id="myinfo">
                    <div id="memberinfo">
                        <div>
                            <h2><?= $_SESSION['username'] ?>(<?= $_SESSION['userid'] ?>)님</h2>
                            <p>아이디 : <?= $_SESSION['userid'] ?></p>
                            <p>이름 : <?= $_SESSION['username'] ?></p>
                            <p>주소 : <?= $_SESSION["useraddr"] ?></p>
                            <p>이메일 : <?= $_SESSION["useremail"] ?></p>
                        </div>
                        <div>
                            <h2>나의 혜택</h2>
                            <div id="mybnf_split">
                                <div>
                                    <p>총구매 금액:</p>
                                    <p>등급:</p>
                                    <p>적립금:</p>
                                </div>
                                <div>
                                    <p><?= $_SESSION["usert_price"] ?> 원</p>
                                    <p><?= $_SESSION['userlevel'] ?> 등급</p>
                                    <p><a href="#"><?= $_SESSION['userpoint'] ?> 포인트</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 주문 정보 조회 미리보기-->
                <div id="list">
                    <div class="mypage_subtitle">
                        <div>
                            <h2>주문/배송조회</h2>
                        </div>
                        <div>
                            <a href="checkorder.php">더보기</a>
                        </div>
                    </div>
                    <div class="mypage_subcontent">
                        <ul class="order_style1">
                            <li>날짜</li>
                            <li>주문번호</li>
                            <li>주문상품</li>
                            <li>상품금액</li>
                            <li>상태</li>
                        </ul>
                        <?php
                        if ($result_ordercount == -1) {
                        ?>
                            <div>
                                <p>주문하신 상품이 없습니다.</p>
                            </div>
                            <?php
                        } else {
                            for ($i = 0; $i < 3; $i++) {
                                mysqli_data_seek($result_order, $result_ordercount);
                                $orderlist = mysqli_fetch_array($result_order);
                                $orderprice = $orderlist["price"] * $orderlist["ordercount"];
                                $result_ordercount = $result_ordercount - 1;
                                $prod_id = $orderlist["product_id"];

                                $sql = "select * from product where num = '$prod_id'";
                                $result_product = mysqli_query($con, $sql);
                                $product = mysqli_fetch_array($result_product);
                                if ($orderlist["status"] == 'ready') {
                                    $status = '주문대기중';
                                } elseif ($orderlist["status"] == 'going') {
                                    $status = '배송중';
                                } elseif ($orderlist["status"] == 'ordered') {
                                    $status = "배송완료";
                                }

                            ?>
                                <ul class="order_style2">
                                    <li><?= $orderlist["regist_day"] ?></li>
                                    <li><?= $orderlist["num"] ?></li>
                                    <li>
                                        <img src="image/<?= $product['image_file'] ?>">
                                    </li>
                                    <li>
                                        <?= $orderlist["name"] ?> <?= $orderlist["ordercount"] ?>개
                                    </li>
                                    <li><?= $orderprice ?></li>
                                    <li><?= $status ?></li>
                                </ul>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>

                <!-- 장바구니 미리보기 -->
                <div id="list">
                    <div class="mypage_subtitle">
                        <div>
                            <h2>장바구니 목록</h2>
                        </div>
                        <div>
                            <a href="basket.php">더보기</a>
                        </div>
                    </div>
                    <div class="mypage_subcontent">
                        <ul class="basket_style1">
                            <li>주문상품</li>
                            <li>수량</li>
                            <li>상품금액</li>
                            <li>적립금</li>
                        </ul>

                        <?php
                        if (isset($_SESSION["price"])) {
                            if ($_SESSION["price"] == 0) {
                        ?>
                                <div>
                                    <p>장바구니가 비었습니다.</p>
                                </div>
                            <?php
                            }
                        }
                        else{
                            ?>
                                <div>
                                    <p>장바구니가 비었습니다.</p>
                                </div>
                            <?php
                        }
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
                                </ul>
                        <?php
                            }
                        }

                        ?>
                    </div>
                </div>

                <!-- 찜목록 미리보기 -->
                <div id="list">
                    <div class="mypage_subtitle">
                        <div>
                            <h2>찜 목록</h2>
                        </div>
                        <div>
                            <a href="pick_form.php">더보기</a>
                        </div>
                    </div>
                    <div class="mypage_subcontent">
                        <ul class="pick_style1">
                            <li>주문상품</li>
                            <li>상품금액</li>
                            <li>적립금</li>
                        </ul>

                        <?php
                        $con = mysqli_connect("localhost", "project", "1234", "project");
                        $count = "select * from picked where id = '$userid'";
                        $result = mysqli_query($con, $count);
                        $count_result = mysqli_fetch_row($result);

                        ?>
                        <?php
                        if ($count_result[8] == 0) {
                        ?>
                            <div>
                                <p>찜한 상품이 없습니다.</p>
                            </div>
                            <?php
                        }
                        for ($i = 2; $i < 7; $i++) {
                            if ($count_result[$i] != null) {
                                $sql = "select * from product where num = '$count_result[$i]'";
                                $result_p = mysqli_query($con, $sql);
                                $product_result = mysqli_fetch_row($result_p);
                                $c = $i - 1;
                            ?>
                                <ul class="pick_style2">
                                    <li>
                                        <img src="image/<?= $product_result[7] ?>">
                                    </li>
                                    <li><?= $product_result[1] ?></li>
                                    <li><?= $product_result[3] ?></li>
                                    <li><?= $product_result[3] * 0.01 ?>point</li>
                                    <li><a href="#" onclick="sub_pick(<?=$c?>,<?= $count_result[8] ?>)">X</a></li>
                                </ul>
                        <?php
                            }
                        }
                        ?>
                    </div>
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