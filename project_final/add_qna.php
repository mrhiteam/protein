<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=project', 'project', '1234');

$error = '';
$comment_nick2 = $_POST["comment_nick2"];
$comment_name2 = $_POST["comment_name2"];
$comment_pname2 = $_POST["comment_pname2"];
$comment_content2 = '';





if(empty($_POST["comment_content2"]))
{
 $error .= '<p class="text-danger">내용이 필요합니다.</p>';
}
else
{
 $comment_content2 = $_POST["comment_content2"];
}

if($error == '')
{
 $query = "
 INSERT INTO qnacomment
 (parent_comment_id, comment, comment_sender_name, comment_nick, comment_pname) 
 VALUES (:parent_comment_id2, :comment2, :comment_sender_name2, :comment_nick2, :comment_pname2)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id2' => $_POST["comment_id2"],
   ':comment2'    => $comment_content2,
   ':comment_sender_name2' => $comment_name2,
   ':comment_nick2' => $comment_nick2,
   ':comment_pname2' => $comment_pname2 //value값까지 다르게 해야한다!!
  )
 );
 $error = '<label class="text-success">남겨주셔서 감사합니다!</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>
