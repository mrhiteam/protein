<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-migrate-1.4.1.min.js"></script>
        <script src="js/jquery.color-2.1.2.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap"
            rel="stylesheet">
        <link
            rel="stylesheet"
            href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
        <title></title>
        <style>
            * {
                font-family: 'Noto Sans KR', sans-serif;
                margin: 0;
                padding: 0;
            }
            a {
                text-decoration: none;
                color: black;
            }
            #top {
                width: 100%;
                height: 60px;
                background-color: aquamarine;
            }
            header {
                width: 100%;
            }
            .inner {
                width: 1024px;
                box-sizing: border-box;
                margin: 0 auto;
            }
            header > .inner {
                display: flex;
                justify-content: space-between;
                height: 150px;
                position: relative;
            }
            #logo {
                width: 180px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                box-sizing: border-box;
            }
            #logo > a{
                display: block;
                width: 100%;
                height: 100%;
                margin: 0;
                box-sizing: border-box;
            }
            #logo > a img{
                width: 100%;
            }
            header > .inner a {
                color: rgba(0, 0, 0, 0.479);
                font-size: 15px;
                margin: 10px;
            }
            header > .inner a:hover {
                color: black;
            }
            li {
                list-style-type: none;
                display: inline;
            }
            nav {
                width: 100%;
                height: 45px;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.158);
            }
            nav .inner {
                position: relative;
            }
            nav .inner ul {
                position: absolute;
                top: 0;
                left: 50%;
                transform: translate(-50%);
            }
            nav .inner li > a {
                font-size: 18px;
                padding: 10px;
                margin-left: 30px;
                display: inline-block;
            }
            #categori > i {
                font-size: 18px;
                padding: 13px;
                cursor: pointer;
            }
            footer{
                height: 270px;
                background-color: #5e7c85af;
            }
            #footmenu{
                position: relative;
            }
            #footmenu li > a {
                font-size: 15px;
                padding: 14px;
                color:rgba(255, 255, 255, 0.699);
            }
            #footmenu li > a:hover{
                color:white;
                text-shadow: 0px 0px 3px black;
            }
            #footmenu li > a:first-child{
                margin-left: 0;        
            }
            #info{
                width: 50%;
                border-right:1px solid white;
                margin-top: 30px;
            }
            #footlogo{
                width: 144px;
                margin-top: 120px;
            }
            #footlogo img{
                width: 100%;
            }
            footer> div:last-child{
                display:flex;
                justify-content: space-between;
            }
            footer p{
                line-height: 2em;
                color:rgba(255, 255, 255, 0.699);
            }
        </style>
        
    </head>
    <body>
        <div id="top">상단광고창</div>
        <header>
            <div class="inner">
                <ul>
                    <li>
                        <a href="login.html">로그인</a>
                    </li>
                    <li>
                        <a href="mypage-orderChk.html">주문/배송조회</a>
                    </li>
                    <li>
                        <a href="customercenter.html">고객센터</a>
                    </li>
                    <li>
                        <a href="join.html">회원가입</a>
                    </li>
                </ul>
                <div id="logo"><a href="mainpage"><img src="image/logo4.png" alt="logo"></a></div>
                <ul>
                    <li>
                        <a href="mypage-basket.html">
                            <i class="xi-cart">장바구니</i>
                        </a>
                    </li>
                    <li>
                        <a href="mypage.html">
                            <i class="xi-home">마이페이지</i>
                        </a>
                    </li>
                </ul>
            </div>
            <nav>
                <div class="inner">         
                    <a href="#" id="categori">
                        <i class="xi-list">
                            카테고리</i>
                    </a>
                    <ul>
                        <li>
                            <a href="newitem.html">신상품</a>
                        </li>
                        <li>
                            <a href="bestitem.html">인기상품</a>
                        </li>
                        <li>
                            <a href="tippage.html">건강 꿀 팁!</a>
                        </li>
                        <li>
                            <a href="event.html">이벤트</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
    </body>

</html>