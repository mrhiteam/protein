<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

    <script type="text/javascript" src="./js/login.js"></script>
</head>
<script>
    function add_pick() {
        
    }

    function order() {
        document.order_info.submit();
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
        ?>
        <div>
            <img src="image/<?= $row['image_file'] ?>">
            <p>상품 이름:<?= $row['name'] ?></p>
            <p>가격:<?= $row['price'] ?></p>
        </div>
        <form action="order.php" method="POST" name="order_info">
            <div>
                <a href="add_pick.php?num=<?=$num?>">찜</a>
                <select name="name" >
                    <option value="<?=$row['name']?>"><?= $row['name']?></option>
                </select>
                <select name="count">
                    <option value="1">1개</option>
                    <option value="2">2개</option>
                    <option value="3">3개</option>
                    <option value="4">4개</option>
                    <option value="5">5개</option>
                    <option value="6">6개</option>
                </select>
                <div style="cursor:pointer" onclick="basket()" >장바구니에 담기</div>
                <div style="cursor:pointer" onclick="order()" >구매</div>


            </div>
        </form>
    </section>
</body>

</html>