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
    <link rel="stylesheet" href="css/order.css?after">
    <script type="text/javascript" src="./js/login.js"></script>
    <script>
        

        function checkpage(a) {
            location.href = 'checkorder.php?checkpage=' + a;
        }

        function sub_pick(a, b) {
            window.open("sub_pick.php?product_count=" + a + " &total_count=" + b, "pick", "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
        }
    </script>
</head>

<body>
    <header id="pcheader">
        <?php include "header.php"; ?>

    </header>
    <?php
    $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
    $sql = "select * from orederlist where userid = '$userid' and status !='finish'";
    $result_order = mysqli_query($con, $sql);
    if (isset($_GET["checkpage"])) {
        $checkpage = $_GET["checkpage"];
    }
    $result_ordercount = mysqli_num_rows($result_order) - 1;
    $total_price = 0;
    $count_split = mysqli_num_rows($result_order);
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
            <article>
                <!-- 주문 정보 조회 미리보기-->
                <div id="list">
                    <div class="mypage_subtitle">
                        <div>
                            <h2>주문/배송조회</h2>
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
                            for ($i = 0; $i < 10; $i++) {
                                $checkcount = ($result_ordercount - $i) - (10 * ($checkpage - 1));
                                mysqli_data_seek($result_order, $checkcount);
                                if ($checkcount == -1) {
                                    break;
                                }
                                $orderlist = mysqli_fetch_array($result_order);
                                $orderprice = $orderlist["price"] * $orderlist["ordercount"];
                                $prod_id = $orderlist["product_id"];
                                $sql = "select * from product where num = '$prod_id'";
                                $result_product = mysqli_query($con, $sql);
                                $product = mysqli_fetch_array($result_product);
                                $total_price = $total_price + ($orderlist["price"] * $orderlist["ordercount"]);
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
                                $total_price = $total_price + ($orderlist["price"] * $orderlist["ordercount"]);
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="pagechange">
                    <div>
                        < </div> <?php
                                    $count_split = $count_split / 10;
                                    for ($i = 0; $i < $count_split; $i++) {
                                    ?> <div onclick="checkpage(<?= $i + 1 ?>)"> <?= $i + 1 ?>
                    </div>
                <?php
                                    }
                ?>
                <div> > </div>
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