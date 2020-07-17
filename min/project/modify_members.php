<?php
    $id = $_GET["id"];
	$name = $_POST["name"];
	$address = $_POST["address"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];
    $selphone = $_POST["selphone"];

    $email = $email1."@".$email2;
          
    $con = mysqli_connect("localhost", "project", "1234", "project");
    $sql = "update members set name='$name', address='$address', email='$email', selphone='$selphone'";
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);   
    session_start();  
    $_SESSION["username"] = $name;
    $_SESSION["useraddr"] = $address;
    $_SESSION["useremail"] = $email;

    echo "
	      <script>
	          location.href = 'mypage.php';
	      </script>
	  ";
?>

   

   
