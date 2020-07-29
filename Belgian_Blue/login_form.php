<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.4.1.min.js"></script>
	<script src="js/jquery.color-2.1.2.min.js"></script>
	<script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link rel="stylesheet" type="text/css" href="./css/header-footer.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
	<link rel="stylesheet" href="css/header-footer.css?after">
	<link rel="stylesheet" href="css/main.css?after" />
	<link rel="stylesheet" href="css/login.css?after" />
	<link rel="stylesheet" type="text/css" href="./css/item-card.css">
	<script type="text/javascript" src="./js/login.js"></script>
</head>

<body>
	<header id="pcheader">
		<?php include "header.php"; ?>
	</header>
	<?php include "mobheader.php" ?>
	<section>
		<div class="form_login">
			<div></div>
			<form name="m_login_form" method="post" action="login.php">
				<ul>
					<li><input type="text" name="id" placeholder="아이디"></li>
					<li><input type="password" id="pass" name="pass" placeholder="비밀번호"></li>
					<!-- pass -->
				</ul>
				<div id="form_login_btn">
					<a href="#" onclick="mcheck_input()">로그인</a>
				</div>
			</form>
			<div class="form_login_join">
				<ul>
					<li>
						<a href="sign_in_form.php">회원가입</a>
					</li>
					<li>
						<a href="" onclick="find()">아이디/비밀번호 찾기></a>
					</li>
				</ul>
			</div>

		</div>
		<div id="form_membership">
			<a href="#" class="membershipoff" onclick="membershipoff()">✖</a>
			<p>멤버십 혜택</p>
			<table>
				<tr>
					<th>벨지안 블루
						<br>
						<sup>50만원 이상</sup>
					</th>
					<td>적립금</td>
					<td>생일쿠폰</td>
					<td>무료반품</td>

				</tr>
				<tr>
					<th></th>
					<td>5%</td>
					<td>20%할인쿠폰<br>2장</td>
					<td>월2회<br>무료반품</td>

				</tr>
			</table>
			<table>
				<tr>
					<th>헬창<br>
						<sup>20만원 이상</sup>
					</th>
					<td>적립금</td>
					<td>생일쿠폰</td>
					<td>무료반품</td>

				</tr>
				<tr>
					<th></th>
					<td>3%</td>
					<td>20%할인쿠폰<br>1장</td>
					<td>월1회<br>무료반품</td>

				</tr>
			</table>
			<table>
				<tr>
					<th>헬린이<br>
						<sup>기본</sup>
					</th>
					<td>적립금</td>
					<td>생일쿠폰</td>
					<td>무료반품</td>

				</tr>
				<tr>
					<th></th>
					<td>2%</td>
					<td>10%할인쿠폰<br>1장</td>
					<td>없음</td>

				</tr>
			</table>
		</div>
	</section>
</body>

</html>