
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title></title>

<script type="text/javascript" src="./js/login.js"></script>
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

