<?php 
	include("../Connection/conn.php");
	$id = $_REQUEST['id_check'];
	
	$sql = "DELETE FROM tb_check WHERE id_check = '$id'";
	$result = mysqli_query($conn, $sql);

	if($result){
		echo "<script>";
		echo "alert(\" ลบหัวข้อประเมินสำเร็จ \");";
		echo "window.location.href='index.php?option=check'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\"  ลบหัวข้อประเมินไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>