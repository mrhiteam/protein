<?php
session_start();
$name = $_GET["name"];
$count = $_GET['count'];

$con = mysqli_connect("localhost", "dior909homme", "ngKan11gGu!", "dior909homme");
$sql = "select * from product where name = '$name'";
$result = mysqli_query($con, $sql);
$count_result = mysqli_fetch_row($result);

$price = $count_result[3];

if(isset($_SESSION["price"])) $_SESSION["price"] = ($price*$count)+$_SESSION["price"];
else $_SESSION["price"] = $price * $count;

for($i=1; $i<20;$i++){
    if(isset($_SESSION["product'$i'"])){
        
    }
    else{
        $_SESSION["product'$i'"]=$name;
        $_SESSION["product'$i'count"]=$count;
        $_SESSION["product'$i'price"]=$price*$count;
        $i=20;
    }
}
echo "장바구니에 추가되었습니다.";
?>