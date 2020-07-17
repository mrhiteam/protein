<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/jquery-migrate-1.4.1.min.js"></script>
	<script src="js/jquery.color-2.1.2.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="https://kit.fontawesome.com/367c26cb8d.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link rel="stylesheet" type="text/css" href="./css/header-footer.css">
</head>

<body>
	<header>
		<?php include "header.php"; ?>
	</header>
	<section>
		<?php

		$con = mysqli_connect("localhost", "project", "1234", "project");
		$sql_1 = "select count(*) from product";
		$result = mysqli_query($con, $sql_1);
		$count = mysqli_fetch_array($result);
		?>
		<h2>신상품</h2>
		<?php
		for ($a = 1; $a <= $count[0]; $a++) {
			$sql = "select * from product where num = $a";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_array($result);
			if ($row['new'] == 1) {
		?>
				<div>
					<a href="product_detail.php?num=<?= $row['num'] ?>"><img src="image/<?= $row['image_file'] ?>"></a>
					<p>상품 이름:<?= $row['name'] ?></p>
					<p>가격:<?= $row['price'] ?></p>
				</div>
		<?php
			}
			
		}
		?>
	</section>
	<footer>
		<?php include "footer.php"; ?>
	</footer>
</body>

</html>