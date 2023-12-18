<?php
session_start();
include("../Connection/conn.php");
$name = $_POST['name'];
$phone = $_POST['phone'];
$detail = $_POST['detail'];

$img = $_FILES["img"]["name"];
$img_tmp = $_FILES["img"]["tmp_name"];

$local = "img/";
$namefile = $local.$name."-".$img;
$namefile2 = $name."-".$img;
move_uploaded_file($img_tmp = $_FILES["img"]["tmp_name"], $namefile);

	$sql2 = "INSERT INTO tb_employee VALUES (null,'$name','$detail','$phone','$namefile2')";
	$result2 = mysqli_query($conn, $sql2);
	
	if($result2){
		echo "<script>";
		echo "alert(\" เพิ่มข้อมูลพนักงานสำเร็จ \");";
		echo "window.location.href='index.php?option=employee'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\" เพิ่มข้อมูลพนักงานไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}	
?>