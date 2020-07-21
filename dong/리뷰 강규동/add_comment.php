<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=dior909homme', 'dior909homme', 'ngKan11gGu!');

$error = '';
$comment_nick = $_POST["comment_nick"];
$comment_name = $_POST["comment_name"];
$comment_pname = $_POST["comment_pname"];
$comment_content = '';
$star_rate = $_POST["star_rate"];




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
 (parent_comment_id, star_rate, comment, comment_sender_name, comment_pname, comment_nick) 
 VALUES (:parent_comment_id, :star_rate, :comment, :comment_sender_name, :comment_pname, :comment_nick)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':star_rate' => $star_rate,
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name,
   ':comment_nick' => $comment_nick,
   ':comment_pname' => $comment_pname
  )
 );
 $error = '<label class="text-success">남겨주셔서 감사합니다!</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>
