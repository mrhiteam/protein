<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <title>Belgian Blue</title>
    <meta name="author" content="Belgian  " />
    <!-- 제작자 -->
    <meta name="description" content="각종 헬스 용품 및 설명 넣을것" />
    <!-- 검색엔진에 나타나는 홈페이지 설명-->

    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1,minimum-scale=1"
    />
    <!-- width=device-width반응형 웹을 위한viewport 가로넓이는 우리가 사용하는 기기랑 같은 크기로 사용할것 명시
        initial-scale=1 다양한 디바이스에 초기화면 비율 기본값은 1이다.
        user-scalable=no 스마트폰에서 확대 축소를 막아주는 기능
        maximum-scale=1,minimum-scale=1 최대 확대값 최소 확대값 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- 최신의 익스플로러 8버전 이상으로 렌더링으로 설정 건드릴 필요 X  -->
    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Belgian Blue" />
    <meta property="og:description" content="각종 헬스 용품 및 설명 넣을것" />
    <meta property="og:image" content="" />
    <!--사이트를 대표할 이미지-->
    <meta property="og:url" content="우리웹사이트주소" />
    <!-- Open Graph 약어->og 정보 타입이 웹사이트라 명시 외부에 전달할 정보를 전달
        대표 이미지는 뭐고 제목이 뭐고 이런걸 설명! 주로 페이스북에서 많이 활용
        두개 사용 이유 특정한 사이트에서 공유 될때 보여지는 이미지-->

    <!-- Twitter Card -->
    <meta property="twitter:card" content="summary" />
    <meta property="twitter:site" content="Belgian Blue" />
    <meta property="twitter:title" content="과학적으로 근육 만들기" />
    <meta
      property="twitter:description"
      content="각종 헬스 용품 및 설명 넣을것"
    />
    <meta property="twitter:image" content="#" />
    <meta property="twitter:url" content="우리웹사이트주소" />

    <!-- <link rel="shortcut icon" type="image/x=icon" href="#"> -->
    <!-- 인터넷 익스플로러에 사용될 아이콘 .ico를 우선 -->
    <link rel="icon" href="image/logo3.png" />
    <!-- 사이표를 대표 하는 아이콘  -->
    <!-- 스마트폰에서도 적용 시키기 위한 아이콘 -->
    <link rel="apple=touch-icon" href="image/logo3.png" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.4.1.min.js"></script>
	<script src="js/jquery.color-2.1.2.min.js"></script>
	<script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
	<link rel="stylesheet" href="css/header-footer.css?after">
	<link rel="stylesheet" href="css/main.css?after" />
	<link rel="stylesheet" type="text/css" href="./css/item-card.css">
	<script type="text/javascript" src="./js/login.js"></script>
</head>
<script>
	function tipmove() {
		location.href = "";
	}
</script>

