<?php
    $id = $_GET["id"];
    
    $con = mysqli_connect("localhost", "project", "1234", "project");

    
    $sql = "select * from members where id='$id'";
    $result = mysqli_query($con, $sql);
    $num_record = mysqli_num_rows($result);
    if (!$num_record)
    {
        echo "해당 id사용자는 없습니다.";
    }
    else{
        $sq2 = "DELETE FROM members WHERE id = '$id'";

	    mysqli_query($con, $sq2);  // $sql 에 저장된 명령 실행
        mysqli_close($con);     
        echo "삭제되었습니다.";
    }
    
?>

   
