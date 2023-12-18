<?php
session_start();
include("../Connection/conn.php");
$id = $_REQUEST['id_hospital'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];


	$sql3 = "UPDATE tb_hospital SET name_hospital ='$name',address_hospital ='$address',phone_hospital ='$phone' WHERE id_hospital = '$id'";
	$result3 = mysqli_query($conn, $sql3);
	
	if($result3){
		echo "<script>";
		echo "alert(\" เเก้ไขข้อมูลโรงพยาบาลสำเร็จ \");";
		echo "window.location.href='index.php?option=hospital'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\ เเก้ไขข้อมูลโรงพยาบาลไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}
?>