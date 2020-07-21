<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

    <script type="text/javascript" src="./js/login.js"></script>
</head>
<style>
    .button{cursor:pointer; width: 100px; }
</style>
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

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section>
        <?php
        $num = $_GET['num'];
        $con = mysqli_connect("localhost", "project", "1234", "project");

        $sql = "select * from product where num = $num";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        mysqli_close($con);   
        ?>
        <div>
            <form>
            <img src="image/<?= $row['image_file'] ?>">
            <p>상품 이름:<?= $row['name'] ?></p>
            <p>가격:<?= $row['price'] ?></p>
            </form>
        </div>
        </form>
    </section>
</body>

</html>