<?php
    $id = $_GET["id"];

    $pass = $_POST["pass"];
	$name = $_POST["name"];
	$address = $_POST["address"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];

    $email = $email1."@".$email2;
          
    $con = mysqli_connect("localhost", "project", "1234", "project");
    $sql = "update members set pass='$pass', name='$name', address='$address', email='$email' ";
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
?>

   

   
