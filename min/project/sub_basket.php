<?php
    $i=$_GET["name"];
    echo $i;
    session_start();
    unset($_SESSION["product'$i'"]);
    $_SESSION["price"]=$_SESSION["price"]-$_SESSION["product'$i'price"];
    unset($_SESSION["product'$i'count"]);
    unset($_SESSION["product'$i'price"]);

?>