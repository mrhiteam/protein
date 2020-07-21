
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/jquery-migrate-1.4.1.min.js"></script>
	<script src="js/jquery.color-2.1.2.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link rel="stylesheet" type="text/css" href="./css/header-footer.css">
</head>
<script>
    function remove_member(){
        window.open("remove_member.php?id=" + document.remove_member_form.id.value,
         "IDcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
    }
</script>
<body> 
<header>
        <?php include "header.php";?>
    </header>
	<section>
        <form  name="remove_member_form" method="post" action="remove_member.php">
        <div class="form id">
			<div class="col1">삭제하려는 회원의 아이디를 입력하세요</div>
			<div class="col2">
				<input type="text" name="id">
			</div>  
        </div>
        <a href="#" onclick="remove_member()">삭제하기</a>
        </form>
	</section> 
</body>
</html>

