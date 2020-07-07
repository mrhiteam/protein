
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title></title>

<script type="text/javascript" src="./js/login.js"></script>
</head>
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
        <div>
            <p>상품관리</p>
            <a href="add_product_form.php">상품 추가</a>
            <a href="sub_product_form.php">상품 제거</a>
        </div>
        <div>
            <p>회원관리</p>
            <a href="remove_member_form.php">회원삭제</a>
        </div>
        
	</section> 
</body>
</html>

