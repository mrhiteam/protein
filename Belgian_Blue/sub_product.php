<?php
    $name = $_GET["name"];
    
    $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");

    
    $sql = "select * from members where id='$name'";
    $result = mysqli_query($con, $sql);
    $num_record = mysqli_num_rows($result);
    if (!$num_record)
    {
        echo "해당 이름 상품은 없습니다.";
    }
    else{
        $sq2 = "DELETE FROM members WHERE id = '$id'";

	    mysqli_query($con, $sq2);  // $sql 에 저장된 명령 실행
        mysqli_close($con);     
        echo "삭제되었습니다.";
    }
    
?>

   
