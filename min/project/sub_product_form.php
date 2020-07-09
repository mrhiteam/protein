
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title></title>

<script type="text/javascript" src="./js/login.js"></script>
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

