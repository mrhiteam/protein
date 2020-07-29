<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>벨지안블루</title>
    <link rel="icon" href="image/logo3.png" />
    <!-- 사이표를 대표 하는 아이콘  -->
    <!-- 스마트폰에서도 적용 시키기 위한 아이콘 -->
    <link rel="apple=touch-icon" href="image/logo3.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.js"></script>
    <script src="js/product_js.js"></script>
    <script src="js/jquery-migrate-1.4.1.min.js"></script>
    <script src="js/jquery.color-2.1.2.min.js"></script>
    <script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" type="text/css" href="./css/header-footer.css">
    <link rel="stylesheet" href="css/header-footer.css?after">
    <link rel="stylesheet" type="text/css" href="./css/item-card.css">

    <link rel="stylesheet" type="text/css" href="./css/event-tip.css">
    <script type="text/javascript" src="./js/login.js"></script>
</head>

<style>
    section {
        width: 1024px;
        margin: 0 auto;
        
        padding-bottom: 20px;
    }

    .kategorie_tab {
        margin-top: 50px;
    }

    .kategorie_tab>ul {
        display: flex;
        width: 1024px;
        justify-content: space-around;
    }

    .kategorie_tab>ul>li {
        font-weight: bold;
        width: 100%;
        height: 50px;
        text-align: center;
        /*background-color: antiquewhite;*/
        list-style-type: none;
        padding-top: 10px;
        cursor: pointer;
        border-bottom: 1px solid #5763e6;
    }
    .kategorie_tab>ul :first-child{
        border-left: 0px;
    }
    .checked_tab{
        background-color: #5763e6;
        color: white;
        text-shadow: 0 0 3px black;
    }
    .product{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .product_card{
        width: 300px;
        height: 400px;
        border: 1px solid #999;
        margin-top: 20px;
    }
    .product_card img{
        width: 300px;
        height: 350px;
    }
    .product_card p{
        
        text-align: center;
    }
</style>
<script>
    function check_kate(a, b, c, d) {
        productcs(c,d);
        fetch('check_product_kate.php?kate=' + a + '&sub_kate=' + b).then(function(response) {
            response.text().then(function(text) {
                document.querySelector('.sub-contents2').innerHTML = text;
            })
        });

    }
</script>

<body>
    <header id="pcheader">
        <?php include "header.php"; ?>
    </header>
    <section>
        <?php
        $kate = $_GET["kate"];
        $sub_kate = $_GET["sub_kate"];
        if ($kate == '쉐이크/보조제') {
        ?>
            <div class="kategorie_tab">
                <ul>
                    <li id="k_tab-1" onclick="check_kate('쉐이크/보조제','all','k_tab-1','1');">전체</li>
                    <li id="k_tab-2" onclick="check_kate('쉐이크/보조제','단백질쉐이크','k_tab-2','1');">단백질 쉐이크</li>
                    <li id="k_tab-3" onclick="check_kate('쉐이크/보조제','웨이트보조제','k_tab-3','1');">웨이트 보조제</li>
                    <li id="k_tab-4" onclick="check_kate('쉐이크/보조제','체중조절','k_tab-4','1');">체중 조절</li>
                </ul>
            </div>
        <?php
        } elseif ($kate == '스포츠웨어') {
        ?>
            <div class="kategorie_tab">
                <ul>
                    <li id="k_tab-1" onclick="check_kate('스포츠웨어','all','k_tab-1','2');">전체</li>
                    <li id="k_tab-2" onclick="check_kate('스포츠웨어','MAN','k_tab-2','2');">MAN</li>
                    <li id="k_tab-3" onclick="check_kate('스포츠웨어','WOMAN','k_tab-3','2');">WOMAN</li>
                    <li id="k_tab-4" onclick="check_kate('스포츠웨어','SHOSE','k_tab-4','2');">SHOSE</li>
                    <li id="k_tab-5" onclick="check_kate('스포츠웨어','CAP','k_tab-5','2');">CAP</li>
                </ul>
            </div>
        <?php
        } elseif ($kate == '헬스용품') {
        ?>
            <div class="kategorie_tab">
                <ul>
                    <li id="k_tab-1" onclick="check_kate('헬스용품','all','k_tab-1','2');">전체</li>
                    <li id="k_tab-2" onclick="check_kate('헬스용품','덤벨/바벨/케틀벨','k_tab-2','2');">덤벨/바벨/케틀벨</li>
                    <li id="k_tab-3" onclick="check_kate('헬스용품','스트랩/랩/벨트','k_tab-3','2');">스트랩/랩/벨트</li>
                    <li id="k_tab-4" onclick="check_kate('헬스용품','탄력봉','k_tab-4','2');">탄력봉</li>
                    <li id="k_tab-5" onclick="check_kate('헬스용품','기타','k_tab-5','2');">기타</li>
                </ul>
            </div>
        <?php
        } elseif ($kate == '식품') {
        ?>
            <div class="kategorie_tab">
                <ul>
                    <li id="k_tab-1" onclick="check_kate('웨이트식품','all','k_tab-1','1');">전체</li>
                    <li id="k_tab-2" onclick="check_kate('웨이트식품','닭가슴살','k_tab-2','1');">닭가슴살</li>
                    <li id="k_tab-3" onclick="check_kate('웨이트식품','다이어트도시락','k_tab-3','1');">다이어트도시락</li>
                    <li id="k_tab-4" onclick="check_kate('웨이트식품','세트','k_tab-4','1');">세트</li>
                </ul>
            </div>
        <?php
        }
        ?>
        <article id="conta">
			<div class="inner">
            <div class="sub-contents2">
            <?php
            $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
            $sql_1 = "select count(*) from product";
            $result = mysqli_query($con, $sql_1);
            $count = mysqli_fetch_array($result);

            for ($a = 1; $a <= $count[0]; $a++) {
                $sql = "select * from product where num = $a";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result);
                if ($row != null) {
                    $num = $row['num'];
                    $image_file = $row['image_file'];
                    $name = $row['name'];
                    $price = $row['price'];
                    $kategorie = $row['kategorie'];
                    $sub_kategorie = $row['sub_kategorie'];
                }

                if ($row == null) {
                    $count[0] = $count[0] + 1;
                } elseif ($kate == $row['kategorie'] && $sub_kate == "all") {
            ?>
                    <div class="item-box3">
                        <div class="item-card">
                            <a href="itempagein.php?num=<?= $row['num'] ?>"><img src="image/<?= $row['image_file'] ?>"></a>
                            <h3><?= $row['name'] ?></h3>
                            <p>가격:<?= $row['price'] ?></p>
                        </div>
                    </div>
                <?php
                } elseif ($sub_kategorie == $sub_kate) {
                ?>
                    <div class="item-box3">
                        <div class="item-card">
                            <a href="itempagein.php?num=<?= $row['num'] ?>"><img src="image/<?= $row['image_file'] ?>"></a>
                            <h3><?= $row['name'] ?></h3>
                            <p>가격:<?= $row['price'] ?></p>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
            </div>
			</div>
        </article>

    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>
<script>
    window.onload = function() {
        var c = '<?= $sub_kate ?>';
        var d = '<?=$kate?>';
        if (c == 'all') {
            c = 'k_tab-1';
        } else if (c == '단백질쉐이크' || c == 'MAN' || c == '덤벨/바벨/케틀벨' || c == '닭가슴살') {
            c = 'k_tab-2';
        } else if (c == '웨이트보조제' || c == 'WOMAN' || c == '스트랩/랩/벨트' || c == '다이어트도시락') {
            c = 'k_tab-3';
        } else if (c == '체중조절' || c == 'SHOSE' || c == '탄력봉' || c == '세트') {
            c = 'k_tab-4';
        } else if (c == 'CAP' || c == '기타') {
            c = 'k_tab-5';
        }
        if(d=='웨이트식품'||d=='쉐이크/보조제'){
            d='1';
        }
        else{
            d='2';
        }
        productcs(c,d);
    }
</script>

</html>