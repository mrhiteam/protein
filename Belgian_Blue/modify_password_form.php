<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<link rel="stylesheet" href="css/mypage.css">
	<link rel="stylesheet" type="text/css" href="./css/header-footer.css">
	<script src="js/jquery-migrate-1.4.1.min.js"></script>
	<script src="js/jquery.color-2.1.2.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link rel="stylesheet" type="text/css" href="./css/header-footer.css">

</head>
<script>
	function check_input(a) {
		if (!document.member_form.pass.value) {
			alert("비밀번호를 입력하세요!");
			document.member_form.pass.focus();
			return;
		}

		if (document.member_form.pass.value != a) {
			alert("비밀번호를 잘못 입력하셨습니다.");
			document.member_form.pass.focus();
			document.member_form.pass.select();
			return;
		}

		if (!document.member_form.pass_confirm.value) {
			alert("신규비밀번호을 입력하세요!");
			document.member_form.pass_confirm.focus();
			return;
		}
		if (document.member_form.pass.value ==
			document.member_form.pass_confirm.value) {
			alert("비밀번호가 같습니다.\n다시 입력해 주세요!");
			document.member_form.pass.focus();
			document.member_form.pass.select();
			return;
		}
		

		document.member_form.submit();
	}
</script>

<body>
	<header>
		<?php include "header.php"; ?>
	</header>
	<?php
	$con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
	$sql    = "select * from members where id='$userid'";
	$result = mysqli_query($con, $sql);
	$row    = mysqli_fetch_array($result);

	$pass = $row["pass"];
	$name = $row["name"];
	$address = $row["address"];
	$phone = $row["selphone"];
	$email = explode("@", $row["email"]);
	$email1 = $email[0];
	$email2 = $email[1];

	mysqli_close($con);
	?>
	<section>
		<div id="wrap" class="clearfix">
			<h1>MY page</h1>
			<!-- 사이드 네비게이션  -->
			<nav id="mynav">
				<ul class="mgnb">
					<li>
						<a>나의 쇼핑</a>
						<div class="vv"></div>
						<ul class="msub">
							<li><a href="checkorder.php">주문/배송조회</a></li>
							<li><a href="checkordered.php">주문 내역</a></li>
							<li><a href="basket.php">장바구니</a></li>
							<li><a href="pick_form.php">나의 찜 목록</a></li>
						</ul>
					</li>
					<li><a>나의 혜택</a>
						<div class="vv"></div>
						<ul class="msub">
							<li><a href="#">적립금 내역</a></li>
							<li><a href="#">쿠폰보관함</a></li>
							<li><a href="#">쿠폰 등록</a></li>
						</ul>
					</li>
					<li><a>나의 활동</a>
						<div class="vv"></div>
						<ul class="msub">
							<li><a href="#">내가 쓴 상품문의</a></li>
							<li><a href="#">내가 쓴 상품리뷰</a></li>
						</ul>
					</li>
					<li><a>나의 정보</a>
						<div class="vv"></div>
						<ul class="msub">
							<li><a href="modify_members_form.php">회원정보수정</a></li>
							<li><a href="sign_out_form.php">회원 탈퇴</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<article>
				<form name="member_form" method="post" action="modify_password.php?id=<?= $userid ?>">
					<h2>회원정보 수정<span>MY INFO</span></h2>
					<p>회원님의 정보를 수정하실 수 있습니다.</p>
					<p>*기존비밀번호<input type="password" name="pass"></p>
					<p>*신규비밀번호<input type="password" name="pass_confirm"></p>
				</form>
				<a href="#" onclick="check_input('<?=$pass?>')">수정하기</a>
				<div>

				</div>
				</form>

			</article>
		</div>
	</section>
	<footer>
	<?php include "footer.php";?>
	</footer>
</body>

</html>