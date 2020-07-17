<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" />
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="css/mypage.css?after">
    <link rel="stylesheet" href="css/pick.css?after">
    <link rel="stylesheet" type="text/css" href="./css/header-footer.css">
	<script src="js/jquery-migrate-1.4.1.min.js"></script>
	<script src="js/jquery.color-2.1.2.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link rel="stylesheet" type="text/css" href="./css/header-footer.css">
</head>

<script>
    function sub_pick(a, b) {
        window.open("sub_pick.php?product_count=" + a + " &total_count=" + b, "pick", "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
    }
</script>

<body>
    <header>
        <?php include "header.php"; ?>

    </header>

    <section>
        <div id="wrap" class="clearfix">
            <h1>MY page</h1>
            <!-- 사이드 네비게이션  -->
            <nav id="mynav">
                <ul class="mgnb">
                    <li>
                        <a href="#">나의 쇼핑</a>
                        <div class="vv"></div>
                        <ul class="msub">
                            <li><a href="checkorder.php">주문/배송조회</a></li>
                            <li><a href="checkordered.php">주문 내역</a></li>
                            <li><a href="basket.php">장바구니</a></li>
                            <li><a href="pick_form.php">나의 찜 목록</a></li>
                        </ul>
                    </li>
                    <li><a href="#">나의 혜택</a>
                        <div class="vv"></div>
                        <ul class="msub">
                            <li><a href="#">적립금 내역</a></li>
                            <li><a href="#">쿠폰보관함</a></li>
                            <li><a href="#">쿠폰 등록</a></li>
                        </ul>
                    </li>
                    <li><a href="#">나의 활동</a>
                        <div class="vv"></div>
                        <ul class="msub">
                            <li><a href="#">내가 쓴 상품문의</a></li>
                            <li><a href="#">내가 쓴 상품리뷰</a></li>
                        </ul>
                    </li>
                    <li><a href="#">나의 정보</a>
                        <div class="vv"></div>
                        <ul class="msub">
                            <li><a href="modify_members_form.php">회원정보수정</a></li>
                            <li><a href="#">회원 탈퇴</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <article>
                <div id="list">
                    <div class="mypage_subtitle">
                        <div>
                            <h2>찜 목록</h2>
                        </div>
                        
                    </div>
                    <div class="mypage_subcontent">
                        <ul class="pick_style1">
                            <li>주문상품</li>
                            <li>상품금액</li>
                            <li>적립금</li>
                            <li>삭제</li>
                        </ul>

                        <?php
                        $con = mysqli_connect("localhost", "project", "1234", "project");
                        $count = "select * from picked where id = '$userid'";
                        $result = mysqli_query($con, $count);
                        $count_result = mysqli_fetch_row($result);
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
                                    <li><a href="#" onclick="sub_pick(<?= $c ?>,<?= $count_result[8] ?>)">X</a></li>
                                    <li><a href="product_detail.php?num=<?=$product_result[0]?>">구매 페이지로 가기</a></li>
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
    <footer>
    <?php include "footer.php"; ?>
    </footer>
</body>

</html>