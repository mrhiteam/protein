<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" />
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" type='text/css' media='screen' href="css/mypr.css">

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
    </script>
</head>

<body>
    <header>
        <?php include "header.php"?>
    </header>
   
    <section>
        <div id="wrap" class="clearfix">
            <h1>MY page</h1>
            <!-- 사이드 네비게이션  -->
            <div class="flex1">
            <nav id="mynav">
                <ul class="mgnb">
                    <li>
                        <a href="#">나의 쇼핑</a>
                        <div class="vv"></div>
                        <ul class="msub">
                            <li><a href="checkorder.php">주문/배송조회</a></li>
                            <li><a href="#">주문 내역</a></li>
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
                            <li><a href="myquestion.php">내가 쓴 상품문의</a></li>
                            <li><a href="myreview.php">내가 쓴 상품리뷰</a></li>
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
            <!-- 섹션 상단쪽 자기정보 -->
            <article>
                  <h2> 내가 쓴 상품 문의</h2>
            <div class="question">
                
                <div class="question__content">
                <?php include "qna2.php";?>
                </div>
                <div class="aa question__search">
                <form name="form1" method="POST" action="qsearch.php">
                    <input type="search" name="qsearch" placeholder="제목, 아이디 찾기">
                    <input type="submit" value="🔍">
                </form>
                </div>
                <div class="aa question__list">
                    <a href="#"><</a>
                    <a href="#">1</a>                    
                    <a href="#">></a>
                </div>
            </div> 
            </article>
       </div>
    </section>
    
    <footer>
        <?php "footer.php"?>
    </footer>
</body>