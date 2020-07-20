<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body> 
	<header>
        <?php include "header.php";?>
        
    </header>
    <?php    
   	$con = mysqli_connect("localhost", "dior909homme", "ngKan11gGu!", "dior909homme");
    $sql    = "select * from members where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

    $pass = $row["pass"];
    $name = $row["name"];
    $address = $row["address"];

    $email = explode("@", $row["email"]);
    $email1 = $email[0];
    $email2 = $email[1];

    mysqli_close($con);
    ?>
	<section>
        <div>
            <a href="modify_members_form.php">정보 수정</a>
            |
            <a href="pick_form.php">찜목록</a>
            |
            <a href="basket.php">장바구니</a>
            |
            <a href="checkorder.php">주문확인</a>
            
        </div>
        <div id="main_content">
      		<div id="join_box">
          	<form  name="member_form" method="post" action="member_modify.php?id=<?=$userid?>">
			    <h2>회원 정보</h2>
    		    	<div class="form id">
				        <div class="col1">아이디 : <?=$userid?></div>           
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">이름 : <?=$name?></div>           
                    </div>
                    <div class="form">
				        <div class="col1">주소 : <?=$address?></div>          
			       	</div>   

			       	<div class="clear"></div>
			       	<div class="form email">
				        <div class="col1">이메일 : <?=$email1?>@<?=$email2?></div>       
			       	</div>
			       	<div class="clear"></div>
			       	<div class="bottom_line"> </div>
           	</form>
        	</div> 
        </div> 
        
	</section> 
	<footer>
        <?php include "footer.php";?>
    </footer>
</body>
</html>
