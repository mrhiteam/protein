<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<script>
    function sub_basket(a){
        window.open("sub_basket.php?name="+a,"basket","left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");

    }
    function order(a){
       location.replace("order.php?price="+a+"&basket=1","order","left=700,top=300,width=700,height=500,scrollbars=no,resizable=yes");
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
            <h2> 장바구니 목록</h2>
            <?php
                for($i=1; $i<20;$i++){
                    if(isset($_SESSION["product'$i'"])){
                        echo "상품 이름:".$_SESSION["product'$i'"]." 상품개수:".$_SESSION["product'$i'count"]." 상품 가격:".$_SESSION["product'$i'price"];
                        echo "<br>";
                        $product=$_SESSION["product'$i'"];
                        ?>
                        <a href="basket.php" onclick="sub_basket(<?=$i?>)">장바구니에서 삭제하기</a>
            <?php
                        echo "<br>";
                    }
                    else{
                        
                    }
                }
                if(isset($_SESSION["price"])){
                    echo"총 가격".$_SESSION["price"];
                    echo"적립 포인트".$_SESSION["price"]*0.01;
                }
                else{
                    echo"장바구니에 담은 상품이 없습니다.";
                }
            ?>
            <a href="#" onclick="order(<?=$_SESSION['price']?>)">결제하기</a>
        </div>
        

    </section>
    <footer>
    </footer>
</body>

</html>