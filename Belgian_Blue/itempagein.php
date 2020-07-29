<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <link rel="icon" href="image/logo3.png" />
    <!-- 사이표를 대표 하는 아이콘  -->
    <!-- 스마트폰에서도 적용 시키기 위한 아이콘 -->
    <link rel="apple=touch-icon" href="image/logo3.png" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>벨지안 블루</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/itempagein.css?after'>
    <script src="./jquery-3.5.1.js"></script>
    <script type="text/javascript" src="./js/login.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/header-footer.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.4.1.min.js"></script>
    <script src="js/jquery.color-2.1.2.min.js"></script>
    <script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" href="css/header-footer.css?after">
    <link rel="stylesheet" href="css/itempagein.css?after">

</head>


<body>
    <div id="container">
        <header id="pcheader">
            <?php include "header.php"; ?>
        </header>
        <section>
            <?php

            $num = $_GET['num'];
            $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
            $sql = "select * from product where num = $num";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            $pname = $row['name'];
            $price = $row['price'];


            if ($price >= 30000) {
                $sendfee = 0;
            } else {
                $sendfee = 2500;
            }


            mysqli_close($con);
            ?>
            <div class="pinfo">
                <div class="pinfo__img"><img src="image/<?= $row['image_file'] ?>" alt="image"></div>
                <div class="pinfo__info">
                    <div class="box info__name">
                        <p><?= $row['name'] ?></p>

                    </div>
                    <div class="box info__price">
                        <div class="price__origin"><?= $row['price'] ?>원</div>
                        <div class="price__credit">
                            <p><?= floor($row['price'] * 0.02) ?></p>
                        </div>
                    </div>
                    <div class="box info__status">
                        <p>상태 :<?= $row['status'] ?></p>
                        <p>배송비 <?= $sendfee ?>원</p>
                        <p>브랜드명 : 벨지안 블루</p>
                        <button onclick="muiza()">무이자 할부 정보</button>

                    </div>

                    <div class="box info__option" name="opt">
                        <select name="name">
                            <option id="oname" value="<?= $row['name'] ?>"><?= $row['name'] ?></option>
                        </select>
                        수량 <select name="count" id="count">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select>개
                    </div>

                    <div class="box info__other">
                        <input type="button" onclick="basket()" value="장바구니 담기">
                        <input type="button" onclick="add_pick(<?= $num ?>)" name="zzim" value="찜">
                        <input type="button" onclick="order(<?= $row['price'] ?> , <?= $sendfee ?>)" value="결제하기">
                    </div>

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
                    <img src="image/<?= $row['info'] ?>">
                </div>
                <div id="tab-2" class="tabs__content">

                    <div class="question__content">
                        <?php include 'star.php';

                        ?>
                    </div>

                </div>
                <div id="tab-3" class="tabs__content">

                    <div class="question__content">
                        <?php include 'qna.php' ?>
                    </div>
                </div>

                <div id="tab-4" class="tabs__content">
                    <img src="image/refund.jpg" alt="refund">
                </div>
            </div>

        </section>
        <footer>
            <?php include "footer.php"; ?>
        </footer>
    </div>

    <script src="itempagein.js"></script>
    <script src="pageinpopup.js?v=<%=System.currentTimeMillis() %>"></script>
</body>

</html>