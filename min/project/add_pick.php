<?php
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";

$num = $_GET['num'];

$con = mysqli_connect("localhost", "project", "1234", "project");
$count = "select * from picked where id = '$userid'";
$result = mysqli_query($con, $count);
$count_result = mysqli_fetch_row($result);
$check=0;
$procount = $count_result[8];
for($i=2;$i<=7;$i++){
    if($count_result[$i]==$num){
        $check=1;
    }
}
if($check==1){
    echo "이미 찜한 상품입니다.";
}
else{
$sql = "update picked set product_$procount = $num where id = '$userid'";
mysqli_query($con, $sql);
$procount++;
$sql = "update picked set product_count = $procount where id = '$userid'";
mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
}


mysqli_close($con);

echo "
          <script>
	          location.href = 'product_detail.php?num=$num';
	      </script>
      ";
  
?>