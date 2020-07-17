<?php
    $num = $_POST["num"];
    $name  = $_POST["name"];
    $price = $_POST["price"];
    $kategorie = $_POST["kategorie"];
    $image_file  = $_POST["image_file"];
    $event = $_POST["event"];
    $hot = $_POST["hot"];
    $new = $_POST["new"];

    //echo $num.$name.$price.$kategorie.$image_file.$event.$hot.$new;
    
    $con = mysqli_connect("localhost", "project", "1234", "project");
    $sql = "update product set name='$name', price='$price', kategorie='$kategorie', image_file='$image_file', event='$event', hot='$hot', new='$new' ";
    $sql .= " where num='$num'";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'product_management_list.php';
	      </script>
      ";
      
?>

   
