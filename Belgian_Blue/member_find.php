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
   $name = $_POST["name"];
   $phone = $_POST["phone"];

   if(!$name || !$phone ) 
   {
      echo("<p>이름, 폰번호 입력해 주세요!</p>");
   }
   else
   {
      $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");

      $sql = "select id from members where name = '$name' and selphone = '$phone'";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_array($result);
      
     
      if(!$row['id']){
         echo "<p>찾으시는 아이디가 없습니다..</p>";
      } else {
         echo "<p>당신의 아이디는 ".$row['id']." 입니다.</p>";
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

