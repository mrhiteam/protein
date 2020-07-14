<?php
    session_start();
    $product_count = $_GET["product_count"];
    $total_count = $_GET["total_count"];
    $userid = $_SESSION["userid"];
    $con = mysqli_connect("localhost", "project", "1234", "project");
    echo $product_count;
    $sql = "update picked set product_$product_count = null where id = '$userid'";
    $result = mysqli_query($con, $sql);
    $total_count--;
    
    $sql = "update picked set product_count = $total_count where id = '$userid'";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
    echo "찜목록에서 제거 되었습니다."
?>