<?php
session_start();
$userid = $_SESSION['userid'];
echo $userid;
$con = mysqli_connect("localhost", "project", "1234", "project");
$sql    = "delete from members where id='$userid'";
mysqli_query($con, $sql);
mysqli_close($con);   
    
    echo "
          <script>
            alert('탈퇴되셨습니다.');
	          location.href = 'logout.php';
	      </script>
      ";
