<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=dior909homme', 'dior909homme', 'ngKan11gGu!');

$error = '';
<<<<<<< HEAD
$comment_nick2 = $_POST["comment_nick2"];
$comment_name2 = $_POST["comment_name2"];
$comment_pname2 = $_POST["comment_pname2"];
$comment_content2 = '';





if(empty($_POST["comment_content2"]))
=======
$comment_name = '';
$comment_content = '';



if(empty($_POST["comment_name"]))
{
 $error .= '<p class="text-danger">이름이 필요합니다.</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
{
 $error .= '<p class="text-danger">내용이 필요합니다.</p>';
}
else
{
<<<<<<< HEAD
 $comment_content2 = $_POST["comment_content2"];
=======
 $comment_content = $_POST["comment_content"];
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
}

if($error == '')
{
 $query = "
 INSERT INTO qnacomment
<<<<<<< HEAD
 (parent_comment_id, comment, comment_sender_name, comment_nick, comment_pname) 
 VALUES (:parent_comment_id2, :comment2, :comment_sender_name2, :comment_nick2, :comment_pname2)
=======
 (parent_comment_id, comment, comment_sender_name) 
 VALUES (:parent_comment_id,, :comment, :comment_sender_name)
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
<<<<<<< HEAD
   ':parent_comment_id2' => $_POST["comment_id2"],
   ':comment2'    => $comment_content2,
   ':comment_sender_name2' => $comment_name2,
   ':comment_nick2' => $comment_nick2,
   ':comment_pname2' => $comment_pname2 //value값까지 다르게 해야한다!!
=======
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name
>>>>>>> f35a68d35cf0307c189f1e8c88bac15c6c282942
  )
 );
 $error = '<label class="text-success">남겨주셔서 감사합니다!</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>
