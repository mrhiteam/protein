<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    </head>
<?php
    $num = $_POST["num"];
    $name  = $_POST["name"];
    $price = $_POST["price"];
    $kategorie = $_POST["kategorie"];
    $image_file  = $_POST["image_file"];
    $info = $_POST["info"];
    $status = $_POST["status"];
    $hot = $_POST["hot"];
    $new = $_POST["new"];

    echo $num.$name.$price.$kategorie.$image_file.$event.$hot.$new;
    
    $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
    $sql = "update product set name='$name', price='$price', kategorie='$kategorie', image_file='$image_file', info='$info', status='$status', event=0, hot='$hot', new='$new' ";
    $sql .= " where num='$num'";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'product_management_list.php';
	      </script>
      ";
      
?>

</html>
