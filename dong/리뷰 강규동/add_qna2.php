<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=dior909homme', 'dior909homme', 'ngKan11gGu!');

$error = '';
$comment_nick2 = $_POST["comment_nick3"];
$comment_name2 = $_POST["comment_name3"];
$comment_pname2 = $_POST["comment_pname3"];
$comment_content2 = '';





if(empty($_POST["comment_content3"]))
{
 $error .= '<p class="text-danger">내용이 필요합니다.</p>';
}
else
{
 $comment_content2 = $_POST["comment_content3"];
}

if($error == '')
{
 $query = "
 INSERT INTO notice
 (parent_comment_id, comment, comment_sender_name, comment_nick, comment_pname) 
 VALUES (:parent_comment_id3, :comment3, :comment_sender_name3, :comment_nick3, :comment_pname3)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id3' => $_POST["comment_id3"],
   ':comment3'    => $comment_content3,
   ':comment_sender_name3' => $comment_name3,
   ':comment_nick3' => $comment_nick3,
   ':comment_pname3' => $comment_pname3 //value값까지 다르게 해야한다!!
  )
 );
 $error = '<label class="text-success">남겨주셔서 감사합니다!</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>
