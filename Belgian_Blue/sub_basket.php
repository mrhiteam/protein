<?php
    $i=$_GET["name"];
    echo "장바구니에서 삭제되었습니다.";
    session_start();
    unset($_SESSION["product'$i'"]);
    $_SESSION["price"]=$_SESSION["price"]-$_SESSION["product'$i'price"];
    unset($_SESSION["product'$i'count"]);
    unset($_SESSION["product'$i'price"]);

?>