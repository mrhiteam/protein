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
   
</head>
<body>
    <div id="container">
        <header>
            <?php include "header.php"; ?>
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
                    <div class="price__origin"><?=$row['price']?>원</div>
                    <div class="price__credit"><p><?=$_SESSION['userpoint']?></p></div>
                </div>                
                <div class="box info__status">
                    <p>판매중/매진 php</p>
                    <p>배송비 2500원 if ??? 이상 무료</p>
                    <p>벨지안 블루</p>
                    <p>무이자 php</p>
                </div>
                <form name="form1" method="POST" action="order.php">
                    <div class="box info__option" name="opt">
                        <select name="name">
                    <option id="oname" value="<?=$row['name']?>"><?=$row['name']?></option>
                     </select> 
                수량 <select name="count" id="count">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>개
                </div>
                
                <div class="box info__other">
                    <input type="button" onclick="basket()" value="장바구니 담기">
                    <input type="button" onclick="add_pick(<?=$num?>)" name="zzim" value="🎀">
                    <input type="button" onclick="order(<?=$row['price']?>)" value="결제하기">
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
                <img src="image/<?=$row['info']?>"<??>
            </div>
            <div id="tab-2" class="tabs__content">
                <div class="question__flex1">
                    <div class="flex1__write">
                        <a href="writeq.php" onclick="">리뷰 작성하기</a>
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
                <img src="image/refund.jpg" alt="refund">
            </div>
            </div>
        </div>
     </section>   
     <footer>
         <?php include "footer.php"; ?>
     </footer>
    </div>
    
    <script src="itempagein.js"></script>
    <script src="pageinpopup.js"></script>
</body>
</html>