<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>벨지안 블루</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='itempagein.css?after'>
    <script src="./jquery-3.5.1.js"></script>
    <script type="text/javascript" src="./js/login.js"></script>
    <script>
    function add_pick(a) {
        window.open("add_pick.php?num=" + a,"pick","left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
    }

    function order(a) {
        
        window.open("order.php?price="+a+"&pcount="+document.order_info.count.value+"&basket=0&pname="+document.order_info.name.value,"order","left=700,top=300,width=700,height=500,scrollbars=no,resizable=yes");
    }
    function basket(){

        window.open("add_basket.php?name=" + document.order_info.name.value+"&count="+document.order_info.count.value ,"basket","left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
    }
</script>
</head>
<body>
    <div id="container">
        <header>
            <?php include "header2.php"; ?>
        </header>
     <section>
         <?php
         $num = $_GET['num'];
         $con = mysqli_connect("localhost", "dior909homme", "ngKan11gGu!", "dior909homme");
         $sql = "select * from product where num = $num";
         $result = mysqli_query($con, $sql);
         $row = mysqli_fetch_array($result);
         mysqli_close($con);
         ?>
        <div class="pinfo">
            <div class="pinfo__img"><img src="image/<?= $row['image_file']?>" alt="image"></div>
            <div class="pinfo__info">
                <div class="box info__name">
                    <p><?=$row['name']?></p>
                    <p>eventphp</p>
                </div>                
                <div class="box info__price">
                    <div class="price__origin"><?=$row['price']?></div>
                    <div class="price__credit"><p><?=$_SESSION['userpoint']?></p></div>
                </div>                
                <div class="box info__status">
                    <p>판매중/매진 php</p>
                    <p>배송비 2500원 if ??? 이상 무료</p>
                    <p>벨지안 블루</p>
                    <p>무이자 php</p>
                </div>
                <form name="form1" method="POST" action="pay.php">
                <div class="box info__option">
                 <p>추가 옵션 <select>
                    <option>php</option>
                    <option>php</option>
                    <option>php</option>
                    <option>php</option>
                </select> </p>
                <p>수량 <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select> 개</p>
                </div>
                <div class="box info__total">
                    <p>총 php원</p>
                    <p>적립금 php원</p>
                </div>
                <div class="box info__other">
                    <input type="button" name="basket" value="장바구니 담기">
                    <input type="button" name="zzim" value="🎀">
                    <input type="submit" name="pay" value="결제하기">
                </div>
                </form>
            </div>
        </div>
        <div class="pabout">
            <ul class="pabout__tabs">
                <li class="tabs__link current" data-tab="tab-1">상품 상세 정보</li>
                <li class="tabs__link" data-tab="tab-2">상품 리뷰</li>
                <li class="tabs__link" data-tab="tab-3">상품 QnA</li>
                <li class="tabs__link" data-tab="tab-4">배송 환불 정보</li>
            </ul>
            <div id="tab-1" class="tabs__content current">
                php
            </div>
            <div id="tab-2" class="tabs__content">
                <div class="question__flex1">
                    <div class="flex1__write">
                        <a href="writeq.php">리뷰 작성하기</a>
                    </div>
                </div>
                <div class="question__content">
                    <div class="content__first">
                        <div class="first__star">php</div>
                        <div class="first__title">php</div>
                        <div class="first__name">php</div>
                    </div>
                    <div class="content__second">
                        php
                    </div>
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
            <div id="tab-3" class="tabs__content">
                <div class="question__flex1">
                    <div class="flex1__write">
                        <a href="writeq.php">문의 작성하기</a>
                    </div>
                </div>
                <div class="question__content">
                    <div class="content__first">
                        <div class="first__title">php</div>
                        <div class="first__name">php</div>
                    </div>
                    <div class="content__second">
                        php
                    </div>
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
            <div id="tab-4" class="tabs__content">
                php
            </div>
            </div>
        </div>
     </section>   
    </div>
    <script src="itempagein.js"></script>
</body>
</html>