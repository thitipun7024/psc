<?php
session_start();
include("../Connection/conn.php");
$name = $_POST['name_sch'];
$phone = $_POST['phone_sch'];
$address = $_POST['address_user'];
$detail = $_POST['detail'];
$date = $_POST['date_sch'];
$status = "1";


	$sql2 = "INSERT INTO tb_schedule VALUES (null,'$name','$phone','$address','$detail','$status','$date','".$_SESSION['id_user']."')";
	$result2 = mysqli_query($conn, $sql2);
	
	if($result2){
		echo "<script>";
		echo "alert(\" เพิ่มตารางนัดหมายสำเร็จ \");";
		echo "window.location.href='index.php?option=schedule'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\" เพิ่มตารางนัดหมายไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}	
?>