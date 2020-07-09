<?php
$name = $_GET["name"];
$count = $_GET['count'];

$con = mysqli_connect("localhost", "project", "1234", "project");
$count = "select * from product where id = '$name'";
$result = mysqli_query($con, $count);
$count_result = mysqli_fetch_row($result);

$price = $count_result[3];
//if()
session_start();

$_SESSION["product1"] = $name;
$_SESSION["price"] = $price;
?>