<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
</head>
<body> 
  
<section>
	
   	<div id="board_box">
	  
	    <table id="board_list">
				<tr>
					<td class="col1">번호</td>
					<td class="col2">제목</td>
					<td class="col3">글쓴이</td>
					<td class="col5">등록일</td>
				</tr>
<?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", "dior909homme", "ngKan11gGu!", "dior909homme");
	$sql = "select * from board order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 5;

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;

   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
   {
      mysqli_data_seek($result, $i);
      // 가져올 레코드로 위치(포인터) 이동
      $row = mysqli_fetch_array($result);
      // 하나의 레코드 가져오기
	  $num         = $row["num"];
	  $id          = $row["id"];
	  $name        = $row["name"];
	  $subject     = $row["subject"];
      $regist_day  = $row["regist_day"];
    
?>
				<tr>
					<td class="col1"><?=$number?></td>
					<td class="col2"><a onclick="sub(<?=$num?>,<?=$page?>)"><?=$subject?></a></td>
					<td class="col3"><?=$name?></td>
					<td class="col5"><?=$regist_day?></td>
					
				</tr>	
<?php
   	   $number--;
   }
   mysqli_close($con);

?>
	    	</table>
			<ul id="page_num"> 	
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<li><a href='customercenter.php?page=$new_page#notice'>◀ 이전</a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";

   	// 게시판 목록 하단에 페이지 링크 번호 출력
   	for ($i=1; $i<=$total_page; $i++)
   	{
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<li><b> $i </b></li>";
		}
		else
		{
			echo "<li><a href='customercenter.php?page=$i#notice'> $i </a><li>";
		}
   	}
   	if ($total_page>=2 && $page != $total_page)		
   	{
		$new_page = $page+1;	
		echo "<li> <a href='customercenter.php?page=$new_page#notice'>다음 ▶</a> </li>";
	}
	else 
		echo "<li>&nbsp;</li>";
?>
			</ul> <!-- page -->	    	
			
			
	</div> <!-- board_box -->
</section> 
<script>
function sub(a , b) {
	window.open(`board_view.php?num=${a}&page=${b}`,"board-view","left=200,top=200,width=700,height=200,scrollbars=no,resizable=yes");
}

</script>
</body>
</html>
