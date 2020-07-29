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
</head>

<body>
    <header id="pcheader">
        <?php include "header.php" ?>
    </header>
    <?php
    $basket = $_SESSION['order_basket'];
    $price = $_SESSION['order_price'];
    $sendfee = $_SESSION['order_sendfee'];
    $acount = $_SESSION['order_acount'];
    $addr = $_SESSION['order_addr'];
    $point = $_SESSION['order_point'];
    $phone = $_SESSION['order_phone'];
    $rname = $_SESSION['order_rname'];
    $rphone = $_SESSION['order_rphone'];
    $request = $_SESSION['order_request'];
    $regist_day = date("Y-m-d (H:i)");
    if (isset($_SESSION["userid"])) {
        $userid = $_SESSION["userid"];
        if (isset($_SESSION["userpoint"])) {
            if ($point == 0) {
                $userpoint = $_SESSION["userpoint"];
                $userpoint = $userpoint + ($price * 0.01);
                $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
                $sql = "update members set point = $userpoint where id = '$userid'";
                mysqli_query($con, $sql);
                $_SESSION["userpoint"] = $userpoint;
                $userid = $_SESSION["userid"];
                $useremail = $_SESSION["useremail"];
            } else {
                $userpoint = $_SESSION["userpoint"];
                $userpoint = $userpoint - $point;
                $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
                $sql = "update members set point = $userpoint where id = '$userid'";
                mysqli_query($con, $sql);
                $_SESSION["userpoint"] = $userpoint;
                $userid = $_SESSION["userid"];
                $useremail = $_SESSION["useremail"];
            }
            ?>
            <div>감사합니다. 결제되었습니다. </div>
            <?php
            if ($basket == 0) {

                $pname = $_SESSION['order_pname'];
                $pcount = $_SESSION['order_pcount'];

                $sql = "select * from product where name = '$pname'";
                $result_p = mysqli_query($con, $sql);
                $p_result = mysqli_fetch_row($result_p);
                $sql = "insert into orederlist(name, product_id, price, ordercount, regist_day, kategorie, addr , userid ,email, selphone, status, rname, rphone, request)";
                $sql .="values('$p_result[1]', '$p_result[0]', '$p_result[3]', '$pcount', '$regist_day', '$p_result[6]', '$addr' ,'$userid' ,'$useremail','$phone', 'ready', '$rname', '$rphone', '$request')";
                mysqli_query($con, $sql);
                $sql = "select * from orederlist where userid = '$userid'";
                $result_order = mysqli_query($con, $sql);
                $result_ordercount = mysqli_num_rows($result_order);
                $orderprice=0;
                for($i=0;$i<$result_ordercount;$i++){
                    mysqli_data_seek($result_order, $i);
                    $orderlist = mysqli_fetch_array($result_order);
                    $orderprice = $orderprice+$orderlist["price"] * $orderlist["ordercount"];
                }
                if($orderprice>=200000 && $_SESSION["userlevel"]>8){
                    $_SESSION['userlevel']=8;
                    $sql = "update members set level = '8' where id='$userid'";
                }elseif($orderprice>=500000 && $_SESSION["userlevel"]>7){
                    $_SESSION['userlevel']=7;
                    $sql = "update members set level = '7' where id='$userid'";
                }
                mysqli_close($con);
            } else if ($basket == 1) {
                for ($i = 1; $i < 20; $i++) {
                    if (isset($_SESSION["product'$i'"])) {
                        $pname = $_SESSION["product'$i'"];
                        $price = $_SESSION["product'$i'price"];
                        $pcount = $_SESSION["product'$i'count"];
                        $sql = "select * from product where name = '$pname'";
                        $result_p = mysqli_query($con, $sql);
                        $p_result = mysqli_fetch_row($result_p);
                        $sql = "insert into orederlist values('','$p_result[1]', '$p_result[0]', '$p_result[3]', '$pcount', '$regist_day', '$p_result[6]', '$addr' ,'$userid' ,'$useremail', '$phone', 'ready', '$rname', '$rphone', '$request')";
                        mysqli_query($con, $sql);
                    }
                }
                mysqli_close($con);
                for ($i = 1; $i < 20; $i++) {
                    unset($_SESSION["product'$i'"]);
                    unset($_SESSION["product'$i'count"]);
                    unset($_SESSION["product'$i'price"]);
                    unset($_SESSION["price"]);
                }
            }
            unset($_SESSION['order_acount']);
            unset($_SESSION['order_addr']);
            unset($_SESSION['order_point']);
            unset($_SESSION['order_phone']);
            unset($_SESSION['order_rphone']);
            unset($_SESSION['order_request']);
        }
    }
    ?>
    <footer>
<?php include "footer.php" ?>
</footer>

</body>

</html>