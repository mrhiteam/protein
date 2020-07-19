<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=dior909homme', 'dior909homme', 'ngKan11gGu!');

$error = '';
$comment_name = '';
$comment_content = '';
$star_rate = $_POST["star_rate"]; //여기에 문제가 있었음!!!!


if(empty($_POST["comment_name"]))
{
 $error .= '<p class="text-danger">이름이 필요합니다.</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">내용이 필요합니다.</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO tbl_comment 
 (parent_comment_id, star_rate, comment, comment_sender_name) 
 VALUES (:parent_comment_id, :star_rate, :comment, :comment_sender_name)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':star_rate' => $star_rate,
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name
  )
 );
 $error = '<label class="text-success">남겨주셔서 감사합니다!</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>
