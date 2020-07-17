
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
<script>
    function remove_product(){
        window.open("sub_product.php?name=" + document.sub_product_form.name.value,
         "NAMEcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
    }
</script>
<body> 
<header>
        <?php include "header.php";?>
    </header>
	<section>
        <form  name="sub_product_form" method="post" action="sub_product.php">
        <div class="form id">
			<div class="col1">삭제하려는 상품의 이름을 입력하세요</div>
			<div class="col2">
				<input type="text" name="name">
			</div>  
        </div>
        <a href="#" onclick="remove_product()">삭제하기</a>
        </form>
    </section> 
</body>
</html>

