<?php
    $num = $_GET['num'];
    $fin = $_GET['fin'];
    $con = mysqli_connect("localhost", "project", "1234", "project");
    if($fin==0){
        $sql = "update orederlist set status = 'going' where num = '$num'";
    }
    elseif($fin==1){
        $sql = "update orederlist set status = 'ordered' where num = '$num'";
    }
    else{
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