<body>
	<header id="pcheader">
		<?php include "header.php"; ?>
	</header>
	<?php include "mobheader.php" ?>
	<section>
		<?php

		$con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
		$sql_1 = "select count(*) from product";
		$result = mysqli_query($con, $sql_1);
		$count = mysqli_fetch_array($result);

		?>
		<div class="side">
			<div class="call"></div>
			<a href="#" class="topmove"></a>
		</div>
		<div class="swiper-container swiper-container-m">
			<div class="swiper-wrapper big-slide">
				<div href=" " class=" swiper-slide">
					<img src=" image/bigslide.jpg" alt="메인 슬라이드" />
				</div>
				<div href=" " class=" swiper-slide">
					<img src=" image/bigslide2.jpg" alt="메인 슬라이드" />
				</div>
				<div href=" " class=" swiper-slide">
					<img src=" image/bigslide3.jpg" alt="메인 슬라이드" />
				</div>

			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<article>
			<div class="inner">
				<div class="namebox">
					<p>인기 상품</p>
					<a href="bestproduct.php" alt="페이지 이동">더 보기
					</a>
				</div>

				<h2>벨지안 블루 실시간 BEST
					<br>
					<sub>
						매주 월요일 00:00시에 업데이트</sub>
				</h2>

				<div class="swiper-container swiper-container-s">
					<div class="swiper-wrapper small-slide">
						<?php
						for ($a = 1; $a <= $count[0]; $a++) {
							$sql = "select * from product where num = $a";
							$result = mysqli_query($con, $sql);
							$row = mysqli_fetch_array($result);
							if ($row == null) {
								$count[0] = $count[0] + 1;
							} elseif ($row['hot'] == 1) {
						?>
								<div class="swiper-slide">
									<div class ="item-card">
										<a href="itempagein.php?num=<?= $row['num'] ?>"><img src="image/<?= $row['image_file'] ?>"></a>
										<h3><?= $row['name'] ?></h3>
										<p>가격:<?= $row['price'] ?></p>
									</div>
								</div>
						<?php
							}
						}
						?>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
		</article>
		<article>
			<div class="inner">
				<div class="namebox">
					<p>벨지안 블루</p>
					<a href="newproduct.php" alt="페이지 이동">더 보기
					</a>
				</div>
				<h2>Origin Belgian</h2>
				<div class="origin">
					<a href="itempagein.php?num=12"><img src="image/event/origin1.png"></a>
					<a href="itempagein.php?num=3"><img src="image/cap.png"></a>
					<a href="itempagein.php?num=17"><img src="image/pants.png"></a>
				</div>
			</div>
		</article>

		<article class="sale">
			<div class="opac">
				<div class="inner">
					<div class="namebox">
						<p>건강 꿀 팁!</p>
						<a href="" class="fff" alt="페이지 이동">더 보기
						</a>
					</div>
					<img src="image/want_to_be_strong.png">
					<p>
						강해지는 방법 .01</p>
					<div class="bestItem">
						<iframe height="100%" src="https://www.youtube.com/embed/3NSgf8NVZGo" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>

						<div class="bestItem__item" onclick="tipmove()">
							<a href="" class="itempay">
								<div class="opac">
									<p>
										구경하기
									</p>
								</div>
							</a>
							<img src="image/belt.png" alt="벨트" /></a>

							<div>
								<h2>득근 득근 안전벨트
									<br>
									<span>35%</span>
								</h2>
								<h3>
									<span>[ 벨지안 블루 ]</span><br>
									안전을 위한 득근을 위한<br>필수 벨트<br>
									<br>
									72,000원<del>104,000원</del>
								</h3>

							</div>
							</a>

						</div>
					</div>
				</div>
			</div>
		</article>
		<article class="eventpay">
			<div class="inner">
				<div class="namebox">
					<p>이벤트</p>
					<a href="event.php" alt="페이지 이동">더 보기
					</a>
				</div>
				<a href=""><img src="image/banner/dotum.jpg"></a>
				<a href=""><img src="image/banner/toss.jpg"></a>
			</div>

		</article>
		<article>
			<div class="inner">
				<div class="namebox">
					<p>쉐이크 보조제</p>
					<a href="product.php?kate=쉐이크/보조제&sub_kate=all" alt="페이지 이동">더 보기
					</a>
				</div>
				<h2>웨이트인 필수 템</h2>

				<div class="swiper-container swiper-container-s">
					<div class="swiper-wrapper small-slide">
						<?php
						$con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
						$sql_1 = "select count(*) from product";
						$result = mysqli_query($con, $sql_1);
						$count = mysqli_fetch_array($result);

						for ($a = 1; $a <= $count[0]; $a++) {
							$sql = "select * from product where num = $a";
							$result = mysqli_query($con, $sql);
							$row = mysqli_fetch_array($result);
							if ($row == null) {
								$count[0] = $count[0] + 1;
							} elseif ($row['kategorie'] == "쉐이크/보조제") {
						?>
								<div class="swiper-slide">
									<div class="item-card">
										<a href="itempagein.php?num=<?= $row['num'] ?>"><img src="image/<?= $row['image_file'] ?>"></a>
										<h3><?= $row['name'] ?></h3>
										<p>가격:<?= $row['price'] ?></p>
									</div>
								</div>
						<?php
							}
						}
						?>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
		</article>
		<article>
			<div class="inner">
				<div class="namebox">
					<p>스포츠 웨어</p>
					<a href="product.php?kate=스포츠웨어&sub_kate=all" alt="페이지 이동">더 보기
					</a>
				</div>
				<h2>벨지안 픽 머슬슈트</h2>

				<div class="swiper-container swiper-container-s">
					<div class="swiper-wrapper small-slide">
					<?php
						$con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
						$sql_1 = "select count(*) from product";
						$result = mysqli_query($con, $sql_1);
						$count = mysqli_fetch_array($result);

						for ($a = 1; $a <= $count[0]; $a++) {
							$sql = "select * from product where num = $a";
							$result = mysqli_query($con, $sql);
							$row = mysqli_fetch_array($result);
							if ($row == null) {
								$count[0] = $count[0] + 1;
							} elseif ($row['kategorie'] == "스포츠웨어") {
						?>
								<div class="swiper-slide">
									<div class="item-card">
										<a href="itempagein.php?num=<?= $row['num'] ?>"><img src="image/<?= $row['image_file'] ?>"></a>
										<h3><?= $row['name'] ?></h3>
										<p>가격:<?= $row['price'] ?></p>
									</div>
								</div>
						<?php
							}
						}
						?>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
		</article>
		<article>
			<div class="inner">
				<div class="namebox">
					<p>헬스 용품</p>
					<a href="product.php?kate=헬스용품&sub_kate=all" alt="페이지 이동">더 보기
					</a>
				</div>
				<h2>바쁠 땐 집에서 홈트레이닝</h2>

				<div class="swiper-container swiper-container-s">
					<div class="swiper-wrapper small-slide">
					<?php
						$con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
						$sql_1 = "select count(*) from product";
						$result = mysqli_query($con, $sql_1);
						$count = mysqli_fetch_array($result);

						for ($a = 1; $a <= $count[0]; $a++) {
							$sql = "select * from product where num = $a";
							$result = mysqli_query($con, $sql);
							$row = mysqli_fetch_array($result);
							if ($row == null) {
								$count[0] = $count[0] + 1;
							} elseif ($row['kategorie'] == "헬스용품") {
						?>
								<div class="swiper-slide">
									<div class="item-card">
										<a href="itempagein.php?num=<?= $row['num'] ?>"><img src="image/<?= $row['image_file'] ?>"></a>
										<h3><?= $row['name'] ?></h3>
										<p>가격:<?= $row['price'] ?></p>
									</div>
								</div>
						<?php
							}
						}
						?>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
		</article>
		<article>
			<div class="inner">
				<div class="namebox">
					<p>웨이트 식품</p>
					<a href="product.php?kate=식품&sub_kate=all" alt="페이지 이동">더 보기
					</a>
				</div>
				<h2>뼈 속까지 헬창 맛있게 식단하기</h2>

				<div class="swiper-container swiper-container-s">
					<div class="swiper-wrapper small-slide">
					<?php
						$con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
						$sql_1 = "select count(*) from product";
						$result = mysqli_query($con, $sql_1);
						$count = mysqli_fetch_array($result);

						for ($a = 1; $a <= $count[0]; $a++) {
							$sql = "select * from product where num = $a";
							$result = mysqli_query($con, $sql);
							$row = mysqli_fetch_array($result);
							if ($row == null) {
								$count[0] = $count[0] + 1;
							} elseif ($row['kategorie'] == "식품") {
						?>
								<div class="swiper-slide">
									<div class="item-card">
										<a href="itempagein.php?num=<?= $row['num'] ?>"><img src="image/<?= $row['image_file'] ?>"></a>
										<h3><?= $row['name'] ?></h3>
										<p>가격:<?= $row['price'] ?></p>
									</div>
								</div>
						<?php
							}
						}
						?>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
		</article>
		<article class="customerbox">
			<div class="inner">

				<div class="gongi">
					<h2> 벨지안 소식 </h2>
					<?php include "board_list.php" ?>
				</div>
				<div class="callcenter">
					<h2> 전화 상담 </h2>
					<img src="image/callcenter.png">
					<h1>02-XXX-XXXX</h1>
					<P>전화상담 시간 안내<br>매일 09:00 ~ 18:00</P>
				</div>
			</div>
		</article>
	</section>
	<footer>
		<?php include "footer.php"; ?>
	</footer>
</body>
<script>
	var mswiper = new Swiper(".swiper-container-m", {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		keyboard: {
			enabled: true
		},
		autoplay: {
			delay: 3000,
			disableOnInteraction: true
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev"
		}
	});

	var swiper = new Swiper(".swiper-container-s", {
		slidesPerView: 3,
		spaceBetween: 10,
		loop: true,
		keyboard: {
			enabled: true
		},
		autoplay: {
			delay: 2000,
			disableOnInteraction: false
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev"
		},
		breakpoints: {
			320: {
				slidesPerView: 3,
				spaceBetween: 10
			},
			768: {
				slidesPerView: 4,
				spaceBetween: 10
			},
			1024: {
				slidesPerView: 4,
				spaceBetween: 10
			}
		}
	});
	$(window).resize(function() {
		// width값을 가져오기
		var width_size = window.outerWidth;

		// 800 이하인지 if문으로 확인
		if (width_size <= 1024) {
			swiper
				.autoplay
				.stop();

		} else {
			swiper
				.autoplay
				.start();
		}
	});
</script>

</html>