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
    <style>
      .review10{
	  border:1px solid #00000030;
	  padding: 10px;
  }
  </style>
    <script>
        
    </script>
</head>

<body>
    <header id="pcheader">
        <?php include "header.php"?>
    </header>
   
    <section>
        <div id="wrap" class="clearfix">
            <h1>마이페이지</h1>
            <!-- 사이드 네비게이션  -->
            <div class="flex1">
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
                            <li><a href="#">회원 탈퇴</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- 섹션 상단쪽 자기정보 -->
            <article>
            <div class="review10">
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
                </div>
            </div> 
            </article>
       </div>
    </section>
    
    <footer>
        <?php "footer.php"?>
    </footer>
</body>