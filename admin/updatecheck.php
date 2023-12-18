<?php
session_start();
include("../Connection/conn.php");
$id = $_REQUEST['id_check'];
$check = $_POST['check'];



	$sql3 = "UPDATE tb_check SET title_check = '$check', id_user = '".$_SESSION['id_user']."' WHERE id_check = '$id'";
	$result3 = mysqli_query($conn, $sql3);
	
	if($result3){
		echo "<script>";
		echo "alert(\" เเก้ไขหัวข้อเเบบประเมินสำเร็จ \");";
		echo "window.location.href='index.php?option=check'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\"เเก้ไขหัวข้อเเบบประเมินไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>