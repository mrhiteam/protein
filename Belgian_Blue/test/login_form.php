<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title></title>

<script type="text/javascript" src="login.js"></script>
</head>
<body> 
	<section>
        <div id="main_content">
      		<div id="login_box">
	    		<div id="login_form">
          		<form  name="login_form" method="post" action="login.php">		       	
                  	<ul>
                    <li><input type="text" name="id" placeholder="아이디" ></li>
                    <li><input type="password" id="pass" name="pass" placeholder="비밀번호" ></li> <!-- pass -->
                  	</ul>
                  	<div id="login_btn">
                      	<a href="#"onclick="check_input()">로그인</a>
                  	</div>		    	
				   </form>
				   <button onclick="find()">아이디/비밀번호 찾기</button>
        		</div>
    		</div>
        </div>
	</section> 
<script>
	function find() {
    window.open("member_find_form.php","member_find_form","left=200,top=200,width=400,height=400,scrollbars=no,resizable=yes");
}

</script>
</body>
</html>

