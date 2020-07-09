<?php
    $name   = $_POST["name"];
    $price = $_POST["price"];
    $kategorie = $_POST["kategorie"];
    $last_day  = $_POST["last_day"];
    $image_file  = $_POST["image_file"];
    
    $regist_day = date("Y-m-d (H:i)");

    $con = mysqli_connect("localhost", "project", "1234", "project");

	$sql = "insert into product(name, price, kategorie, regist_day, last_day, image_file) ";
	$sql .= "values('$name', '$price', '$kategorie', '$regist_day', '$last_day','$image_file')";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
?>

   
