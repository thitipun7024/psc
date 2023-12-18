<?php
session_start();
include("../Connection/conn.php");
$check = $_POST['check'];

	$sql2 = "INSERT INTO tb_check VALUES (null,'$check','".$_SESSION['id_user']."')";
	$result2 = mysqli_query($conn, $sql2);
	
	if($result2){
		echo "<script>";
		echo "alert(\" เพิ่มหัวข้อเเบบประเมินสำเร็จ \");";
		echo "window.location.href='index.php?option=check'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\"เพิ่มหัวข้อเเบบประเมินไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}	
?>