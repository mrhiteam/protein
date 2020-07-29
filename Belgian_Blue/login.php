<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>
<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];

   $con = mysqli_connect("localhost", "minsuk257", "thd486250!", "minsuk257");
   $sql = "select * from members where id='$id'";
   $result = mysqli_query($con, $sql);

   $num_match = mysqli_num_rows($result);

   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysqli_fetch_array($result);
        $db_pass = $row["pass"];

        mysqli_close($con);

        if($pass != $db_pass)
        {

           echo("
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
           ");
           exit;
        }
        else
        {
            session_start();
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["name"];
            $_SESSION["useraddr"] = $row["address"];
            $_SESSION["userlevel"] = $row["level"];
            $_SESSION["userpoint"] = $row["point"];
            $_SESSION["useremail"] = $row["email"];
            $_SESSION["usert_price"] =$row["t_price"];


            echo("
              <script>
                location.href = 'index.php';
              </script>
            ");
        }
     }        
?>
</html>