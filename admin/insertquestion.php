<?php
session_start();
include("../Connection/conn.php");
$topic = $_POST['topic'];
$detail = $_POST['detail'];
$date = date("Y-m-d H:i:s");
$view = 0;
$reply = 0;

	$sql2 = "INSERT INTO tb_question VALUES (null,'$topic','$detail','".$_SESSION['login_user']."','$date','$view','$reply','".$_SESSION['id_user']."')";
	$result2 = mysqli_query($conn, $sql2);
	
	if($result2){
		echo "<script>";
		echo "alert(\" เพิ่มกระดานบอร์ดสำเร็จ \");";
		echo "window.location.href='index.php?option=question'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\" เพิ่มกระดานบอร์ดไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}	
?>