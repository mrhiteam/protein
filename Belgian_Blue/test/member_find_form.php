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
      		<form method="POST" action="member_find.php">
			<h2>아이디 찾기</h2>	
			  <ul>
			 	<li><input type="text" name="name" placeholder="이름을 입력해주세요!"></li>
				<li><input type="text" name="phone" placeholder="폰번호를 입력해주세요!"></li>
				</ul>
				<input type="submit" value="아이디 찾기">
			</form>
			<form method="POST" action="member_findpw.php">
			<h2>비밀번호 찾기</h2>
			<ul>
			 	<li><input type="text" name="id" placeholder="아이디를 입력해주세요!"></li>
				<li><input type="text" name="name" placeholder="이름을 입력해주세요!"></li>
				<li><input type="text" name="phone" placeholder="폰번호를 입력해주세요!"></li>
				</ul>
				<input type="submit" value="비밀번호 찾기">
			</form>
        </div>
	</section> 

</body>
</html>

