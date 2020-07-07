
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


        <?php
             if($userlevel==1) {
                $logged = $username."(".$userid.")님[Level:".$userlevel.", Point:".$userpoint."]";
        ?>
                <?=$logged?> 
                | 
                <a href="logout.php">로그아웃</a> 
                | 
                <a href="member_modify_form.php">정보 수정</a>
                |
                <a href="pick_form.php">찜목록</a>
                |
                <a href="management_form.php">관리자페이지</a>
        <?php
            }
        ?>
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

