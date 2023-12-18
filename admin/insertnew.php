<?php
session_start();
include("../Connection/conn.php");
$detail = $_POST['detail'];
$date = date("Y-m-d H:i:s");

$img = $_FILES["img"]["name"];
$img_tmp = $_FILES["img"]["tmp_name"];

$local = "img/";
$namefile = $local.$detail."-".$img;
$namefile2 = $detail."-".$img;
move_uploaded_file($img_tmp = $_FILES["img"]["tmp_name"], $namefile);

	$sql2 = "INSERT INTO tb_new VALUES (null,null,'$detail','".$_SESSION['login_user']."','$namefile2','$date')";
	$result2 = mysqli_query($conn, $sql2);
	
	if($result2){
		echo "<script>";
		echo "alert(\" เพิ่มประชาสัมมพันธ์สำเร็จ \");";
		echo "window.location.href='index.php?option=new'";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert(\" เพิ่มประชาสัมมพันธ์ไม่สำเร็จ \");";
		echo "window.history.back()";
		echo "</script>";
	}	
?>