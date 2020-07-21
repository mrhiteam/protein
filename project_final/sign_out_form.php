<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" />
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="css/mypage.css">
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
</script>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <?php
    $con = mysqli_connect("localhost", "project", "1234", "project");
    $sql    = "select * from members where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

    $pass = $row["pass"];
    $name = $row["name"];
    $address = $row["address"];
    $phone = $row["selphone"];
    $email = explode("@", $row["email"]);
    $email1 = $email[0];
    $email2 = $email[1];

    mysqli_close($con);
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
                        <ul class="msub">
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
                            <li><a href="#">회원 탈퇴</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <article>
                <h2>회원탈퇴<span>MEMBER LEAVE</span></h2>
                <p>주의 : 회원탈퇴는 신중하게 하시기 바랍니다</p>
                <br>
                <hr>
                <br>
                <div>
                    <p>탈퇴사유를 적어주세요.</p>
                    <p><input type="radio" name="bye" checked>배송불만족 <input type="radio" name="bye">사이트불편 <input type="radio" name="bye">품질낮음 <input type="radio" name="bye">서비스불만족 <input type="radio" name="bye">기타</p>
                    <p><textarea style="resize: none;" name="out" id="" cols="100" rows="10" placeholder="내용을 적어주세요."></textarea></p>

                    <a href="sign_out.php">탈퇴하기</a>
                </div>

            </article>
        </div>
    </section>
    <footer>
    <?php include "footer.php";?>
    </footer>
</body>

</html>