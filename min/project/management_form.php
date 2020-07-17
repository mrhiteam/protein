
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
<body> 
<header>
        <?php include "header.php";?>
    </header>
	<section>
        <div>
            <p>상품관리</p>
            <a href="add_product_form.php">상품 추가</a>
            <a href="product_management_list.php">상품관리</a>
            <a href="sub_product_form.php">상품 제거</a>
        </div>
        <div>
            <p>회원관리</p>
            <a href="remove_member_form.php">회원삭제</a>
        </div>
        <div>
            <a href="orderlist.php">주문목록</a>
            <a href="modify_order_form.php">주문관리</a>
        </div>
        
	</section> 
</body>
</html>

