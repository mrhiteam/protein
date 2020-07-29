<?php
    $num = $_GET['num'];
    $fin = $_GET['fin'];
    $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
    if($fin==0){
        $sql = "update orederlist set status = 'going' where num = '$num'";
    }
    elseif($fin==1){
        $sql = "update orederlist set status = 'finish' where num = '$num'";
    }
    mysqli_query($con,$sql);
    if($fin==2){
        echo "
	        <script>
	            location.href = 'checkorder.php';
	        </script>
      ";
    }
    else{
        echo "
	        <script>
	            location.href = 'modify_order_form.php';
	        </script>
        ";
    }
?>