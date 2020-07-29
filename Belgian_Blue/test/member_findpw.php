<!DOCTYPE html>
<head>
<meta charset="utf-8">
<style>

</style>
</head>
<body>
<h3>아이디 찾기</h3>
<p>
<?php
   $id = $_POST["id"];
   $name = $_POST["name"];
   $phone = $_POST["phone"];

   if(!$name || !$phone || !$id ) 
   {
      echo("<p>아이디, 이름, 폰번호 입력해 주세요!</p>");
   }
   else
   {
      $con = mysqli_connect("localhost", "dior909homme", "ngKan11gGu!", "dior909homme");

      $sql = "select pass from members where id = '$id' and name = '$name' and selphone = '$phone'";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_array($result);
      
     
      if(!$row['pass']){
         echo "<p>찾으시는 비밀번호가 없습니다..</p>";
      } else {
         echo "<p>당신의 비밀번호는 ".$row['pass']." 입니다.</p>";
      }



     
      
      mysqli_close($con);
   }
?>
</p>
<div id="close">
    <a href="#" onclick="javascript:self.close()">닫기</a>
</div>
</body>
</html>

