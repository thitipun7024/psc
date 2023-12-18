<?php 
	include("../Connection/conn.php");
	$id = $_REQUEST['id_hospital'];
	
	$sql = "DELETE FROM tb_hospital WHERE id_hospital = '$id'";
	$result = mysqli_query($conn, $sql);

	if($result){
		echo "<script>";
		echo "alert(\" ลบข้อมูลโรงพยาบาลสำเร็จ \");";
		echo "window.location.href='index.php?option=hospital'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\" ลบข้อมูลโรงพยาบาลไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>