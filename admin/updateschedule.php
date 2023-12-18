<?php
session_start();
include("../Connection/conn.php");
$id = $_POST['id_schedule'];
$name = $_POST['name_sch'];
$phone = $_POST['phone_sch'];
$address = $_POST['address_user'];
$detail = $_POST['detail'];
$date = $_POST['date_sch'];
$status = $_POST['status_sch'];



	$sql3 = "UPDATE tb_schedule SET name_sch ='$name', phone_sch ='$phone', address_user ='$address', detail ='$detail', status_sch ='$status', date_sch ='$date', id_user ='".$_SESSION['id_user']."' WHERE id_schedule = '$id'";
	$result3 = mysqli_query($conn, $sql3);
;
	
	if($result3){
		echo "<script>";
		echo "alert(\" เเก้ไขตารางนัดหมายสำเร็จ \");";
		echo "window.location.href='index.php?option=schedule'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\"เเก้ไขตารางนัดหมายไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>