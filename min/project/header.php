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
        <a href="index.php">홈</a>  
<?php
    if(!$userid) {
?>      
        |        
        <a href="sign_in_form.php">회원 가입</a> 
        | 
        <a href="login_form.php">로그인</a>
<?php
    } else {
                $logged = $username."(".$userid.")님 등급:".$userlevel.", 보유 포인트:".$userpoint."";
?>
                <?=$logged?> 
                 | 
                <a href="logout.php">로그아웃</a> 
                 | 
                <a href="product.php">상품</a>
                |
                <a href="mypage.php">마이페이지</a>

<?php
    }
?>
<?php
     if($userlevel==1) {
?>
        <a href="management_form.php">관리자페이지</a>
<?php
    }
?>