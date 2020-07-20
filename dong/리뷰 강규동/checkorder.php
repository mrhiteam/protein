<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<script>
    
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
            <h2> 주문확인</h2>
            <?php
            $con = mysqli_connect("localhost", "dior909homme", "ngKan11gGu!", "dior909homme");
            $sql = "select * from orederlist where userid = '$userid' and status !='finish'";
            $result_order = mysqli_query($con,$sql);
            $result_ordercount = mysqli_num_rows($result_order);
            $total_price=0;
            if($result_ordercount==0){
            ?>
                <div>
                    <p>주문하신 상품이 없습니다.</p>
                </div>
            <?php        
            }
            else{
                for($i=0;$i<$result_ordercount;$i++){
                    mysqli_data_seek($result_order,$i);
                    $orderlist = mysqli_fetch_array($result_order);
                    if($orderlist["status"]=='ready'){
                        $status='주문대기중';
                    }
                    elseif($orderlist["status"]=='going'){
                        $status='배송중';
                    }
                    elseif($orderlist["status"]=='ordered'){
                        $status="배송완료";
                    }
                
                ?>
                    <div>
                       <p>상품명:<?=$orderlist["name"]?> | 주문개수:<?=$orderlist["ordercount"]?> | 가격:<?=$orderlist["price"]?> | 총 가격:<?=$orderlist["price"]*$orderlist["ordercount"]?> | 상태:<?=$status?></p>
                    </div>
                <?php
                    if($status == "배송완료"){
                        $num = $orderlist['num'];
                ?>
                        <a href="modify_order.php?num=<?=$num?>&fin=2">목록에서 제거</a>
                <?php
                    }
                    $total_price = $total_price+($orderlist["price"]*$orderlist["ordercount"]);
                }
            ?>
                <p>총 주문액수:<?=$total_price?></p>
            <?php
            }
            ?>
        </div>
        

    </section>
    <footer>
    </footer>
</body>

</html>