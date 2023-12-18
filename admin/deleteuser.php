<?php 
	include("../Connection/conn.php");
	$id = $_REQUEST['id_user'];
	
	$sql = "DELETE FROM tb_user WHERE id_user = '$id'";
	$result = mysqli_query($conn, $sql);

	if($result){
		echo "<script>";
		echo "alert(\" ลบสมาชิกสำเร็จ \");";
		echo "window.location.href='index.php?option=alluser'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\" ลบสมาชิกไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>