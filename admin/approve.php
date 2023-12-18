<?php
session_start();
include("../Connection/conn.php");
$id = $_REQUEST['id_schedule'];
$status = "2";

	$sql3 = "UPDATE tb_schedule SET status_sch ='$status' WHERE id_schedule = '$id'";
	$result3 = mysqli_query($conn, $sql3);
	
	if($result3){
		echo "<script>";
		echo "alert(\" เปลี่ยนสถานะสำเร็จ \");";
		echo "window.location.href='index.php?option=schedule'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\"เปลี่ยนสถานะไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>