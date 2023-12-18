<?php 
	include("../Connection/conn.php");
	$id = $_REQUEST['id_employee'];
	
	$sql = "DELETE FROM tb_employee WHERE id_employee = '$id'";
	$result = mysqli_query($conn, $sql);

	if($result){
		echo "<script>";
		echo "alert(\" ลบข่อมูลพนังงานสำเร็จ \");";
		echo "window.location.href='index.php?option=employee'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\" ลบข่อมูลพนังงานไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>