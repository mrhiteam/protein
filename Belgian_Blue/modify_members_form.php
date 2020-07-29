<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.4.1.min.js"></script>
	<script src="js/jquery.color-2.1.2.min.js"></script>
	<script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link rel="stylesheet" type="text/css" href="./css/header-footer.css">
	<link rel="stylesheet" href="css/header-footer.css?after">

	<link rel="stylesheet" type="text/css" href="./css/mypage.css">
	<link rel="stylesheet" href="css/mypage.css?after">
	<link rel="stylesheet" href="css/basket.css?after">
	<link rel="stylesheet" href="css/order.css?after">
	<link rel="stylesheet" href="css/pick.css?after">
	<script type="text/javascript" src="./js/login.js"></script>

</head>
<script>
	function sub_pick(a, b) {
		window.open("sub_pick.php?product_count=" + a + " &total_count=" + b, "pick", "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
	}
</script>
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

		if (!document.member_form.name.value) {
			alert("이름을 입력하세요!");
			document.member_form.name.focus();
			return;
		}

		if (!document.member_form.address.value) {
			alert("주소를 입력하세요!");
			document.member_form.address.focus();
			return;
		}

		if (!document.member_form.email1.value) {
			alert("이메일 주소를 입력하세요!");
			document.member_form.email1.focus();
			return;
		}

		if (!document.member_form.email2.value) {
			alert("이메일 주소를 입력하세요!");
			document.member_form.email2.focus();
			return;
		}
		if (!document.member_form.selphone.value) {
			alert("전화번호를 입력하세요!");
			document.member_form.selphone.focus();
			return;
		}

		document.member_form.submit();
	}
</script>
<style>
	.chmem {
		border-top: 1px solid black;
		padding: 20px 0;
	}

	.chmem p {
		margin-top: 5px;
		font-weight: bold;
	}

	.chmem>div>a {
		display: block;
		background-color: #00000060;
		text-align: center;
		width: 120px;
		margin-top: 5px;
		color: #fff;
	}

	.chmem1 {
		display: block;
		width: 100px;
		height: 35px;
		text-align: center;
		font-weight: bold;
		border: 1.5px solid black;
		padding-top: 2px;
		margin: 12px auto;

	}

	.chmem2 {
		border: 1px solid #00000030;
		padding: 10px;
	}
</style>

<body>
	<header id="pcheader">
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
			<h1>마이페이지</h1>
			<!-- 사이드 네비게이션  -->
			<nav id="mynav">
				<ul class="mgnb">
					<li>
						<a>나의 쇼핑</a>

						<ul class="msub1">
							<li><a href="checkorder.php">주문/배송조회</a></li>
							<li><a href="checkordered.php">주문 내역</a></li>
							<li><a href="basket.php">장바구니</a></li>
							<li><a href="pick_form.php">나의 찜 목록</a></li>
						</ul>
					</li>
					<li><a>나의 혜택</a>

						<ul class="msub">
							<li><a href="mypoint.php">적립금 내역</a></li>
						</ul>
					</li>
					<li><a>나의 활동</a>

						<ul class="msub">
							<li><a href="myquestion.php">내가 쓴 상품문의</a></li>
							<li><a href="myreview.php">내가 쓴 상품리뷰</a></li>
						</ul>
					</li>
					<li><a>나의 정보</a>

						<ul class="msub">
							<li><a href="modify_members_form.php">회원정보수정</a></li>
							<li><a href="sign_out_form.php">회원 탈퇴</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<article>
				<form class="chmem2" name="member_form" method="post" action="modify_members.php?id=<?= $userid ?>">
					<h2>회원정보 수정<span>MY INFO</span></h2>
					<p>회원님의 정보를 수정하실 수 있습니다.</p>
					<div class="chmem">
						<p>*이름<input type="text" name="name" value="<?= $name ?>"></p>
						<p>*아이디<?= $userid ?></p>
						<p>*비밀번호<input type="password" name="pass"></p>
						<div>
							<a href="modify_password_form.php">비밀번호 변경</a>
						</div>
						<p>*생년월일<input type="date"></p>
						<p>*이메일<input type="text" name="email1" value="<?= $email1 ?>">@<input type="text" name="email2" value="<?= $email2 ?>"></p>
						<p>*연락처<input type="text" name="selphone" value="<?= $phone ?>"></p>
						<p>*주소<input type="text" name="address" value="<?= $address ?>"></p>
					</div>
				</form>
				<a href="#" class="chmem1" onclick="check_input('<?= $pass ?>')">수정하기</a>
				<div>

				</div>
				</form>

			</article>
		</div>
	</section>
	<footer>
		<?php include "footer.php"; ?>
	</footer>
</body>

</html>