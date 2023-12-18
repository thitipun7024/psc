<?php
include("../Connection/conn.php");
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];

	$sql2 = "INSERT INTO tb_hospital VALUES (null,'$name','$address','$phone')";
	$result2 = mysqli_query($conn, $sql2);
	
	if($result2){
		echo "<script>";
		echo "alert(\" เพิ่มข้อมูลโรงพยาบาลสำเร็จ \");";
		echo "window.location.href='index.php?option=hospital'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\"เพิ่มข้อมูลโรงพยาบาลไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}	
?>