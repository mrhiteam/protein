<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>벨지안 블루</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='r.css'>
    
</head>
<body>
    <div id="container">
        <section>
            <h2>상품 문의</h2>
            <div class="question">
                <div class="question__flex1">
                    <div class="flex1__write">
                        <a href="writeq.php">문의 작성하기</a>
                    </div>
                </div>
                <div class="question__content">
                    <?php include "qnalist.php";?>
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
            <div class="flex2">
                <div class="flex2__notice">
                    <h3>공지사항</h3>
                    <div class="notice__content">
                        <div class="content__first">
                            <div class="first__title">php</div>
                            <div class="first__name">php</div>
                        </div>
                    <div class="aa question__list">
                            <a href="#"><</a>
                            <a href="#">1</a>                    
                            <a href="#">></a>
                    </div>   
                    </div>    
                </div>
                <div class="flex2__call">
                    <h3>1:1 전화 문의</h3>
                    <div class="call__content">
                    <h1>☎</h1>
                    <p class="num">1544-1234</p>
                    <p>09:00-18:00까지 운영합니다!</p>
                    </div>

                </div>
                </div>
            </section>   
    
            
    </div>
</body>
</html>