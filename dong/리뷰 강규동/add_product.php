<?php
    $name   = $_POST["name"];
    $price = $_POST["price"];
    $kategorie = $_POST["kategorie"];
    $last_day  = $_POST["last_day"];
    $image_file  = $_POST["image_file"];
    $info = $_POST["info"];
    
    $regist_day = date("Y-m-d (H:i)");

    $con = mysqli_connect("localhost", "dior909homme", "ngKan11gGu!", "dior909homme");

	$sql = "insert into product(name, price, kategorie, regist_day, last_day, image_file, info) ";
	$sql .= "values('$name', '$price', '$kategorie', '$regist_day', '$last_day','$image_file','$info')";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
?>

   
