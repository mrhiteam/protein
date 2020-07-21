<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];
    $selphone = $_POST["selphone"];

    $email = $email1."@".$email2;
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

              
    $con = mysqli_connect("localhost", "dior909homme", "ngKan11gGu!", "dior909homme");
    
	$sql = "insert into members(id, pass, name, email, regist_day, level, point, address,selphone) ";
	$sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 9, 0,'$address','$selphone')";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    $sql = "insert into picked(id,product_1, product_2, product_3, product_4, product_5, product_6, product_count) ";
	$sql .= "values('$id','','','','','','', 0)";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);   
    
    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
      ";
    
?>

