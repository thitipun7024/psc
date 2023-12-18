<div class="text-left">
    จำนวนสถิติผู้เข้าชม
<?php
include("../Connection/conn.php");
$sql = "SELECT * FROM tb_counter";
$result = mysqli_query($conn,$sql);
while($dbarr = mysqli_fetch_array($result)){
    $pgcount = $dbarr["num_count"];
}
    $pgcount = $pgcount+1;
    $pgcount = "00000".$pgcount;
    $pgcount = substr($pgcount,-6);
    echo"$pgcount";

    if($option == null){
    $sql2 = "UPDATE tb_counter SET num_count = '$pgcount' WHERE id_count='1'";
    $result2 = mysqli_query($conn,$sql2);
    mysqli_close($conn);
    }
    ?>
    </div>