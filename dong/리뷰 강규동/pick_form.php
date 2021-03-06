<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP 프로그래밍 입문</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>

<script>
    function sub_pick(a,b){
        window.open("sub_pick.php?product_count=" +a+" &total_count="+b,"pick","left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
    }
</script>
<body>
    <header>
        <?php
        session_start();
        if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
        else $userid = "";
        if (isset($_SESSION["username"])) $username = $_SESSION["username"];
        else $username = "";
        if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
        else $userlevel = "";
        if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
        else $userpoint = "";
        ?>
        <a href="index.php">홈</a>
        <?php
        if (!$userid) {
        ?>
            |
            <a href="sign_in_form.php">회원 가입</a>
            |
            <a href="login_form.php">로그인</a>
        <?php
        } else {
            $logged = $username . "(" . $userid . ")님[Level:" . $userlevel . ", Point:" . $userpoint . "]";
        ?>
            <?= $logged ?>
            |
            <a href="logout.php">로그아웃</a>
            |
            <a href="product.php">상품</a>
            |
            <a href="mypage.php">마이페이지</a>

        <?php
        }
        ?>
        <?php
        if ($userlevel == 1) {
        ?>
            <a href="management_form.php">관리자페이지</a>
        <?php
        }
        ?>

    </header>

    <section>
        <div>
            <a href="modify_members_form.php">정보 수정</a>
            |
            <a href="pick_form.php">찜목록</a>
            |
            <a href="basket.php">장바구니</a>
            |
            <a href="checkorder.php">주문확인</a>
            
        </div>
        <div>
            <?php
            $con = mysqli_connect("localhost", "dior909homme", "ngKan11gGu!", "dior909homme");
            $count = "select * from picked where id = '$userid'";
            $result = mysqli_query($con, $count);
            $count_result = mysqli_fetch_row($result);
            ?>
            <?php
            
            for($i=2;$i<7;$i++){
                if($count_result[$i]!=null){
                    $sql = "select * from product where num = '$count_result[$i]'";
                    $result_p = mysqli_query($con, $sql);
                    $product_result = mysqli_fetch_row($result_p);
                    $c=$i-1;
            ?>
                <div>
                    <h2>당신이 찜한 상품</h2>
                    <p>상품 이름:<?= $product_result[1] ?></p>
                    <p>가격:<?= $product_result[3]?></p>
                    <a href="product_detail.php?num=<?=$product_result[0]?>">구매 페이지로 가기</a>
                    <a href="pick_form.php" onclick="sub_pick(<?=$c?>,<?=$count_result[8]?>)">찜목록에서 제거</a>
                </div>
            <?php
                }
            }
            ?>
        </div>
        

    </section>
    <footer>
    </footer>
</body>

</html>