<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
</head>
<?php
session_start();
$userid = $_SESSION['userid'];
echo $userid;
$con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
$sql    = "delete from members where id='$userid'";
mysqli_query($con, $sql);
mysqli_close($con);   
    
    echo "
          <script>
            alert('탈퇴되셨습니다.');
	          location.href = 'logout.php';
	      </script>
      ";
?>
</html>