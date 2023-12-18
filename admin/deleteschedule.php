<?php 
	include("../Connection/conn.php");
	$id = $_REQUEST['id_schedule'];
	
	$sql = "DELETE FROM tb_schedule WHERE id_schedule = '$id'";
	$result = mysqli_query($conn, $sql);

	if($result){
		echo "<script>";
		echo "alert(\" ลบประตารางนัดสำเร็จ \");";
		echo "window.location.href='index.php?option=schedule'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\" ลบประตารางนัดไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>