<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="./js/login.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" href="css/header-footer.css?after">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/jquery-migrate-1.4.1.min.js"></script>
    <script src="js/jquery.color-2.1.2.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>

</head>
<style>
    .button {
        cursor: pointer;
        width: 100px;
    }
</style>
<script>
    function modify() {
        if (!document.product_info.name.value) {
            alert("상품이름을 입력하세요!");
            return;
        }

        if (!document.product_info.price.value) {
            alert("가격을 입력하세요!");
            return;
        }

        if (!document.product_info.kategorie.value) {
            alert("카테고리를 입력하세요!");
            return;
        }

        if (!document.product_info.image_file.value) {
            alert("이미지파일명을 입력하세요!");
            return;
        }
        if (!document.product_info.hot.value) {
            alert("인기상품 여부를 체크해주세요");
            return;
        }
        if (!document.product_info.new.value) {
            alert("신상품 여부를 체크해주세요");
            return;
        }
        document.product_info.submit();
    }
</script>
<style>
#changeprodimg>img{
    width:300px;
    height:300px;
}
section{
    padding:30px;
}
</style>
<body>
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
        mysqli_close($con);
        ?>
        <div id="changeprodimg">
            <img src="image/<?= $row['image_file'] ?>">
        </div>
        <form action="product_management.php" method="POST" name="product_info">
            <p>
                <select name="num">
                    <option value="<?= $num ?>"><?= $num ?></option>
                </select>
            </p>
            <p>*상품 이름:<input type="text" name="name" value="<?= $row['name'] ?>"></p>
            <p>*가격:<input type="text" name="price" value="<?= $row['price'] ?>"></p>
            <p>*카테고리:<input type="text" name="kategorie" value="<?= $row['kategorie'] ?>"></p>
            <p>*이미지파일명:<input type="text" name="image_file" value="<?= $row['image_file'] ?>"></p>
            <p>*상세정보파일명:<input type="text" name="info" value="<?= $row['info']?>"></p>
            <p>*상태:
                <select name="status">
                    <option value="매진">매진</option>
                    <option value="판매 중">판매 중</option>

                </select>
            </p>
            <p>*인기상품<input type="radio" name="hot" value="1"> 활성화 <input type="radio" name="hot" value="0"> 비활성화</p>
            <p>*오리진상품<input type="radio" name="new" value="1"> 활성화 <input type="radio" name="new" value="0"> 비활성화</p>
        </form>
        <a href="#" onclick="modify()">수정하기</a>
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>