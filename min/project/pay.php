
<?php
session_start();
$basket = $_SESSION['order_basket'];
$price = $_SESSION['order_price'];
$regist_day = date("Y-m-d (H:i)");
$acount = $_POST['acount'];
$addr = $_POST['addr'];
$phone = $_POST['phone'];

    if (isset($_SESSION["userid"])) {
        $userid = $_SESSION["userid"];
        if (isset($_SESSION["userpoint"])){
            $userpoint = $_SESSION["userpoint"];
            $userpoint = $userpoint + ($price*0.01);
            $con = mysqli_connect("localhost", "project", "1234", "project");
            $sql = "update members set point = $userpoint where id = '$userid'";
            mysqli_query($con,$sql);
            $_SESSION["userpoint"] = $userpoint;
            $userid = $_SESSION["userid"];
            $useremail = $_SESSION["useremail"];
            echo "결제되셨습니다.";

            if($basket==0){
                $pname = $_SESSION['order_pname'];
                $pcount = $_SESSION['order_pcount'];
                $sql = "select * from product where name = '$pname'";
                $result_p = mysqli_query($con,$sql);
                $p_result = mysqli_fetch_row($result_p);
                $sql = "insert into orederlist values('','$p_result[1]', '$p_result[0]', '$p_result[3]', '$pcount', '$regist_day', '$p_result[6]', '$addr', '$userid' ,'$useremail' ,'$phone','ready')";
                mysqli_query($con,$sql);
                mysqli_close($con);
            }
            else if($basket==1){
                for($i=1;$i<20;$i++){
                    if(isset($_SESSION["product'$i'"])){
                        $pname = $_SESSION["product'$i'"];
                        $price = $_SESSION["product'$i'price"];
                        $pcount = $_SESSION["product'$i'count"];
                        $sql = "select * from product where name = '$pname'";
                        $result_p = mysqli_query($con,$sql);
                        $p_result = mysqli_fetch_row($result_p);
                        $sql = "insert into orederlist values('','$p_result[1]', '$p_result[0]', '$p_result[3]', '$pcount', '$regist_day', '$p_result[6]', '$addr', '$userid' ,'$useremail' ,'$phone','ready')";
                        mysqli_query($con,$sql);
                    }
                }
                mysqli_close($con);
                for($i=1;$i<20;$i++){
                    unset($_SESSION["product'$i'"]);
                    unset($_SESSION["product'$i'count"]);
                    unset($_SESSION["product'$i'price"]);
                    unset($_SESSION["price"]);
                  }
            }
        }
        else{
            echo "결제에 실패했습니다.";
        }
    }
    else
        echo "결제에 실패했습니다.";
?>