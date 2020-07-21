<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
<style>
	header {
		display: none;
	}
</style>
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
	
   	<div id="board_box">
	   
<?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost", "project", "1234", "project");
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$id      = $row["id"];
	$name      = $row["name"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$content    = $row["content"];
	$file_name    = $row["file_name"];
	$file_type    = $row["file_type"];
	$file_copied  = $row["file_copied"];
	$hit          = $row["hit"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	$new_hit = $hit + 1;
	$sql = "update board set hit=$new_hit where num=$num";   
	mysqli_query($con, $sql);
?>		
	    <ul id="view_content">
			<li>
				<span class="col1"><b>제목 :</b> <?=$subject?></span>
				<span class="col2"><?=$name?> | <?=$regist_day?></span>
			</li>
			<li>
				<?php
					if($file_name) {
						$real_name = $file_copied;
						$file_path = "./data/".$real_name;
						$file_size = filesize($file_path);

						echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
						   <a href='board_download.php?num=$num&
						   real_name=$real_name&
						   file_name=$file_name&
						   file_type=$file_type'>[저장]</a><br><br>";
			           	}
				?>
				<?=$content?>
			</li>		
	    </ul>
	    
	</div> <!-- board_box -->
</section> 

</body>
</html>
