<?php

//fetch_comment.php
//작동이 안 된 이유는 db 문제였다. 첫번째 줄이 auto increment 그리고 primary key 설정이 안됐음.

$connect = new PDO('mysql:host=localhost;dbname=project', 'project', '1234');

$query = "
SELECT * FROM qnacomment 
WHERE parent_comment_id = '0' 
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
    if($_GET["userid"] == $row["comment_sender_name"]){

 $output .= '
 <div class="panel panel-default">
  <div class="panel-heading">  <mark>'.$row["comment_pname"].'</mark> <b>'.$row["comment_nick"].'</b>('.$row["comment_sender_name"].')님  <i>'.$row["date"].'</i></div>
  <div class="panel-body">'.$row["comment"].'</div>
  <div class="panel-footer" align="right"></div>
 </div>
 ';
    }
 $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;


function get_reply_comment($connect, $parent_id2 = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM qnacomment WHERE parent_comment_id = '".$parent_id2."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id2 == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
    <div class="panel-heading"><b>↪</b>&nbsp;<b>'.$row["comment_nick"].'</b>('.$row["comment_sender_name"].')님의 답글 <i>'.$row["date"].'</i></div>
    <div class="panel-body">'.$row["comment"].'</div>
    <div class="panel-footer" align="right"></div>
   </div>
   ';
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}

?>