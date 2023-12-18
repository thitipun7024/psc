<?php 
	include("../Connection/conn.php");
	$id = $_REQUEST['id_ques'];
	
	$sql = "DELETE FROM tb_question WHERE id_ques = '$id'";
	$result = mysqli_query($conn, $sql);

	if($result){
		echo "<script>";
		echo "alert(\" ลบประชาสัมพันธ์สำเร็จ \");";
		echo "window.location.href='index.php?option=question'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\" ลบประชาสัมพันธ์ไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>