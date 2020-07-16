<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title></title>

<script type="text/javascript" src="./js/login.js"></script>
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
        		</div>
    		</div>
        </div>
	</section> 
</body>
</html>

