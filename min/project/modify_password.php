<?php
    $id = $_GET["id"];
    $pass = $_POST["pass_confirm"];
    $con = mysqli_connect("localhost", "project", "1234", "project");
    $sql = "update members set pass='$pass'";
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);   
    
    echo "
	      <script>
	          location.href = 'mypage.php';
	      </script>
	  ";
?>

   

   
