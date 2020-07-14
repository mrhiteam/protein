<!DOCTYPE html>
<head>
<meta charset="utf-8">
<style>

</style>
</head>
<body>
<h3>아이디 중복체크</h3>
<p>
<?php
   $id = $_GET["id"];

   if(!$id) 
   {
      echo("<li>아이디를 입력해 주세요!</li>");
   }
   else
   {
      $con = mysqli_connect("localhost", "project", "1234", "project");

 
      $sql = "select * from members where id='$id'";
      $result = mysqli_query($con, $sql);

      $num_record = mysqli_num_rows($result);

      if ($num_record)
      {
         echo "<li>".$id." 아이디는 중복됩니다.</li>";
         echo "<li>다른 아이디를 사용해 주세요!</li>";
         session_start();

         $_SESSION["cheked"] = 0;
      }
      else
      {
         echo "<li>".$id." 아이디는 사용 가능합니다.</li>";
         session_start();
         $_SESSION["cheked"] = 1;
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

